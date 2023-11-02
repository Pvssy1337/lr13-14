<?php
session_start();

$_SESSION['group'] = '56';
$_SESSION['year'] = '2018';

$counter = 1;
if (isset($_COOKIE['counter'])) {
    $counter = $_COOKIE['counter'] + 1;
}

setcookie('counter', $counter, time() + 3600);

session_destroy();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сесія</title>
</head>

<body>
    <p>Group: <?php echo $_SESSION['group']; ?></p>
    <p>Year: <?php echo $_SESSION['year']; ?></p>
    <p>Counter: <?php echo $counter ?></p>
</body>

</html>