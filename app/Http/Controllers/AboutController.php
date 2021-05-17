<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $array = [
           'foo' => 1,
            'moo' => 2,
            'so' => 3
        ];
        return($array);
    }
}
