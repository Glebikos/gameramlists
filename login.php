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
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $login = $_POST['login'];
    $pass = $_POST['pass'];

    // Валидация данных
    if (empty($login) || empty($pass)) {
        echo "Пожалуйста, заполните все поля.";
        exit;
    }

    // Проверка логина и пароля
    $stmt = $conn->prepare("SELECT password FROM user WHERE login = ?");
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashedPassword);
        $stmt->fetch();

        // Проверка пароля
        if (password_verify($pass, $hashedPassword)) {
            echo "Вы успешно вошли!";
        } else {
            echo "Неверный пароль.";
        }
    } else {
        echo "Пользователь не найден.";
    }

    // Закрытие соединения
    $stmt->close();
}
$conn->close();
?>
```

### Обновленный код для формы в `index.php`:

Теперь вам нужно будет обновить формы в `index.php`, чтобы они отправляли данные на соответствующие файлы:

```html
<form action="register.php" method="post">
    <!-- поля для регистрации -->
</form>

<form action="login.php" method="post">
    <!-- поля для входа -->
</form>
