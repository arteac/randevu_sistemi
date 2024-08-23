<?php
session_start();
require 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    try {
        $stmt = $conn->prepare("INSERT INTO content (title, content) VALUES (:title, :content)");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->execute();
        $success_message = "İçerik başarıyla Eklendi.";
    } catch (PDOException $e) {
        $error_message = "Hata: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İçerik Ekleme</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
            box-sizing: border-box;
            text-align: center;
            position: relative;
        }

        h2 {
            text-align: center;
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
        input[type="password"],
        textarea {
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

        .success-message {
            position: absolute;
            top: 10%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #5cb85c;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            display: <?php echo isset($success_message) ? 'block' : 'none'; ?>;
        }

        .error-message {
            position: absolute;
            top: 10%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #d9534f;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            display: <?php echo isset($error_message) ? 'block' : 'none'; ?>;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>İçerik Ekleme</h2>
        <div class="form-group">
            <form method="post" id="edit-form">
                <h3>Başlık</h3>
                <input type="text" name="title" required>
                <h3>İçerik</h3>
                <textarea name="content" rows="5" required></textarea>
                <button type="submit" name="edit">Ekleme</button>
            </form>
        </div>
        <div class="success-message"><?php echo isset($success_message) ? $success_message : ''; ?></div>
        <div class="error-message"><?php echo isset($error_message) ? $error_message : ''; ?></div>
    </div>
</body>
</html>

