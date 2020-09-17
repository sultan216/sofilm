<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
class ScrapperController extends Controller
{
    public function index(){
        return view('admin.page.scrapper');
    }
    public function anjgggg(Request $request){
        // $data = file_get_contents("https://api.themoviedb.org/3/search/movie?api_key=b97618b9d94f7f1090189b207f83ce52&language=en-US&query=".$request."&page=1&include_adult=false");
        // $hmm = json_decode($data, TRUE);
        // $hmm->title = $request->title;
        // $hmm->poster_path = $request->poster_path;
        // return view('admin.page.scrapper', ['hmm'=>$hmm]);
       
       //Guzzle
        $anjg = new Client();
        $apikey = 'b97618b9d94f7f1090189b207f83ce52';
        $url = 'https://api.themoviedb.org/3/search/movie?api_key='.$apikey.'&language=en-US&query=".$request."&page=1&include_adult=false';
        $minta = $anjg->get($url);
        $hasil = $minta->getBody()->getContents();
        $punten = json_decode($hasil, true);
        return view('admin.page.scrapper', compact('punten'));
        }
}
