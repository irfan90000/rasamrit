<?php

use App\Models\WebsiteSetup;


if(!function_exists('dateTimeFormat')){
    function dateTimeFormat($datesTime){
        return date('M, d Y h:i A', strtotime($datesTime));
    }
}

if(!function_exists('dateFormat')){
    function dateFormat($dates){
        return date('M, d Y', strtotime($dates));
    }
}

if(!function_exists('timeFormat')){
    function timeFormat($time){
        return date('h:i A', strtotime($time));
    }
}

if (!function_exists('websiteSetupValue')) {
    function websiteSetupValue($name) {
        return WebsiteSetup::where('name', $name)->first() ? WebsiteSetup::where('name', $name)->first()->value : "";
    }
}

if (!function_exists('getDay')) {
    function getDay($key) {
       switch ($key) {
        case '1':
            return 'Monday';
            break;

        case '2':
            return 'Tuesday';
            break;

        case '3':
            return 'Wednesday';
            break;

        case '4':
            return 'Thursday';
            break;

        case '5':
            return 'Friday';
            break;

        case '6':
            return 'Saturday';
            break;

        case '7':
            return 'Sunday';
            break;

        default:
            break;
       }
    }
}

?>
