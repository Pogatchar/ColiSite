<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;

class ScraperController extends Controller
{
    private  $results = array();
    public function scraper ()
    {
        $client = new Client();
        $url = 'https://www.tf1.fr/';
        $page = $client->request('GET', $url);

        /*echo "<pre>";
        print_r($page);*/


        $page->filter('.LiveShowCard_card__title_1ut-C')->text();


        //return view('scraper');

    }

}
