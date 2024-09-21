<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
    $confirm_password = htmlspecialchars(trim($_POST['confirm_password']));

    if ($password !== $confirm_password) {
        die("Пароли не совпадают.");
    }

    // Хеширование пароля
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Подключение к базе данных
    $servername = "localhost"; // или ваш сервер
    $username = "u60558_4lq4mC8rmS";
    $passwordDB = "89C4i60x2h^Jkxgnn.GUwYsO";
    $dbname = "s60558_glebikobase"; // замените на имя вашей базы данных

    // Создание соединения
    $conn = new mysqli($servername, $username, $passwordDB, $dbname);

    // Проверка соединения
    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    // Вставка нового пользователя в базу данных
    $stmt = $conn->prepare("INSERT INTO users (email, hashed_password) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $hashed_password);

    if ($stmt->execute()) {
        echo "Регистрация успешна!";
        // Здесь можно добавить редирект или другие действия
    } else {
        echo "Ошибка регистрации: " . $stmt->error;
    }

    // Закрытие соединения
    $stmt->close();
    $conn->close();
}
?>
