<?php
//declare(strict_types=1);

$path_parts = pathinfo($_FILES['file_name']['name']);


$uploaddir = "my_files/";
$uploadfile = $uploaddir . $_POST['new_file_name']. '.' . $path_parts['extension'] ;





if(!isset($_POST['new_file_name'])) {
    header('Location: /index.php');
    }

elseif(!isset($_FILE['file_name']['tmp_name'])) {
    header('Location: /index.php');
    }
else {
    if (move_uploaded_file($_FILES['file_name']['tmp_name'], $uploadfile)) {
        echo "Файл корректен и был успешно загружен.\n";
    } else {
        echo "Возможная атака с помощью файловой загрузки!\n";
    }
}


var_dump($path_parts['extension']);

echo '<pre>';
var_dump($_FILES);
var_dump($_POST);
echo '</pre>';


echo '<br />';
echo 'Размер файла в байтах: '.$_FILES['file_name']['size'];
echo '<br />';
echo $uploadfile;