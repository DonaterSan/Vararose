<?php
$name = "";
$phone = "";
if (isset($_POST["user_name"])){
    $name = $_POST["user_name"];
}
if (isset($_POST["phone"])){
    $name = $_POST["phone"];
}
if ((!empty($_POST['user_name'])) && (!empty($_POST['phone']))) {
    $file_content = file_get_contents(filename: "clients.txt");
    file_put_contents(filename: "clients.txt", data: $file_content . "Имя получателя: " . $_POST['user_name'] . ". Номер получателя: " . $_POST['phone'] . "\n");
}
header("Location: http://localhost:63342/ViraRose/utilites/namek/namek.html");