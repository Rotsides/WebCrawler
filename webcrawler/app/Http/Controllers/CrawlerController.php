<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;



class CrawlerController extends Controller
{

    private $results = array();

    public function crawler()
    {
        $client = new Client();
        $page = $client->request('GET', 'https://edition.cnn.com/europe');




        $page->filter('.cd__headline ')->each(function ($item) {
            $object = json_encode($item->children()->each(function ($title) {
                return $title->text();
            }));
            dump(json_decode($object));
        });



        $page->filter('.media')->each(function ($item) {
            $image = "<p>" . $item->filter('img')->attr("src") . "</p>";
            echo $image;
        });

        $data = $this->results;
        return view('crawler', compact('data'));
    }
}