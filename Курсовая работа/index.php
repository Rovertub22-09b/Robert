<!doctype html>
<html lang="en">
<head>
    <title>ООО ПОМОГИТЕ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styleproject.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ajax.js"></script>
</head>
<?php
require('lib.php')
?>
<?php
include('header.php')
?>

<div class="row mainpage">
    <div class="text col-md-6 col-12">
        <h1><span class="colr">Получите консультацию</span> психолога через 5 минут после регистрации</h1>
        <ul>
            <li><span>Подбор психолога или психотерапевта с опытом решения именно вашей проблемы!</span></li>
            <li><span>Консультация психолога проходит онлайн в удобном мессенджере (видео, аудио или чат)</span></li>
            <li>
                <span>На сеансе вы получите диагностику вашего состояния и направления по решению именно вашей проблемы</span>
            </li>
            <li>
                <span>Зарегистрируйтесь прямо сейчас и получите первую 20 минутную консультацию с психологом бесплатно</span>
            </li>
        </ul>
    </div>
    <div class="picture col-md-6 col-12">
        <img src="img/fon.jpg">
    </div>
</div>
<div class="backgroundindex">
    <a name="reg"></a>
    <div class="regform">
        <div class="regtext">
            <a name="reg"><h3>ЗАРЕГИСТРИРУЙТЕСЬ И ОТПРАВЬТЕ ЗАЯВКУ</h3></a>
        </div>
        <input type="text" placeholder="Опишите кратко ваш запрос на работу с психологом." id="appeal_register"
               required>
        <input type="text" placeholder="+7(___)-___--" id="phone_register" required>
        <input type="password" placeholder="Пароль" id="password_register" required>
        <select id="inp1">
            <option value="yourself" selected>
                Для себя
            </option>
            <option value="child" selected>
                Для ребенка
            </option>
            <option value="partners" selected>
                Для пары
            </option>
            <option value="family" selected>
                Для семьи
            </option>
        </select>
        <select id="inp2">
            <option value="woman" selected>
                Пол психолога: женский
            </option>
            <option value="man" selected>
                Пол психолога: мужской
            </option>
            <option value="dog" selected>
                Пол психолога: собака
            </option>
            <option value="nomatter" selected>
                Пол психолога: неважно
            </option>
        </select>
        <button class="btn btn-success" onclick="javascript:register()">регистрация</button>
        <div id="register_response">
        </div>
    </div>
</div>
<?php include('footer.php') ?>
</body>
</html>