<?php
function checkEvenOdd($number) {
    if ($number % 2 == 0) {
        return "Число $number є парним.";
    } else {
        return "Число $number є непарним.";
    }
}

// Тестування функції
$testNumber = 4;
echo checkEvenOdd($testNumber);