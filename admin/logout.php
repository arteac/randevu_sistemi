<?php
setcookie("admin", "", time() - 3600, "/"); // Çerezi sil
header("Location: index.php");
exit();
?>
