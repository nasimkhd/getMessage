<?php


function getMessage($timeOfDay){

    if ($timeOfDay == 0) { // 0 = Morning
        $message = 'Good Morning';
    }else if($timeOfDay == 1){
        $message = 'Good Afternoon';
    } else {
        $message = 'Good Evening';
    }
    //$message = 'Hello, this is server..';
    return $message;
}