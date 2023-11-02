<?php
session_start();
if(isset($_SESSION['login']) && isset($_SESSION['password'])){
    echo "Логін: " . $_SESSION['login'] . "<br>";
} else {
    echo "Помилка: Логін та пароль не доступні.";
}
