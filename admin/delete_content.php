<?php
session_start();
require 'db.php';

// Kullanıcı oturum açmamışsa index.php sayfasına yönlendir
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

// İçerik silme işlemi
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete'])) {
    $contentId = $_POST['content_id'];
    
    try {
        $stmt = $conn->prepare("DELETE FROM content WHERE id = :id");
        $stmt->bindParam(':id', $contentId, PDO::PARAM_INT);
        $stmt->execute();
        $_SESSION['success_message'] = "İçerik başarıyla silindi.";
        
        // Başarılı silme işleminden sonra tekrar delete_content.php sayfasına yönlendirme
        header("Location: delete_content.php");
        exit();
        
    } catch (PDOException $e) {
        $_SESSION['error_message'] = "Hata: " . $e->getMessage();
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
    <title>İçerik Silme</title>
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
            background-color: #d9534f;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 14px;
            cursor: pointer;
        }

        button:hover {
            background-color: #c9302c;
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
        <h2>İçerik Silme</h2>
        <?php if (isset($_SESSION['success_message'])) { ?>
            <div class="success-message"><?php echo $_SESSION['success_message']; unset($_SESSION['success_message']); ?></div>
        <?php } ?>
        <?php if (isset($_SESSION['error_message'])) { ?>
            <div class="error-message"><?php echo $_SESSION['error_message']; unset($_SESSION['error_message']); ?></div>
        <?php } ?>
        <?php if (!empty($contents)) { ?>
            <?php foreach ($contents as $content) { ?>
                <div class="content-item">
                    <h3><?php echo htmlspecialchars($content['title']); ?></h3>
                    <p><?php echo htmlspecialchars($content['content']); ?></p>
                    <form method="post">
                        <input type="hidden" name="content_id" value="<?php echo $content['id']; ?>">
                        <button type="submit" name="delete">Sil</button>
                    </form>
                </div>
            <?php } ?>
        <?php } else { ?>
            <p>Hiç içerik bulunamadı.</p>
        <?php } ?>
    </div>
</body>
</html>
