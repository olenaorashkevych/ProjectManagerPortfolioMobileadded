<?php

// Тести сайту
include 'text.php';

// Реагуємо на адміністратора
$admin = ($_GET['admin'] == 'admin') ? true : false;


// Перевіряємо, чи запит прийшов методом POST, щоб обробити дані з JavaScript
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Зчитуємо JSON дані, надіслані через fetch в contentEditable.js
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    if ($data) {
        // Створюємо контент для запису в text.php
        $fileContent = "<?php\n\n";
        foreach ($data as $key => $value) {
            // Безпека: екрануємо значення для PHP
            $safeValue = addslashes($value);
            $fileContent .= "\$text['$key'] = '$safeValue';\n";
        }

        // Записуємо нові дані у файл text.php
        file_put_contents('text.php', $fileContent);

        // Відповідь на успішне збереження
        echo json_encode(["status" => "success"]);
    } else {
        // Помилка у форматі даних
        echo json_encode(["status" => "error", "message" => "Invalid data format"]);
    }
}
