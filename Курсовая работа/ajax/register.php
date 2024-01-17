<?php
require '../lib.php';
$result = [
    'success' => 0,
    'message' => ''
];
if (isset($_GET['phone'])
    && $_GET['phone']
    && isset($_GET['password'])
    && $_GET['password']
    && isset($_GET['appeal'])
    && $_GET['appeal']
    && isset($_GET['sex'])
    && $_GET['sex']
    && isset($_GET['forwho'])
    && $_GET['forwho']) {

    $phone = $_GET['phone'];
    $appeal = $_GET['appeal'];
    $sex = $_GET['sex'];
    $password = $_GET['password'];
    $forwho = $_GET['forwho'];
    $password = md5($password);

    $queryResult = Database::$db->query("SELECT * FROM users WHERE phone = '$phone'");
    if ($queryResult->num_rows)
    {
        $result['message'] = 'Профиль с указанной почтой или телефоном уже существует';
    }
    else
    {
        $queryResult = Database::$db->query("INSERT INTO users (sex, appeal, phone, forwho, password) VALUES ('$sex', '$appeal', '$phone','$forwho', '$password')");
        if ($queryResult)
        {
            $result['success'] = 1;
        }
    }
}
else
{
    $result['message'] = 'Заполнены не все обязательные поля. Заполните и попробуйте еще раз.';
}

echo json_encode($result);
?>