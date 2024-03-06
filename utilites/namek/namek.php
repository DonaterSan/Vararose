
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="backpopup" id="back" onclick="closeForm()"></div>
    <button class="open__btn" onclick="openForm()">Сделать намек</button>
    <div class="form-popup" id="myForm">
        <div id="popup">
            <div class="close_container">
                <img src="img/icon/img.png" class="close" onclick="closeForm()">
            </div>
            <p class="title-namek">Кому отправить намек</p>
            <form action="namek.php" class="form-container" method="post">
                <div class="user">
                    <label for="user_name"><b>Имя<b class="red-color-strong">*</b></b></label>
                    <input type="text" name="user_name" id="user_name" class="form__input">
                </div>
                <div class="phone_user">
                    <label for="phone"><b>Телефон<b class="red-color-strong">*</b></b></label>
                    <input type="text" name="phone" id="phone" class="form__input">
                </div>
            </form>
            <div class="btn_container">
                <button type="submit" class="btn__namek">Отправить</button>
            </div>
        </div>
    </div>
    <script>
        function closeForm() {
            document.getElementById("myForm").style.display = "none";
            document.getElementById("back").style.display = "none";
        }

        function openForm() {
            document.getElementById("myForm").style.display = "block";
            document.getElementById("back").style.display = "block";
        }
    </script>
</div>
<?php

$name = "";
$phone = "";
if (isset($_POST["user_name"])) {
    $name = $_POST["user_name"];
}
if (isset($_POST["phone"])) {
    $name = $_POST["phone"];
}
if ((!empty($_POST['user_name'])) && (!empty($_POST['phone']))) {
    $file_content = file_get_contents(filename: "clients.txt");
    file_put_contents(filename: "clients.txt", data: $file_content . "Имя получателя: " . $_POST['user_name'] . ". Номер получателя: " . $_POST['phone'] . "\n");
}
header("Location: http://localhost:63342/ViraRose/utilites/namek/namek.html");

?>
</body>
</html>