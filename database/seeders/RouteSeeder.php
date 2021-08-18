<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Route;
use App\Models\Transaction;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $routes = [
            [
                'route_name'=>'John',
                'route_no'=>456,
                'transactions'=>[
                    ['total_amount'=>4000, 'total_hour'=>30,]
                ]
            ],
            [
                'route_name'=>'Omda',
                'route_no'=>8877,
                'transactions'=>[
                    ['total_amount'=>1000, 'total_hour'=>5,]
                ]
            ],
        ];

        foreach($routes as $route){
           $newRoute =  Route::create([
               'route_name' =>$route['route_name'],
               'route_no' =>$route['route_no'],
           ]);

           foreach($route['transactions'] as $transaction){
                Transaction::create([
                    'route_id'=>$newRoute->id,
                    'route_no'=>$newRoute->route_no,
                    'total_amount'=>$transaction['total_amount'],
                    'total_hour'=>$transaction['total_hour'],
                ]);
           }
        }
    }
}
