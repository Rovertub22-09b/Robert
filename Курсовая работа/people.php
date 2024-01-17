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
<?php $psys = new Psys(); ?>
<div class="background">
<div class="our">
<h1>Наши психологи</h1>
</div>
    <div class="people row">
        <?php foreach ($psys->psyItems as $psy) { ?>
            <div class="psys">
                <img src="<?= $psy['photo'] ?>" >
                <?php if ($psy['id'] == 5) { ?>
                    <div id="root">
                    </div>
                <?php } ?>
                <div class="name"><?=$psy['name']?></div>
                <div class="description"><?=$psy['discription']?></div>
                <div class="name"><?=$psy['price']?></div>
                <?php if (!isset($_SESSION['user_info'])) { ?>
                    <button class="btn3 btn-success" data-toggle="modal" data-target="#myModal">выбрать</button>
                <?php } else { ?>
                    <button class="btn3 btn-success">выбрать</button>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>
<?php include ('footer.php') ?>
<script src='https://unpkg.com/react/umd/react.development.js'></script>
<script src='https://unpkg.com/react-dom/umd/react-dom.development.js'></script><script  src="./script.js"></script>
</body>
</html>