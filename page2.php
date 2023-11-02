<?php
session_start();
if (isset($_SESSION['username'])) {
    echo $_SESSION['username'] . ' , ти перейшов на другу сторінку сайту!';
    echo ("<br>");
}
?>
<a href="page3.php"> перейти на наступну сторінку </a>