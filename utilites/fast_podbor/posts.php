<?php

$check_komu = "";
$check_value = "";
$check_flower = "";
if (isset($_POST["check_komu"])) {
    $name = $_POST["check_komu"];
}
if (isset($_POST["check_value"])) {
    $name = $_POST["check_value"];
}
if (isset($_POST["check_flower"])) {
    $name = $_POST["check_flower"];
}
if ((!empty($_POST['check_komu'])) && (!empty($_POST['check_value'])) && (!empty($_POST['check_flower']))) {
    $file_content = file_get_contents(filename: "podbor.txt");
    file_put_contents(filename: "podbor.txt", data: $file_content . $_POST['check_komu'] . " " . $_POST['check_value'] . " " . $_POST['check_flower'] . "\n");
}
header("Location: fast_podbor.php");
?>
