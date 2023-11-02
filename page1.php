<?php
session_start();
$_SESSION['username'] = "maksim";
echo 'Привіт, ' . $_SESSION['username'] . "<br>";
?>
<a href="page2.php">перейти на наступну сторінку </a>