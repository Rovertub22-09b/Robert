<!doctype html>
<html lang="en">
<head>
    <title>ООО ПОМОГИТЕ</title>
</head>
<body>
<?php
require ('lib.php')
?>
<?php
include('header.php')
?>
<div class="modal" id="myModal1" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1>Оставьте отзыв</h1>
            </div>
            <div class="modal-body" style="max-width: 600px">
                <form method="get" action="#" id="orderForm">
                    <?php $psys = new Psys(); ?>

                    <div class="remarkorm">
                        <form>
                            <label>Выберите психолога</label>
                            <select id="namepsy">
                                <?php foreach ($psys->psyItems as $psy) { ?>
                                    <option selected>
                                        <?=$psy['name']?>
                                    </option>
                                <?php } ?>
                            </select>
                            <label>Поставьте оценку</label>
                            <select id="mark">
                                <option value="1" selected>
                                    1
                                </option>
                                <option value="2" selected>
                                    2
                                </option>
                                <option value="3" selected>
                                    3
                                </option>
                                <option value="4" selected>
                                    4
                                </option>
                                <option value="5" selected>
                                    5
                                </option>
                            </select>
                            <label>Прокомментируйте</label>
                            <input type="text" placeholder="Отзыв" id="text" required>
                            <button type="submit" class="btn3 btn-success btn-lg" onclick="javascript:remarks()">Отправить отзыв</button>
                        </form>
                    </div>
                    <div id="remarks_response">
                    </div>
            </div>
        </div>
    </div>
</div>
<div class="background2">
<div class="page3">
        <h1>Отзывы</h1>
        <?php if (!isset($_SESSION['user_info'])) { ?>
            <p>Зарегистрируйтесь или авторизуйтесь, чтобы оставить отзыв</p>
        <?php } else { ?>
            <div class="btn4">
    <button type="submit" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal1" >Оставить отзыв</button>
    </div>
    <?php } ?>
</div>

<?php $remarks = new Remarks(); ?>

<div class="usersremark row">
    <?php foreach ($remarks->remarkItems as $remark) { ?>
        <div class="remarksinfo">
            <div class="name">Психолог: <?=$remark['namepsy']?></div>
            <div class="mark">Оценка: <?=$remark['mark']?></div>
            <div class="text_remark">Комментарий: <?=$remark['text']?></div>
        </div>
    <?php } ?>
</div>
</div>
<?php
include('footer.php')
?>
</body>
</html>
