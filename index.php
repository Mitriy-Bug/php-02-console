<?php
do {
    echo "Введите делимое: ";
    echo $enteredNumbers1 = fgets(STDIN);
    $divisible = trim($enteredNumbers1); //Делимое
} while (is_numeric($divisible)!==true);

do {
    echo "Введите делитель: ";
    $enteredNumbers2 = fgets(STDIN);
    $divider = trim($enteredNumbers2); //Делитель
} while (is_numeric($divider)!==true);

if ($divider === "0") {//проверяем, что делитель не равен "0"
    echo "Делить на ноль нельзя" . PHP_EOL;
} else {
        echo "Результат: " .  $divisible / $divider . PHP_EOL;
}