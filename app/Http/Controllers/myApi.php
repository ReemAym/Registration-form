<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class myApi extends Controller
{
    function getActorsData($m,$q)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://online-movie-database.p.rapidapi.com/actors/list-born-today?month=$m&day=$q",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: online-movie-database.p.rapidapi.com",
                "X-RapidAPI-Key: ba400eda93msh8d76dc07667888cp1beed7jsne6c04bf6b863"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $actors=explode(",", $response);
        curl_close($curl);
        $curl1 = curl_init();
        $ActorNames = [];
        foreach ($actors as $act) {
            $id = substr($act, 7, -2);

            curl_setopt_array($curl1, [
                CURLOPT_URL => "https://online-movie-database.p.rapidapi.com/actors/get-bio?nconst=$id",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => [
                    "X-RapidAPI-Host: online-movie-database.p.rapidapi.com",
                    "X-RapidAPI-Key: ba400eda93msh8d76dc07667888cp1beed7jsne6c04bf6b863"
                ],
            ]);
            $response1 = curl_exec($curl1);
            $start = '"name":';
            $end = ',"birthDate"';
            $start_pos = strpos($response1, $start);
            $end_pos = strpos($response1, $end);
            $substring = substr($response1, $start_pos + 8, $end_pos - $start_pos - 9);
            if ($substring != "") {
                array_push($ActorNames, $substring);
            }
        }
        curl_close($curl1);
        $result=implode(",", $ActorNames);
        $result="[".$result."]";
        return $result;
    }
}