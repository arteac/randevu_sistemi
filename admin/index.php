<?php
session_start();
include 'db.php';
$registerError = '';
$loginError = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (registerAdmin($username, $password)) {
            echo "Kayıt başarılı. Giriş yapabilirsiniz.";
        } else {
            $registerError = "Kayıt başarısız. Kullanıcı adı zaten alınmış olabilir.";
        }
    } elseif (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (loginAdmin($username, $password)) {
            // Kullanıcı giriş yaptığında session'ı güncelle
            $_SESSION['username'] = $username;
            echo "Giriş başarılı. Admin paneline yönlendiriliyorsunuz.";
            header("Location: admin.php");
            exit();
        } else {
            $loginError = "Giriş başarısız. Kullanıcı adı veya şifre yanlış.";
        }
    } elseif (isset($_POST['logout'])) {
        // Çıkış işlemi: Oturumu sonlandır ve çerezleri sil
        session_unset();
        session_destroy();
        setcookie(session_name(), '', time() - 3600);
        header("Location: login.php"); // Giriş sayfasına yönlendir
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Kayıt ve Giriş Sistemi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            box-sizing: border-box;
            text-align: center;
            margin-bottom: 20px;
        }
        .container:last-child {
            margin-bottom: 0;
        }
        h2 {
            color: #333;
            margin-top: 0;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group h3 {
            margin-bottom: 10px;
            color: #555;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
            width: 20%;
            margin: 0 auto;
        }
        input[type="text"],
        input[type="password"] {
            width: 80%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            margin: 0 auto;
        }
        button {
            width: 80%;
            padding: 10px;
            background-color: #5cb85c;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin: 0 auto;
        }
        button:hover {
            background-color: #4cae4c;
        }
        p.error {
            color: red;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Admin Kayıt ve Giriş Sistemi</h2>

        <div class="form-group">
            <form method="post">
                <h3>Giriş Yap</h3>
                <label for="username">Kullanıcı Adı:</label>
                <input type="text" name="username" required>
                <label for="password">Şifre:</label>
                <input type="password" name="password" required>
                <button type="submit" name="login">Giriş Yap</button>
                <p class="error"><?php echo $loginError; ?></p>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="form-group">
            <form method="post">
                <h3>Kayıt Ol</h3>
                <label for="username">Kullanıcı Adı:</label>
                <input type="text" name="username" required>
                <label for="password">Şifre:</label>
                <input type="password" name="password" required>
                <button type="submit" name="register">Kayıt Ol</button>
                <p class="error"><?php echo $registerError; ?></p>
            </form>
        </div>
    </div>
</body>
</html>