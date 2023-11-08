<?php
/**
 * generate fibonnaci function
 *
 * @param Int $n
 * @return array
 */
function generateFibonacci($n) {
    $fib = array(0, 1);

    for ($i = 2; $i < $n; $i++) { // start from 2 and run it 15 times
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2]; //Fibonacci standard formula Fn = Fn-2 + Fn-1
    }
    
    return $fib;
}

$numberOfLoops = 15;
$generateSeries = generateFibonacci($numberOfLoops);

foreach ($generateSeries as $number) {
    echo $number . " "; // Print fibonacci series
}

echo "\n";
