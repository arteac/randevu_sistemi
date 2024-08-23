<?php
require 'db.php';

if (!isset($_COOKIE['admin'])) {
    header("Location: index.php");
    exit();
}
// Admin ID'yi çerezden al
$adminId = $_COOKIE['admin'];

// Admin bilgilerini veritabanından al
$stmt = $conn->prepare("SELECT username FROM admins WHERE id = :id");
$stmt->execute(['id' => $adminId]);
$admin = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$admin) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Paneli</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body><style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
}

.menu {
    background-color: #333;
    padding: 10px 0;
}

.menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    text-align: center;
}

.menu ul li {
    display: inline;
}

.menu ul li a {
    color: #fff;
    text-decoration: none;
    padding: 10px 20px;
}

.menu ul li a:hover {
    background-color: #555;
}

.container {
    max-width: 800px;
    margin: 20px auto;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
}

h2 {
    color: #333;
    margin-bottom: 20px;
}

p {
    color: #666;
    margin-bottom: 30px;
}

a {
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

</style>
    <div class="menu">
        <ul>
            <li><a href="#">Ana Sayfa</a></li>
            <li><a href="edit.php">Ekleme</a></li>
            <li><a href="update_content.php">Düzenleme</a></li>
            <li><a href="delete_content.php">İçerik Silme</a></li>
            <li><a href="logout.php" class="logout">Çıkış Yap</a></li>
        </ul>
    </div>

    <div class="container">
    <h2>Admin Paneli</h2>
        <h2>Hoşgeldiniz, <?php echo htmlspecialchars($admin['username']); ?>!</h2>
    </div>
</body>
</html>
