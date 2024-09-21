<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));

    // Подключение к базе данных
    $servername = "f1.aurorix.net"; // ваш сервер
    $username = "u60558_4lq4mC8rmS";
    $passwordDB = "89C4i60x2h^Jkxgnn.GUwYsO";
    $dbname = "s60558_glebikobase"; // замените на имя вашей базы данных

    // Создание соединения
    $conn = new mysqli($servername, $username, $passwordDB, $dbname);

    // Проверка соединения
    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    // Проверка пользователя
    $stmt = $conn->prepare("SELECT hashed_password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            echo "Успешный вход!";
            // Здесь можно добавить редирект или другие действия
        } else {
            echo "Неверный пароль.";
        }
    } else {
        echo "Пользователь не найден.";
    }

    // Закрытие соединения
    $stmt->close();
    $conn->close();
}
?>
