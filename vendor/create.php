<?php

require_once '../config/connect.php';

$title = $_POST['title'];
$description = $_POST['descr'];
$price = $_POST['price'];

mysqli_query($connect,"INSERT INTO `products` (`id`, `title`, `price`, `description`) VALUES (NULL, '$title', '$price', '$description')");

header('Location: /');