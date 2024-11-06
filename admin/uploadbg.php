<?php
$uploadDir = '../assets/img/'; // Папка для завантаження зображень

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $originalFilename = isset($_POST['originalFilename']) ? $_POST['originalFilename'] : 'default.jpg';

    // Перевіряємо наявність помилок при завантаженні
    if ($file['error'] !== UPLOAD_ERR_OK) {
        echo json_encode(['success' => false, 'message' => 'Помилка завантаження файлу'], JSON_UNESCAPED_UNICODE);
        exit;
    }

    // Перевіряємо, чи є файл зображенням
    $fileType = mime_content_type($file['tmp_name']);
    if (strpos($fileType, 'image') === false) {
        echo json_encode(['success' => false, 'message' => 'Файл має бути зображенням'], JSON_UNESCAPED_UNICODE);
        exit;
    }

    // Отримуємо вміст файлу
    $data = file_get_contents($file['tmp_name']);

    // Створюємо унікальне ім'я файлу
    $fileName = basename($originalFilename);
    $filePath = $uploadDir . $fileName;

    // Зберігаємо файл на сервері
    if (file_put_contents($filePath, $data) !== false) {
        echo json_encode(['success' => true, 'url' => $fileName], JSON_UNESCAPED_UNICODE);
    } else {
        echo json_encode(['success' => false, 'message' => 'Не вдалося зберегти файл: ' . error_get_last()['message']], JSON_UNESCAPED_UNICODE);
    }
}
