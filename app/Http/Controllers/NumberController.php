<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberController extends Controller
{
    public function one(int $number)
    {
        return $number % 2 == 0;
    }

    public function two(int $number)
    {
        if ($number == 0) {
            return false;
        }
        return ($number & ($number - 1)) == 0;
    }

    public function three(int $number)
    {
        if ($number == 0) {
            return false;
        }
        if (ceil(log($number, 3)) != floor(log($number, 3))) {
            return false;
        }
        return true;
    }

    public function four(int $number)
    {
        if ($number == 0) {
            return false;
        }
        if (ceil(log($number, 4)) != floor(log($number, 4))) {
            return false;
        }
        return true;
    }

    public function five(int $number)
    {
        return 1 / sqrt($number);
    }

    public function fizzbuzz(int $number)
    {
//        if (is_float($number)) {
//            return false;
//        }
        $response = '';
        if ($number % 3 == 0) {
            $response .= 'fizz';
        }
        if ($number % 5 == 0) {
            $response .= 'buzz';
        }
        if (empty($response) || $number == 0) {
            $response = $number;
        }
        return $response;

//        for ($start = 1; $start <= $number; $start++) {
//            $response = '';
//            if ($start % 3 == 0) {
//                $response .= 'fizz';
//            }
//            if ($start % 5 == 0) {
//                $response .= 'buzz';
//            }
//            if (empty($response)) {
//                $response = $start;
//            }
//            echo $response."<br>";
//        }
    }

    public function numberReverse(int $number)
    {
        return strrev($number);
    }

    public function numberSum(int $number)
    {
        return (1 + $number) * $number / 2;
    }

    public function numberSquare(int $number)
    {
        $total = 0;
        for ($i = 1; $i <= $number; $i++) {
            $total += $i * $i;
        }
        return $total;
    }

    public function factorial(int $number)
    {
        if ($number == 0) {
            return 0;
        }
        $total = 1;
        for ($i = 1; $i <= $number; $i++) {
            $total *= $i;
        }
        return $total;
    }
}
