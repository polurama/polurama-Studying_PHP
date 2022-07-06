<?php
declare(strict_types=1);
session_start();

$_SESSION['count'] = isset($_SESSION['count'])?
    ++$_SESSION['count'] : 1;
echo 'Количество открытий страниц: ';
echo $_SESSION['count'];

if($_SESSION['count'] > 3) {
    header("Location: page4.php");
}




