<?php

$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('Connection failed');

if(isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $insert = mysqli_query($conn, "INSERT INTO `contact_form` (name, email, number, date, message) VALUES ('$name', '$email', '$number', '$date', '$message')") or die('Query failed');

    if($insert) {
        $success_message = 'Randevunuz Başarıyla Alındı.';
    } else {
        $error_message = 'Randevu Alınırken bir hata oluştu.';
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Randevu</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.appointment {
    max-width: 1200px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.heading {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.heading span {
    color: #007bff;
}

.row {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
}

.image {
    flex: 1;
    text-align: center;
    margin-bottom: 20px;
}

.image img {
    max-width: 100%;
    height: auto;
}

form {
    flex: 1;
    padding: 20px;
}

form h3 {
    margin-bottom: 15px;
    color: #333;
}

form .box {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
}

form .box.message {
    height: 100px;
    resize: none;
}

form .btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-align: center;
}

form .btn:hover {
    background-color: #0056b3;
}

.message.success {
    color: green;
}

.message.error {
    color: red;
}
    </style>
<section class="appointment" id="appointment">
    <h1 class="heading"> <span>Randevu</span> Alın </h1>
    <div class="row">

        <div class="image">
            <img src="image/appointment-img.svg" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <?php if(isset($success_message)) { ?>
                <p class="message success"><?php echo $success_message; ?></p>
            <?php } ?>
            <?php if(isset($error_message)) { ?>
                <p class="message error"><?php echo $error_message; ?></p>
            <?php } ?>
            <h3>Randevu Oluştur</h3>
            <input type="text" name="name" placeholder="Adınız" class="box">
            <input type="number" name="number" placeholder="Telefon Numaranız" class="box">
            <input type="email" name="email" placeholder="E-Mail Adresiniz" class="box">
            <input type="date" name="date" class="box">
            <textarea name="message" id="" cols="30" rows="10" class="box message" placeholder="Mesajınızı Yazın"></textarea>
            <input type="submit" name="submit" value="Randevu Alın" class="btn">
        </form>

    </div>
</section>
</body>
</html>
