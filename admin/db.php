<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "admin";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}

function getDbConnection() {
    global $conn;
    return $conn;
}

function registerAdmin($username, $password) {
    $conn = getDbConnection();
    $stmt = $conn->prepare("INSERT INTO admins (username, password) VALUES (:username, :password)");
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);
    return $stmt->execute(['username' => $username, 'password' => $passwordHash]);
}

function loginAdmin($username, $password) {
    $conn = getDbConnection();
    $stmt = $conn->prepare("SELECT * FROM admins WHERE username = :username");
    $stmt->execute(['username' => $username]);
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($admin && password_verify($password, $admin['password'])) {
        setcookie("admin", $admin['id'], time() + 300, "/"); // 5 dakika geçerli çerez
        return true;
    }    
    return false;
}
?>
