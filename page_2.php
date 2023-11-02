<?php
session_start();
if(isset($_POST['login']) && isset($_POST['password'])){
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['password'] = $_POST['password'];
    header('Location: page_3.php');
    exit();
} else {
    echo "Помилка: Логін та пароль не були передані.";
}
