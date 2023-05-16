<?php
// set the expiration date to one hour ago
setcookie("user_id", $ID, time() - (86400), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
echo "Cookie 'user' is deleted.";
header('Location: '.'../index.php');
?>