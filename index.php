<?php
echo "Введите делимое: ";
echo $enteredNumbers1 = fgets(STDIN);
$divisible = trim($enteredNumbers1); //Делимое

if (is_int($divisible)!==true){
    echo "Введите целое число". PHP_EOL;
    echo "Введите делимое: ";
    $enteredNumbers1 = fgets(STDIN);
    $divisible = trim($enteredNumbers1); //Делимое
}

echo "Введите делитель: ";
$enteredNumbers2 = fgets(STDIN);
$divider = trim($enteredNumbers2); //Делитель

if (is_int($divider)!==true){
    echo "Введите целое число". PHP_EOL;
    echo "Введите делитель: ";
    $enteredNumbers2 = fgets(STDIN);
    $divider = trim($enteredNumbers2); //Делитель
}

if ($divider === "0") {//проверяем, что делитель не равен "0"
    echo "Делить на ноль нельзя" . PHP_EOL;
} else {
        echo "Результат: " .  $divisible / $divider . PHP_EOL;
}