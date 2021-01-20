<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\city;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function weather(Request $request){   

        $ciudad= $request->input('q');
        $appid = $request->input('appid');
        $units = $request->input('units');

        if($appid != '86723fd6d8b585f6ec7ab1a329dc6622' || $units != 'metric'){

            return response()->json([
               "mensaje" => "Error"          
    
            ],400);

        }

        $idcity = City::where('cities.name', $ciudad)
            ->select('cities.id')
            ->get();

        for($i = 0; $i < count($idcity ); $i++){
            $id = $idcity[$i]->id;       

            $city = City::where('cities.id', $id)
                    ->select('cities.base',
                    'cities.visibility',
                    'cities.dt',
                    'cities.id',
                    'cities.name',
                    'cities.cod')
                    ->get();
                

            $coord = City::where('cities.id', $id)
                ->Join('coord', 'cities.id', '=', 'coord.idcities')
                ->select('coord.lon','coord.lat')
                ->get();

            $weather = City::where('cities.id', $id)
                ->Join('weather', 'cities.id', '=', 'weather.idcities')
                ->select('weather.id','weather.main','weather.description','weather.icon')
                ->get();

            $main = City::where('cities.id', $id)
                ->Join('main', 'cities.id', '=', 'main.idcities')
                ->select('main.temp',
                        'main.feels_like',
                        'main.temp_min',
                        'main.temp_max',
                        'main.pressure',
                        'main.humidity'
                        )
                ->get();

            $wind = City::where('cities.id', $id)
                ->Join('wind', 'cities.id', '=', 'wind.idcities')
                ->select('wind.speed',
                        'wind.deg'
                        )
                ->get();

            $clouds = City::where('cities.id', $id)
                ->Join('clouds', 'cities.id', '=', 'clouds.idcities')
                ->select('clouds.dt')
                ->get();

            $sys = City::where('cities.id', $id)
                ->Join('sys', 'cities.id', '=', 'sys.idcities')
                ->select('sys.type',
                        'sys.id',
                        'sys.country',
                        'sys.sunrise',
                        'sys.sunset'                         
                        )
                ->get();            
        }

        return response()->json([
            $city,
            "coord" => $coord,  
            "weather" => $weather,  
            "main" => $main,              
            "wind" => $wind,              
            "clouds" => $clouds,  
            "sys" => $sys,              

        ],200);
    }

}
