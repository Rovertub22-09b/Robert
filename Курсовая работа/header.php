<!doctype html>
<html lang="en">
<head>
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
<body>
<div class="modal" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1>АВТОРИЗИРУЙТЕСЬ</h1>
            </div>
            <div class="modal-body" style="max-width: 600px">
                <form method="get" action="#" id="orderForm">
                    <div class="avtoriz">
                        <input type="text" placeholder="+7(___)-___--" id="phone_authorize" required>
                        <input type="password" placeholder="Пароль" id="password_authorize" required>
                        <button type="submit" class="btn3 btn-success btn-lg" onclick="javascript:authorize()">
                            авторизация
                        </button>
                    </div>
                    <div id="authorize_response"></div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class=" row links">
    <div class=" log col-3">
        <a href="index.php">
            <img src="img/logo.jpg">
           ПОМОГИТЕ
        </a>
    </div>
    <div class="col-9">
        <a href="index.php">главная</a>
        <a href="people.php">психологи</a>
        <a href="about.php">о нас</a>
        <a href="remarkspage.php">отзывы</a>
        <?php if (!isset($_SESSION['user_info'])) { ?>
        <a href="index.php #reg">
            <button class="btn1 btn-success">регистрация</button>
        </a>
        <a>
            <button data-toggle="modal" data-target="#myModal" class="btn1 btn-success">авторизация</button>
        </a>
        <?php } else { ?>
            <a href="#" onclick="javascript:unauthorize()">
                <span>выйти</span>
            </a>
        <?php } ?>
    </div>
</div>
</body>
</html>