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
                <img src="img/icon/img.png" alt="" class="close" id="close" onclick="closeForm()">
            </div>
            <form action="posts.php" id="myForm" method="post">
                <div class="section1" id="openForm__1">
                    <h1 class="title_podbor">Быстрый подбор букета</h1>
                    <p>Для кого вы подбираете букет?</p>
                    <div class="form_top">
                        <div class="circle">
                            <input type="radio" id="form_1-check-man" name="check_komu" value="form_1-check-man" class="circle-radio">
                            <label for="form_1-check-man">папе/парню</label>
                        </div>
                        <div class="circle">
                            <input type="radio" id="form_1-check-girl1" name="check_komu" value="form_1-check-girl1" class="circle-radio">
                            <label for="form_1-check-girl1">девушке/жене</label>
                        </div>
                        <div class="circle">
                            <input type="radio" id="form_1-check-girl2" name="check_komu" value="form_1-check-girl2" class="circle-radio">
                            <label for="form_1-check-girl2">маме/бабушке</label>
                        </div>
                    </div>

                    <br>

                    <div class="form_bot">
                        <div class="circle">
                            <input type="radio" id="form_1-check-girl3" name="check_komu" value="form_1-check-girl3" class="circle-radio">
                            <label for="form_1-check-girl3">подруге</label>
                        </div>
                        <div class="circle">
                            <input type="radio" id="form_1-check-chief" name="check_komu" value="form_1-check-chief" class="circle-radio">
                            <label for="form_1-check-chief">начальнику</label>
                        </div>
                        <div class="circle">
                            <input type="radio" id="form_1-check-classic" name="check_komu" value="form_1-check-classic" class="circle-radio">
                            <label for="form_1-check-classic">классика</label>
                        </div>
                    </div>

                    <button class="btn_next" type="button" onclick="openForm__2()">Далее</button>
                </div>
                <div class="section2" id="openForm__2">
                    <h1 class="title_podbor">Быстрый подбор букета</h1>
                    <p>Ваш бюджет</p>
                    <div>
                        <div class="form_top">
                            <div>
                                <input type="radio" id="do_2000" name="check_value" value="do_2000" class="circle-radio">
                                <label for="do_2000">до 2000 ₽ </label>
                            </div>
                            <div>
                                <input type="radio" id="ot_2000" name="check_value" value="ot_2000" class="circle-radio">
                                <label for="ot_2000">от 2000 ₽ до 3500 ₽</label>
                            </div>
                            <div>
                                <input type="radio" id="ot_3500" name="check_value" value="ot_3500" class="circle-radio">
                                <label for="ot_3500">от 3500 ₽ до 5000 ₽</label>
                            </div>
                        </div>

                        <br>

                        <div class="form_bot">
                            <div class="circle">
                                <input type="radio" id="ot_5000" name="check_value" value="ot_5000" class="circle-radio">
                                <label for="ot_5000">свыше 5000 ₽</label>
                            </div>
                        </div>

                        <button class="btn_back" type="button" onclick="openForm()">Назад</button>
                        <button class="btn_next" type="button" onclick="openForm__3()">Далее</button>
                    </div>
                </div>
                <div class="section3" id="openForm__3">
                    <h1 class="title_podbor">Быстрый подбор букета</h1>
                    <p>Есть предпочтение по цветам?</p>
                    <div class="">
                        <div class="form_top">
                            <div class="circle">
                                <input type="radio" id="rose" name="check_flower" value="rose" class="circle-radio">
                                <label for="rose">Роза</label>
                            </div>
                            <div class="circle">
                                <input type="radio" id="hrizantema" name="check_flower" value="hrizantema" class="circle-radio">
                                <label for="hrizantema">Хризантема</label>
                            </div>
                            <div class="circle">
                                <input type="radio" id="hrizantema" name="check_flower" value="hrizantema" class="circle-radio">
                                <label for="hrizantema">Лилия</label>
                            </div>
                            <div class="circle">
                                <input type="radio" id="orhidia" name="check_flower" value="orhidia" class="circle-radio">
                                <label for="orhidia">Орхидея</label>
                            </div>
                        </div>

                        <br>

                        <div class="form_bot">
                            <div class="circle">
                                <input type="radio" id="gerbera" name="check_flower" value="gerbera" class="circle-radio">
                                <label for="gerbera">Гербера</label>
                            </div>
                            <div class="circle">
                                <input type="radio" id="dont_know" name="check_flower" value="dont_know" class="circle-radio">
                                <label for="dont_know">Не знаю</label>
                            </div>
                        </div>

                        <button class="btn_back" type="button" onclick="openForm__2()">Назад</button>
                        <button class="btn_next" type="button" onclick="openForm__4()">Далее</button>
                    </div>
                </div>
                <div id="openForm__4" class="section3">
                    <h1 class="title_podbor">Быстрый подбор букета</h1>
                    <p>Готово!</p>
                    <div>
                        <div class="form_bot">
                            <div>
                                <p class="text__sec4">Мы сделали подборку букетов по вашим запросам, вам остается только выбрать понравившейся!</p>
                            </div>
                        </div>

                        <button class="btn_next" id="btn_next" type="submit" onclick="">Посмотреть</button>
                    </div>
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
            document.getElementById("close").style.display = "block";
            document.getElementById("myForm").style.display = "block";
            document.getElementById("openForm__1").style.display = "block";
            document.getElementById("back").style.display = "block";
            document.getElementById("openForm__2").style.display = "none";
            document.getElementById("openForm__3").style.display = "none";
            document.getElementById("openForm__4").style.display = "none";
        }
        function openForm__2() {
            document.getElementById("openForm__2").style.display = "block";
            document.getElementById("openForm__1").style.display = "none";
            document.getElementById("openForm__3").style.display = "none";
            document.getElementById("back").style.display = "block";
            document.getElementById("openForm").style.display = "none";
        }
        function openForm__3(){
            document.getElementById("openForm__3").style.display = "block";
            document.getElementById("openForm__2").style.display = "none";
            document.getElementById("back").style.display = "block";
        }
        function openForm__4(){
            document.getElementById("openForm__4").style.display = "block";
            document.getElementById("openForm__3").style.display = "none";
            document.getElementById("openForm__2").style.display = "none";
            document.getElementById("openForm__1").style.display = "none";
            document.getElementById("back").style.display = "block";
            document.getElementById("btn_next").style.marginTop = "0";
        }
    </script>
</div>
</body>
</html>
<?php
