<?php

function numberRange($start, $end)
{
    $number_range = range($start, $end);

    return $number_range;
}

/**
 * Uncomment to test
 */
// $range = numberRange(5, 25);

// print_r($range);





function sum($arrayOfNumbers)
{
    $add = 0;
    foreach ($arrayOfNumbers as $number) {

        $add += $number;
    }
    return $add;
}

/**
 * Uncomment to test
 */
// $numberArray = array(10, 20, 35, 5, 30, 90);

// echo sum($numberArray);
