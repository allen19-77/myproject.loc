<?php

$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');

$heading = $_POST['heading'];
$message = $_POST['message'];


$sql = 'SELECT * from posts ';
$stmt = $pdo->query($sql);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
/*var_dump($rows);*/


foreach ($rows as $key => $item) {

    echo 'заголовок- ' ;
    var_dump($rows[$key]['heading']) . '<br>';

    echo 'текст- ';
    var_dump($rows[$key]['message']) . '<br>';
}

/*var_dump($rows[0]['password']);
echo '</pre>';
var_dump(count($rows));*/

