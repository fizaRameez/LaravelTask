<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Route;
use App\Models\Transaction;

class UserController extends Controller
{
    public function users(){
        $users = User::latest()->get(); //get lastest users
        return  \Response::json(
            $users[0]
        , 200, [],JSON_PRETTY_PRINT);
        //return JSON result

       
    }

    public function salesmans(){

        $routes = Route::select('id as route_id','routes.*')->get();//selecting all routes
        return \Response::json([ 
            'salesmans'=>$routes
        ], 200, [],JSON_PRETTY_PRINT);
        //return JSON result

    }

}
