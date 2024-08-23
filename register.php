<?php
session_start();

// Veritabanı bağlantısı
$conn = mysqli_connect('localhost', 'root', '', 'user_db') or die('Connection failed');

if(isset($_POST['register'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Şifre hashleme
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Veritabanına kullanıcı ekleme
    $insert = mysqli_query($conn, "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')");

    if($insert) {
        // Kayıt başarılı, kullanıcıyı başka bir sayfaya yönlendir
        header("Location: login.php");
        exit; // Dikkat! Yönlendirmeden sonra kodun devam etmemesi için exit kullanıyoruz.
    } else {
        echo "Kayıt sırasında bir hata oluştu.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 300px;
            max-width: 80%;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        /* Eklenen stil */
        .login-link {
            text-align: center;
            margin-top: 10px;
        }

        .login-link a {
            color: #007bff;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Kayıt Ol</h2>
        <form action="register.php" method="post">
            <input type="text" name="username" placeholder="Kullanıcı Adı" required><br>
            <input type="email" name="email" placeholder="E-posta" required><br>
            <input type="password" name="password" placeholder="Şifre" required><br>
            <button type="submit" name="register">Kayıt Ol</button>
        </form>
        <div class="login-link">
            Hesabınız var mı? <a href="login.php">Giriş yapın</a>
        </div>
    </div>
</body>
</html>
