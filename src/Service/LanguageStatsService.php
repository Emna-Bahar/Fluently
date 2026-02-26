<?php

namespace App\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

/**
 * Service qui récupère les langues les plus parlées
 * Sources multiples + fallback pour éviter les pages vides
 */
class LanguageStatsService
{
    private Client $client;
    private CacheInterface $cache;

    public function __construct(CacheInterface $cache)
    {
        $this->client = new Client([
            'headers' => [
                'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36',
                'Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
                'Accept-Language' => 'en-US,en;q=0.5',
            ],
            'timeout' => 20,
            'connect_timeout' => 10,
        ]);

        $this->cache = $cache;
    }

    /**
     * Récupère le top 20 des langues les plus parlées
     * Utilise plusieurs sources + cache long
     */
    public function getTopLanguages(int $limit = 20): array
    {
        return $this->cache->get('global_languages_top_20', function (ItemInterface $item) use ($limit) {
            // Cache 15 jours (les données changent très lentement)
            $item->expiresAfter(1296000);

            // Source principale : Wikipédia (version anglaise, très stable)
            $url = 'https://en.wikipedia.org/wiki/List_of_languages_by_total_number_of_speakers';

            try {
                $response = $this->client->get($url);
                $html = (string) $response->getBody();

                $languages = $this->parseWikipediaTable($html, $limit);

                // Si on a assez de données, on retourne
                if (count($languages) >= $limit) {
                    return $languages;
                }

            } catch (RequestException $e) {
                // On passe au fallback si Wikipédia bloque ou échoue
            }

            // Fallback : source alternative (Ethnologue résumé ou autre)
            return $this->getFallbackData($limit);
        });
    }

    private function parseWikipediaTable(string $html, int $limit): array
    {
        $crawler = new \Symfony\Component\DomCrawler\Crawler($html);

        $rows = $crawler->filter('table.wikitable.sortable tbody tr');

        $languages = [];
        $count = 0;

        foreach ($rows as $rowNode) {
            if ($count >= $limit) {
                break;
            }

            $row = new \Symfony\Component\DomCrawler\Crawler($rowNode);
            $cells = $row->filter('td');

            if ($cells->count() < 5) {
                continue;
            }

            $rank = trim($cells->eq(0)->text(''));
            $name = trim($cells->eq(1)->text(''));
            $total = trim($cells->eq(2)->text(''));

            // Nettoyage du nombre (ex: 1,452 million → 1452000000)
            $totalNum = $this->parseNumber($total);

            if ($totalNum <= 0 || empty($name)) {
                continue;
            }

            $languages[] = [
                'rank' => $rank ?: ($count + 1),
                'name' => $name,
                'total_speakers' => $totalNum,
            ];

            $count++;
        }

        return $languages;
    }

    private function parseNumber(string $str): int
    {
        $str = str_replace([' ', ',', '–', '−', '(', ')'], '', $str);
        $str = str_ireplace(['million', 'billion'], ['000000', '000000000'], $str);

        if (preg_match('/^[\d.]+$/', $str)) {
            return (int) ((float) $str * 1000000);
        }

        return (int) $str;
    }

    /**
     * Données de secours si scraping échoue (à mettre à jour manuellement tous les 6-12 mois)
     */
    private function getFallbackData(int $limit): array
    {
        // Données approximatives 2024-2025 (source Ethnologue/Wikipedia)
        $fallback = [
            ['rank' => 1, 'name' => 'English', 'total_speakers' => 1500000000],
            ['rank' => 2, 'name' => 'Mandarin Chinese', 'total_speakers' => 1120000000],
            ['rank' => 3, 'name' => 'Hindi', 'total_speakers' => 615000000],
            ['rank' => 4, 'name' => 'Spanish', 'total_speakers' => 560000000],
            ['rank' => 5, 'name' => 'French', 'total_speakers' => 310000000],
            ['rank' => 6, 'name' => 'Arabic', 'total_speakers' => 274000000],
            ['rank' => 7, 'name' => 'Bengali', 'total_speakers' => 272000000],
            ['rank' => 8, 'name' => 'Portuguese', 'total_speakers' => 264000000],
            ['rank' => 9, 'name' => 'Russian', 'total_speakers' => 255000000],
            ['rank' => 10, 'name' => 'Urdu', 'total_speakers' => 232000000],
            // ... tu peux compléter jusqu'à 20 si besoin
        ];

        return array_slice($fallback, 0, $limit);
    }
}