<?php
declare(strict_types=1);
session_start();
echo 'Страница №4 <br/>';
echo 'Количество открытий третьей страницы: '.$_SESSION['count'];

