<?php
session_start();
require 'db.php';

// Kullanıcı oturum açmamışsa login sayfasına yönlendir
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

// İçerik güncelleme işlemi
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    $contentId = $_POST['content_id'];
    $newTitle = $_POST['new_title'];
    $newContent = $_POST['new_content'];
    
    try {
        $stmt = $conn->prepare("UPDATE content SET title = :title, content = :content WHERE id = :id");
        $stmt->bindParam(':title', $newTitle, PDO::PARAM_STR);
        $stmt->bindParam(':content', $newContent, PDO::PARAM_STR);
        $stmt->bindParam(':id', $contentId, PDO::PARAM_INT);
        $stmt->execute();
        $success_message = "İçerik başarıyla güncellendi.";
    } catch (PDOException $e) {
        $error_message = "Hata: " . $e->getMessage();
    }
}

// İçerikleri listeleme işlemi
try {
    $stmt = $conn->prepare("SELECT id, title, content FROM content");
    $stmt->execute();
    $contents = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $error_message = "Hata: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İçerik Güncelleme</title>
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

        .content-item {
            margin-bottom: 20px;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .content-item h3 {
            margin-bottom: 10px;
            color: #555;
        }

        .content-item p {
            margin-bottom: 10px;
            color: #666;
        }

        .content-item form {
            display: inline-block;
        }

        button {
            padding: 5px 10px;
            background-color: #337ab7;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 14px;
            cursor: pointer;
        }

        button:hover {
            background-color: #286090;
        }

        .success-message, .error-message {
            background-color: #5cb85c;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 20px;
        }

        .error-message {
            background-color: #d9534f;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>İçerik Güncelleme</h2>

        <?php if (isset($success_message)): ?>
            <div class="success-message"><?php echo $success_message; ?></div>
        <?php endif; ?>

        <?php if (isset($error_message)): ?>
            <div class="error-message"><?php echo $error_message; ?></div>
        <?php endif; ?>

        <?php if (!empty($contents)): ?>
            <?php foreach ($contents as $content): ?>
                <div class="content-item">
                    <h3><?php echo htmlspecialchars($content['title']); ?></h3>
                    <p><?php echo htmlspecialchars($content['content']); ?></p>
                    <form method="post">
                        <input type="hidden" name="content_id" value="<?php echo $content['id']; ?>">
                        <label for="new_title">Yeni Başlık:</label><br>
                        <input type="text" id="new_title" name="new_title" required><br><br>
                        <label for="new_content">Yeni İçerik:</label><br>
                        <textarea id="new_content" name="new_content" rows="4" cols="50" required></textarea><br><br>
                        <button type="submit" name="update">Güncelle</button>
                    </form>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Hiç içerik bulunamadı.</p>
        <?php endif; ?>
    </div>
</body>
</html>

