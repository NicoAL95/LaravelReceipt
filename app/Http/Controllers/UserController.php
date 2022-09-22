<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request;

class UserController extends Controller
{
    function getData(Request $req){
        return $req;
    }
}