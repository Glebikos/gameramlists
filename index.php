<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Форма регистрации и логина</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        input {
            display: block;
            margin: 10px 0;
            padding: 10px;
            width: 300px;
        }
        button {
            padding: 10px 15px;
        }
    </style>
</head>
<body>

    <h2>Регистрация</h2>
    <form action="register.php" method="post">
        <input type="text" placeholder="Логин" name="login" required>
        <input type="password" placeholder="Пароль" name="pass" required>
        <input type="password" placeholder="Повторите пароль" name="repeatpass" required>
        <input type="email" placeholder="Email" name="email" required>
        <button type="submit">Зарегистрироваться</button>
    </form>

    <h2>Вход</h2>
    <form action="login.php" method="post">
        <input type="text" placeholder="Логин" name="login" required>
        <input type="password" placeholder="Пароль" name="pass" required>
        <button type="submit">Войти</button>
    </form>

</body>
</html>