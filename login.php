<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'user_db') or die('Connection failed');
if(isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    // Kullanıcıyı veritabanından bulma
    $query = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    $row = mysqli_fetch_assoc($query);
    if($row) {
        // Şifre kontrolü
        if(password_verify($password, $row['password'])) {
            // Oturum başlatma
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];

            // Çerez oluşturma (5 dakika geçerli)
            $cookie_time = time() + 300; // 5 dakika
            setcookie('user_id', $row['id'], $cookie_time, "/");
            setcookie('username', $row['username'], $cookie_time, "/");

            // Session timeout süresini 5 dakika olarak ayarla
            $_SESSION['timeout'] = $cookie_time;

            // Giriş başarılı olduğunda randevu.php sayfasına yönlendirme
            header("Location: randevu.php");
            exit();
        } else {
            $error_message = "Hatalı e-posta veya şifre.";
        }
    } else {
        $error_message = "Hatalı e-posta veya şifre.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 300px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        input[type="email"],
        input[type="password"],
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
        p.error {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Giriş Yap</h2>
        <form action="login.php" method="post">
            <?php if(isset($error_message)) { ?>
                <p class="error"><?php echo $error_message; ?></p>
            <?php } ?>
            <input type="email" name="email" placeholder="E-posta" required><br>
            <input type="password" name="password" placeholder="Şifre" required><br>
            <button type="submit" name="login">Giriş Yap</button>
        </form>
    </div>
</body>
</html>
