<?php
require '../lib.php';
$result = [
    'success' => 0,
    'message' => ''
];
if (isset($_GET['namepsy'])
    && $_GET['namepsy']
    && isset($_GET['mark'])
    && $_GET['mark']
    && isset($_GET['text'])
    && $_GET['text']) {

    $namepsy = $_GET['namepsy'];
    $mark = $_GET['mark'];
    $text = $_GET['text'];


        $queryResult = Database::$db->query("INSERT INTO remarks (namepsy , mark, text) VALUES ('$namepsy', '$mark', '$text')");
        if ($queryResult)
        {
            $result['success'] = 1;
        }
}
else
{
    $result['message'] = 'Заполнены не все обязательные поля. Заполните и попробуйте еще раз.';
}

echo json_encode($result);
?>