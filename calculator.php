<?php
$randomNumber = rand(1, 100); // Генерируем случайное число
$userNumber = 42; // Пусть это будет число, введенное пользователем
$operation = '*'; // Задаем операцию: + (сложение), - (вычитание), * (умножение), / (деление)

// Выполняем выбранную операцию
switch ($operation) {
    case '+':
        $result = $randomNumber + $userNumber;
        break;
    case '-':
        $result = $randomNumber - $userNumber;
        break;
    case '*':
        $result = $randomNumber * $userNumber;
        break;
    case '/':
        $result = $randomNumber / $userNumber;
        break;
    default:
        echo "Неверная операция!";
        break;
}

// Проверяем результат на положительность, отрицательность или ноль
if ($result > 0) {
    echo "Результат {$result} - положительное число.";
} elseif ($result < 0) {
    echo "Результат {$result} - отрицательное число.";
} else {
    echo "Результат равен нулю.";
}
?>