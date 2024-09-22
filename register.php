<?php
// Подключение к базе данных
$servername = "f1.aurorix.net"; 
$username = "u60558_4lq4mC8rmS"; 
$password = "89C4i60x2h^Jkxgnn.GUwYsO"; 
$dbname = "s60558_glebikobase"; 

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Проверка была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $repeatpass = $_POST['repeatpass'];
    $email = $_POST['email'];

    // Валидация данных
    if (empty($login) || empty($pass) || empty($repeatpass) || empty($email)) {
        echo "Пожалуйста, заполните все поля.";
        exit;
    }

    if ($pass !== $repeatpass) {
        echo "Пароли не совпадают.";
        exit;
    }

    // Хеширование пароля
    $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

    // Вставка данных в базу
    $stmt = $conn->prepare("INSERT INTO user (login, password, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $login, $hashedPassword, $email);

    if ($stmt->execute()) {
        echo "Регистрация прошла успешно!";
    } else {
        echo "Ошибка: " . $stmt->error;
    }

    // Закрытие соединения
    $stmt->close();
}
$conn->close();
?>
