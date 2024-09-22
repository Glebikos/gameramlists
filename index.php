<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Форма регистрации и логина</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            margin-bottom: 20px;
        }
        input {
            display: block;
            margin: 10px 0;
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s;
        }
        input:focus {
            border-color: #007bff;
            outline: none;
        }
        button {
            padding: 10px 15px;
            width: 100%;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
        .footer {
            text-align: center;
            margin-top: 10px;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>

    <div class="container">
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

        <div class="footer">
            <p>© 2023 Ваша компания</p>
        </div>
    </div>

</body>
</html>
