<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

    function checkPrime($number) {
        (bool) $prime = false;

        for ($i = 2; $i<=$number;$i++) { /* Smallest prime number is 2 */

            if ($number%$i==0) { /* Going in iterative order, last possible divider is the number itself */
                $prime = ($number == $i) ? true : false; 
                break;  
            }

        }

        return $prime;
    };

    $isPrime = checkPrime($res);
    return Response::json(array('result' => $res, 'isPrime' => $isPrime ));
});

Route::get('/checkPrime', function (Request $request) {
    $x = $request->number;
    function checkPrime($number) {
        (bool) $prime = false;

        for ($i = 2; $i<=$number;$i++) { /* Smallest prime number is 2 */

            if ($number%$i==0) { /* Going in iterative order, last possible divider is the number itself */
                $prime = ($number == $i) ? true : false; 
                break;  
            }

        }

        return $prime;
    };

    $isPrime = checkPrime($x);
    return Response::json(array('number' => $x, 'isPrime' => $isPrime ));
});
