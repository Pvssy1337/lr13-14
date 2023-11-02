<?php
session_start();
if(isset($_SESSION['username'])){
    unset($_SESSION['username']);
    echo 'Привіт, '.$_SESSION['username'];
}
session_destroy();
