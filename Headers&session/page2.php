<?php

header('Content-Type: text/plain');
header('Content-Disposition: attachment; filename="test.txt"');



echo 'Привет, ' . htmlspecialchars($_GET["name"]);


//header("Location: http://localhost:8000/page2.php?text=Hello My Friend");