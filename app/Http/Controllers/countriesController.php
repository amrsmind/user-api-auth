<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Unirest\Request;


class countriesController extends Controller
{
    //
    public function index(){
        $response = Request::get("https://restcountries-v1.p.rapidapi.com/all",
        array(
          "X-RapidAPI-Host" => "restcountries-v1.p.rapidapi.com",
          "X-RapidAPI-Key" => "19cddc8d82msh110e6c56625d8fap1bfcb5jsn538e238f8896"
        )
      );
      return response()->json($response);
    }
}
