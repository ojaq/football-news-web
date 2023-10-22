<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    public function index()
    {
        $apiKey = '84649746aa164087aad15d95024ad2ad';
        $query = [
            'premier league',
            'laliga',
            'serie a',
            'bundesliga',
            'ligue 1',
        ];

        $response = Http::get('https://newsapi.org/v2/everything', [
            'apiKey' => $apiKey,
            'language' => 'en',
            'sortBy' => 'publishedAt',
            'q' => implode(' OR ', $query)
        ]);

        if ($response->successful()) {
            $newsData = $response->json();

            foreach ($newsData['articles'] as &$article){
                if (!empty($article['urlToImage'])){
                    $article['image'] = $article['urlToImage'];
                }
            }

            return view('welcome', compact('newsData'));
        } else {
            return response('An error occurred while fetching news data.', 500);
        }
    }

    public function premier()
    {
        $apiKey = '84649746aa164087aad15d95024ad2ad';
        $query = [
            'premier league',
        ];
    
        $response = Http::get('https://newsapi.org/v2/everything', [
            'apiKey' => $apiKey,
            'language' => 'en',
            'sortBy' => 'publishedAt',
            'q' => implode(' OR ', $query)
        ]);
    
        if ($response->successful()) {
            $newsData = $response->json();

            foreach ($newsData['articles'] as &$article){
                if (!empty($article['urlToImage'])){
                    $article['image'] = $article['urlToImage'];
                }
            }

            return view('premier', compact('newsData'));
        } else {
            return response('An error occurred while fetching news data.', 500);
        }
    }   

    public function laliga()
    {
        $apiKey = '84649746aa164087aad15d95024ad2ad';
        $query = [
            'laliga',
        ];
    
        $response = Http::get('https://newsapi.org/v2/everything', [
            'apiKey' => $apiKey,
            'language' => 'en',
            'sortBy' => 'publishedAt',
            'q' => implode(' OR ', $query)
        ]);
    
        if ($response->successful()) {
            $newsData = $response->json();

            foreach ($newsData['articles'] as &$article){
                if (!empty($article['urlToImage'])){
                    $article['image'] = $article['urlToImage'];
                }
            }

            return view('laliga', compact('newsData'));
        } else {
            return response('An error occurred while fetching news data.', 500);
        }
    }   
    
    public function seriea()
    {
        $apiKey = '84649746aa164087aad15d95024ad2ad';
        $query = [
            'serie a',
        ];
    
        $response = Http::get('https://newsapi.org/v2/everything', [
            'apiKey' => $apiKey,
            'language' => 'en',
            'sortBy' => 'publishedAt',
            'q' => implode(' OR ', $query)
        ]);
    
        if ($response->successful()) {
            $newsData = $response->json();

            foreach ($newsData['articles'] as &$article){
                if (!empty($article['urlToImage'])){
                    $article['image'] = $article['urlToImage'];
                }
            }

            return view('seriea', compact('newsData'));
        } else {
            return response('An error occurred while fetching news data.', 500);
        }
    }   

    public function bundesliga()
    {
        $apiKey = '84649746aa164087aad15d95024ad2ad';
        $query = [
            'bundesliga',
        ];
    
        $response = Http::get('https://newsapi.org/v2/everything', [
            'apiKey' => $apiKey,
            'language' => 'en',
            'sortBy' => 'publishedAt',
            'q' => implode(' OR ', $query)
        ]);
    
        if ($response->successful()) {
            $newsData = $response->json();

            foreach ($newsData['articles'] as &$article){
                if (!empty($article['urlToImage'])){
                    $article['image'] = $article['urlToImage'];
                }
            }

            return view('bundesliga', compact('newsData'));
        } else {
            return response('An error occurred while fetching news data.', 500);
        }
    }   

    public function ligue1()
    {
        $apiKey = '84649746aa164087aad15d95024ad2ad';
        $query = [
            'ligue 1',
        ];
    
        $response = Http::get('https://newsapi.org/v2/everything', [
            'apiKey' => $apiKey,
            'language' => 'en',
            'sortBy' => 'publishedAt',
            'q' => implode(' OR ', $query)
        ]);
    
        if ($response->successful()) {
            $newsData = $response->json();

            foreach ($newsData['articles'] as &$article){
                if (!empty($article['urlToImage'])){
                    $article['image'] = $article['urlToImage'];
                }
            }

            return view('ligue1', compact('newsData'));
        } else {
            return response('An error occurred while fetching news data.', 500);
        }
    }   
}
