<!DOCTYPE html>
<meta charset="utf-8">
<title>Processing GET parameters</title>

<?php 

// var_dump($var) simply outputs the contents of $var, its type and size


/*
 * The script should output the following string:
 *  - check if parameters are provided -- if not the script should display an error;
 *      - you can check if a value exists with http://php.net/manual/en/function.isset.php
 *      - you can test if a value is empty with http://php.net/manual/en/function.empty.php
 *  - and output a nicely formatted string using the send variables, for instance:
 *        "Hello $first_name $last_name, the time is <current_time_in_H:i_format>."
*/
output_name();

function output_name(){
    $name = $_GET["first_name"];
    $lastname = $_GET["last_name"];
    if (!empty($name) && !empty($lastname)) {
        echo "Hello " . $name . " " . $lastname .", the time is " . date("h:i", time());
    }else{
        echo "Required parameters are missing";
    }
}