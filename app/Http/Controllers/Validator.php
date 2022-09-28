<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;
use App\Models\Client;



class Validator
{
    static $ADMIN  = 3;
    static $WORKER = 2;
    static $CLIENT = 1;
    static $NOPE   = 0;

    static function routerValidator( $vistaOk , $vistaErr , $minRank  )
    {
       if( LoginController::getSession() >= $minRank )
           return $vistaOk; 

        return $vistaErr;
    }
}