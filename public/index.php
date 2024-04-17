<?php
function fizzBuzz(int $number): string
{
    return match(true) {
        $number % 15 === 0 => 'FizzBuzz',
        $number % 3 === 0 => 'Fizz',
        $number % 5 === 0 => 'Buzz',
        default => (string)$number,
    };
}

// Example usage
echo fizzBuzz(15). '<br>';
echo fizzBuzz(23). '<br>';
echo fizzBuzz(6). '<br>';
echo fizzBuzz(12). '<br>';
echo fizzBuzz(10). '<br>';
echo fizzBuzz(7);