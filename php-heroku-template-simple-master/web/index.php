<?php

session_start();

if(!isset($_SESSION['username'])) {
    include 'index.html';

} else {
?>
<hr>
<?php
    echo "Привет, {$_SESSION['username']}! </br>";
//    echo '<pre>';
//    var_dump($_SESSION);
//    echo '</pre>';
?>
<hr>
<a href="exit.php">Завершить сессию</a>
<hr>
<a href="form.html">форма Дадата</a>
<hr>
<?php } ?>