<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimenumberController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/equals', function (Request $request) {

    $x = $request->x;
    $y = $request->y;
    
    $res = $x + $y;

    $isPrime = PrimenumberController::checkPrime($res);
    return Response::json(array('result' => $res, 'isPrime' => $isPrime ));
});

Route::get('/checkPrime', function (Request $request) {
    $x = $request->number;

    $isPrime = PrimenumberController::checkPrime($x);
    return Response::json(array('number' => $x, 'isPrime' => $isPrime ));
});
