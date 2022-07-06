<?php

//declare(strict_types=1);

$path_parts = pathinfo($_FILES['file_name']['name']);

$uploaddir = "./my/";
$uploadfile = $uploaddir . $_POST['new_file_name']. '.' . $path_parts['extension'] ;

if(empty($_POST['new_file_name'])) {
    header('Location: ./index.html');
}

if(empty($_POST['content'])) {
    header('Location: ./index.html');
}
else {
    if (move_uploaded_file($_FILES['file_name']['tmp_name'], $uploadfile)) {
        echo "Файл корректен и был успешно загружен.\n";
    } else {
        echo "Возможная атака с помощью файловой загрузки!\n";
    }
}
echo '<br />';
echo 'Размер файла в байтах: '.$_FILES['file_name']['size'];
echo '<br />';
echo $uploadfile;

echo '<pre>';
var_dump($_FILES);
var_dump($_POST);
echo '</pre>';