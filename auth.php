<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация и Логин</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group input:focus {
            border-color: #007bff;
            outline: none;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .footer {
            text-align: center;
            margin-top: 15px;
        }

        .tab {
            display: inline-block;
            padding: 10px 20px;
            cursor: pointer;
            background-color: #e9ecef;
            border-radius: 4px 4px 0 0;
            margin-right: 5px;
        }

        .tab.active {
            background-color: white;
            border-bottom: none;
        }

        .form-section {
            display: none;
        }

        .form-section.active {
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
        <div>
            <div class="tab active" onclick="showTab('login')">Вход</div>
            <div class="tab" onclick="showTab('register')">Регистрация</div>
        </div>
        <form id="loginForm" class="form-section active" action="login.php" method="post">
            <h2>Вход</h2>
            <div class="form-group">
                <label for="loginEmail">Электронная почта:</label>
                <input type="email" id="loginEmail" name="email" required>
            </div>
            <div class="form-group">
                <label for="loginPassword">Пароль:</label>
                <input type="password" id="loginPassword" name="password" required>
            </div>
            <button type="submit" class="btn">Войти</button>
        </form>

        <form id="registerForm" class="form-section" action="register.php" method="post">
            <h2>Регистрация</h2>
            <div class="form-group">
                <label for="registerEmail">Электронная почта:</label>
                <input type="email" id="registerEmail" name="email" required>
            </div>
            <div class="form-group">
                <label for="registerPassword">Пароль:</label>
                <input type="password" id="registerPassword" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Подтверждение пароля:</label>
                <input type="password" id="confirmPassword" name="confirm_password" required>
            </div>
            <button type="submit" class="btn">Зарегистрироваться</button>
        </form>

        <div class="footer">
            <p>Уже есть аккаунт? <a href="#" onclick="showTab('login')">Войти</a></p>
        </div>
    </div>

    <script>
        function showTab(tab) {
            const loginForm = document.getElementById('loginForm');
            const registerForm = document.getElementById('registerForm');
            
            if (tab === 'login') {
                loginForm.classList.add('active');
                registerForm.classList.remove('active');
                document.querySelector('.tab.active').classList.remove('active');
                document.querySelector('.tab:nth-child(1)').classList.add('active');
            } else {
                registerForm.classList.add('active');
                loginForm.classList.remove('active');
                document.querySelector('.tab.active').classList.remove('active');
                document.querySelector('.tab:nth-child(2)').classList.add('active');
            }
        }
    </script>
</body>
</html>
