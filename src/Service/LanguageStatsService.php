<?php

namespace App\Service;

use GuzzleHttp\Client;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class LanguageStatsService
{
    private Client $client;
    private CacheInterface $cache;

    public function __construct(CacheInterface $cache)
    {
        $this->client = new Client(['timeout' => 20]);
        $this->cache = $cache;
    }

    /**
     * 
     * @param int $limit Nombre maximum de langues à retourner
     * @return array<array{rank: int, name: string, total_speakers: int}>
     */
    public function getTopLanguages(int $limit = 20): array
    {
        return $this->cache->get('global_languages_top', function (ItemInterface $item) use ($limit) {
            $item->expiresAfter(1296000); 
            
            try {
                $response = $this->client->get('https://en.wikipedia.org/wiki/List_of_languages_by_total_number_of_speakers');
                $html = (string) $response->getBody();
                $result = $this->parseWikipediaTable($html, $limit);
                if (!empty($result)) {
                    return $result;
                }
                return $this->getFallbackData($limit);
            } catch (\Exception $e) {
                return $this->getFallbackData($limit);
            }
        });
    }

    /**
     * 
     * @param string $html Contenu HTML de la page
     * @param int $limit Nombre maximum de langues à retourner
     * @return array<array{rank: int, name: string, total_speakers: int}>
     */
    private function parseWikipediaTable(string $html, int $limit): array
    {
        $crawler = new \Symfony\Component\DomCrawler\Crawler($html);
        $languages = [];
        
        foreach ($crawler->filter('table.wikitable.sortable tbody tr')->slice(0, $limit) as $row) {
            $cells = (new \Symfony\Component\DomCrawler\Crawler($row))->filter('td');
            if ($cells->count() < 5) {
                continue;
            }
            
            $name = trim($cells->eq(1)->text(''));
            $total = $this->parseNumber(trim($cells->eq(2)->text('')));
            
            if ($total > 0 && $name !== '') {
                $languages[] = [
                    'rank' => count($languages) + 1,
                    'name' => $name,
                    'total_speakers' => $total,
                ];
            }
        }
        
        return $languages;
    }

    /**
     * 
     * @param string $str Chaîne à parser
     * @return int Nombre de locuteurs
     */
    private function parseNumber(string $str): int
    {
        $str = preg_replace('/[^\d.]/', '', str_replace(['million', 'billion'], ['', ''], $str));
        $float = (float) $str;
        return (int) ($float * 1000000);
    }

    /**
     * 
     * @param int $limit Nombre maximum de langues à retourner
     * @return array<array{rank: int, name: string, total_speakers: int}>
     */
    private function getFallbackData(int $limit): array
    {
        $data = [
            ['rank' => 1, 'name' => 'English', 'total_speakers' => 1500000000],
            ['rank' => 2, 'name' => 'Mandarin Chinese', 'total_speakers' => 1120000000],
            ['rank' => 3, 'name' => 'Hindi', 'total_speakers' => 615000000],
            ['rank' => 4, 'name' => 'Spanish', 'total_speakers' => 560000000],
            ['rank' => 5, 'name' => 'French', 'total_speakers' => 310000000],
        ];
        
        return array_slice($data, 0, $limit);
    }
}