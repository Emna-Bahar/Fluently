<?php

namespace App\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

/**
 * Service qui récupère le classement des langues les plus parlées
 * depuis Wikipédia via scraping (données Ethnologue récentes)
 */
class LanguageStatsService
{
    private Client $client;
    private CacheInterface $cache;

    public function __construct(CacheInterface $cache)
    {
        $this->client = new Client([
            'headers' => [
                'User-Agent'      => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36',
                'Accept'          => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8',
                'Accept-Language' => 'fr,fr-FR;q=0.8,en-US;q=0.5,en;q=0.3',
            ],
            'timeout'         => 15,
            'connect_timeout' => 10,
        ]);

        $this->cache = $cache;
    }

    /**
     * Récupère le top des langues les plus parlées
     *
     * @param int $limit Nombre maximum de langues à retourner (défaut 20)
     * @return array Liste des langues avec rang, nom, locuteurs totaux et natifs
     */
    public function getTopLanguages(int $limit = 20): array
    {
        return $this->cache->get('global_languages_stats', function (ItemInterface $item) use ($limit) {
            // Cache pendant 30 jours (les données ne changent pas tous les jours)
            $item->expiresAfter(2592000);

            try {
                // Page actuelle la plus fiable (2025)
                $response = $this->client->get('https://en.wikipedia.org/wiki/List_of_languages_by_total_number_of_speakers');
                $html = (string) $response->getBody();

                $crawler = new Crawler($html);

                // On cible le tableau principal (wikitable sortable)
                $rows = $crawler->filter('table.wikitable.sortable tbody tr');

                $languages = [];
                $count = 0;

                foreach ($rows as $rowNode) {
                    if ($count >= $limit) {
                        break;
                    }

                    $row = new Crawler($rowNode);
                    $cells = $row->filter('td');

                    // Le tableau a généralement 7+ colonnes, on vérifie qu'on a assez
                    if ($cells->count() < 7) {
                        continue;
                    }

                    // Index des colonnes (vérifiés sur la page actuelle - 2025)
                    $rank   = trim($cells->eq(0)->text(''));          // Rang (1, 2, 3...)
                    $name   = trim($cells->eq(1)->text(''));          // Nom de la langue
                    $native = trim($cells->eq(2)->text(''));          // Locuteurs natifs (L1)
                    $total  = trim($cells->eq(6)->text(''));          // Total L1 + L2

                    // Nettoyage et conversion en nombre
                    $totalNum  = $this->parseNumber($total);
                    $nativeNum = $this->parseNumber($native);

                    // On ignore les lignes invalides
                    if ($totalNum <= 0 || empty($name)) {
                        continue;
                    }

                    $languages[] = [
                        'rank'            => $rank,
                        'name'            => $name,
                        'total_speakers'  => $totalNum,
                        'native_speakers' => $nativeNum,
                    ];

                    $count++;
                }

                return $languages;

            } catch (RequestException $e) {
                // Log silencieux en production, ici on retourne vide
                return [];
            } catch (\Exception $e) {
                return [];
            }
        });
    }

    /**
     * Convertit les nombres écrits comme "1,452" ou "1.452 million" en entier
     *
     * @param string $str Chaîne à convertir
     * @return int Nombre en unités (ex: 1452000000)
     */
    private function parseNumber(string $str): int
    {
        // Supprime espaces, virgules, tirets
        $str = str_replace([' ', ',', '–', '−'], '', $str);

        // Remplace "million" → ×1 000 000, "billion" → ×1 000 000 000
        $str = str_ireplace(['million', 'billion'], ['000000', '000000000'], $str);

        // Si c'est juste un nombre décimal (ex: 1.452 → 1452000000)
        if (preg_match('/^[\d.]+$/', $str)) {
            return (int) ((float) $str * 1000000);
        }

        // Sinon on prend tel quel (cas où c'est déjà un grand nombre)
        return (int) $str;
    }
}