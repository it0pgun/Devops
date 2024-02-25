<?php
function factorial($number) {
    if ($number < 0) {
        return "Факторіал від'ємного числа не визначений.";
    }
    if ($number == 0) {
        return 1;
    }
    $result = 1;
    for ($i = 1; $i <= $number; $i++) {
        $result *= $i;
    }
    return $result;
}

// Тестування функції
$testNumber = 5;
echo "Факторіал числа $testNumber дорівнює: " . factorial($testNumber);
?>
