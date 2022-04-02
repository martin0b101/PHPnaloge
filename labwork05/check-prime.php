<!DOCTYPE html>

<meta charset="UTF-8" />
<title>Answering the prime question</title>

<?php

// Complete function isPrime($number) by implementing a simple algorithm



function isPrime($number) {
    $numOfDividers = 0;
    if ($number == 1) {
        return FALSE;
    }if ($number == 2) {
        return TRUE;
    }
    for ($i=1; $i <= $number; $i++) { 
        if($number % $i == 0){
            $numOfDividers++;
        }
    }
    if ($numOfDividers > 2) {
        return FALSE;
    }
    return TRUE;
}




$number = $_GET["number"];
?>

<h1>Checking if <?=$number?> is prime</h1>

<p><?php

if (isPrime($number)) {
    echo "Yes, $number is a prime number.";
} else {
    echo "No, $number is not prime.";
}

?></p>
