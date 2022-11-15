<?php

namespace Classes;

class BaseConverter
{
    public static function convert($number, $convertType)
    {
        switch ($convertType) {
            case "fahrenheit":
                $conversion = ($number * (9 / 5)) + (32);
                break;
            case "celsius":
                $conversion = ($number - 32) * (5 / 9);
                break;
            case "kelvin":
                $conversion = ($number + 273.15);
                break;
            case "rankine":
                $conversion = ($number + 273.15) * (5 / 9);
                break;
            case "newton":
                $conversion = ($number * 33 / 100);
                break;
            case "rømer":
                $conversion = ($number * 21 / 40 + 7.5);
                break;
            case "réaumu":
                $conversion = ($number  * 4 / 5);
                break;
            case "delisle":
                $conversion = (100 - $number) * 3 / 2;
                break;
        }
        return $conversion;
    }


}