<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimenumberController extends Controller
{
    //Simple controller to share the prime number calculation method *DRY*

    function checkPrime($number) {
        (bool) $prime = false;

        for ($i = 2; $i<=$number;$i++) { /* Smallest prime number is 2 */

            if ($number%$i==0) { /* Going in iterative order, last possible divider is the number itself */
                $prime = ($number == $i) ? true : false; 
                break;  
            }

        }

        return $prime;
    }
}
