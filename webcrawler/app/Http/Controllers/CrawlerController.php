<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;


class CrawlerController extends Controller
{

    public $results = array();

    public function crawler()
    {
        $client = new Client();
        $page = $client->request('GET', 'https://edition.cnn.com/europe');

        $title = $page->filter('.cd__wrapper')->text();
        echo $title;
    }
}