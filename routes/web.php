<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/inicio','home');

Route::get('/fecha',function(){
    $fecha =[
        'dia' => date('d'),
        'mes' => date('m'),
        'ano' => date('Y')
    ];
    return view('fecha',$fecha);
});

Route::get('/fecha2',function(){
        $dia = date('d');
        $mes = date('m');
        $ano = date('Y');
    $resultado = compact('dia','mes','ano');
    return view('fecha2',$resultado);
});

Route::get('/fecha3',function(){
    $dia = date('d');
    $mes = date('m');
    $ano = date('Y');
    return view('fecha3')
    ->with('dia',$dia)
    ->with('mes',$mes)
    ->with('ano',$ano);
});

Route::get('{any}',function(){
    return view('errors/404');
})->where('any','.*');