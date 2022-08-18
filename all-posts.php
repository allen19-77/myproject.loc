<?php

require_once __DIR__ . './model/Database.php';
require_once __DIR__ . './model/Post.php';

$db = new \model\Database();

$postOne = new Post($_POST['heading'],$_POST['message']);



$sql = 'SELECT * from posts ';
$stmt = $db->dbh->query($sql);
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

