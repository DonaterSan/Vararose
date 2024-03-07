<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<button onclick="openForm()">Нажми меня</button>
<div class="container__fast-podbor">
    <div class="backpopup" onclick="closeForm()" id="back"></div>
    <div class="form-popup" id="myForm">
        <div id="popup">
            <div class="close_container">
                <img src="" alt="" class="close" onclick="closeForm()">
            </div>
            <h1></h1>
            <p></p>
            <form class="section1" id="openForm__1">
                <div class="form_top">
                    <div class="circle">
                        <label for="form_1-check-man">папе/парню</label>
                        <input type="radio" id="form_1-check-man" name="check">
                    </div>
                    <div>
                        <label for="form_1-check-girl1">девушке/жене</label>
                        <input type="radio" id="form_1-check-girl1" name="check">
                    </div>
                    <div>
                        <label for="form_1-check-girl2">маме/бабушке</label>
                        <input type="radio" id="form_1-check-girl2" name="check">
                    </div>
                </div>

                <br>

                <div class="form_bot">
                    <label for="form_1-check-girl3">подруге</label>
                    <input type="checkbox" id="form_1-check-girl3" name="check">

                    <label for="form_1-check-chief">начальнику</label>
                    <input type="checkbox" id="form_1-check-chief" name="check">

                    <label for="form_1-check-classic">классика</label>
                    <input type="checkbox" id="form_1-check-classic" name="check">
                </div>

                <button class="btn" type="submit" onclick="openForm__2()">Далее</button>
            </form>
            <form action="" class="section2" id="Form__2">
                <div>
                    <div class="form_top">
                        <div>
                            <label for="form_1-check-man">до 2000 ₽ </label>
                            <input type="checkbox" id="form_1-check-man" name="check">
                        </div>
                        <div>
                            <label for="form_1-check-girl1">от 2000 ₽ до 3500 ₽</label>
                            <input type="checkbox" id="form_1-check-girl1" name="check">
                        </div>
                        <div>
                            <label for="form_1-check-girl2">от 3500 ₽ до 5000 ₽</label>
                            <input type="checkbox" id="form_1-check-girl2" name="check">
                        </div>
                    </div>

                    <br>

                    <div class="form_bot">
                        <label for="form_1-check-girl3">свыше 5000 ₽</label>
                        <input type="checkbox" id="form_1-check-girl3" name="check">
                    </div>

                    <button class="btn_back" onclick="openForm__1()">Назад</button>
                    <button class="btn_next" type="submit" onclick="openForm__3()">Далее</button>
                </div>
            </form>
            <form action="" class="section3" id="Form__3">
                <div>
                    <div class="form_top">
                        <div>
                            <label for="form_1-check-man">Роза</label>
                            <input type="checkbox" id="form_1-check-man" name="check">
                        </div>
                        <div>
                            <label for="form_1-check-girl1">Хризантема</label>
                            <input type="checkbox" id="form_1-check-girl1" name="check">
                        </div>
                        <div>
                            <label for="form_1-check-girl2">Лилия</label>
                            <input type="checkbox" id="form_1-check-girl2" name="check">
                        </div>

                        <label for="form_1-check-chief">Орхидея</label>
                        <input type="checkbox" id="form_1-check-girl3" name="check">

                    </div>

                    <br>

                    <div class="form_bot">

                        <label for="form_1-check-chief">Гербера</label>
                        <input type="checkbox" id="form_1-check-chief" name="check">

                        <label for="form_1-check-classic">Не знаю</label>
                        <input type="checkbox" id="form_1-check-classic" name="check">

                    </div>

                    <button class="btn_back" onclick="openForm__2()">Назад</button>
                    <button class="btn_next" type="submit" onclick="openForm__4()">Далее</button>
                </div>
            </form>
            <form action="" id="openForm__4" class="section3">
                <div>
                    <div class="form_top">
                        <div>
                            <p>Мы сделали подборку букетов по вашим запросам, вам остается только выбрать понравившейся!</p>
                        </div>
                    </div>

                    <button class="btn_back" onclick="">Посмотреть</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        function closeForm() {
            document.getElementById("myForm").style.display = "none";
            document.getElementById("back").style.display = "none";
            document.getElementById("openForm__1").style.display = "none";
            document.getElementById("openForm__2").style.display = "none";
            document.getElementById("openForm__3").style.display = "none";
            document.getElementById("openForm__4").style.display = "none";
        }

        function openForm() {
            document.getElementById("myForm").style.display = "block";
            document.getElementById("openForm__1").style.display = "block";
            document.getElementById("back").style.display = "block";
        }
        function openForm__2() {
            document.getElementById("myForm__2").style.display = "block";
            document.getElementById("myForm__1").style.display = "none";
            document.getElementById("back").style.display = "block";
        }
        function openForm__3(){
            document.getElementById("myForm__3").style.display = "block";
            document.getElementById("myForm__2").style.display = "none";
            document.getElementById("back").style.display = "block";
        }
        function openForm__4(){
            document.getElementById("myForm__4").style.display = "block";
            document.getElementById("myForm__3").style.display = "none";
            document.getElementById("back").style.display = "block";
        }
    </script>
</div>
</body>
</html>
<?php
