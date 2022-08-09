<?php
require __DIR__ . '/../model/Database.php';

$db = new \model\Database();


if (!$db->dbh) {
	echo 'Что то пошло не так!';
} else {
	$heading = $_POST['heading'];
	$message = $_POST['message'];
	$headingLength = mb_strlen($heading);
	$messageLength = mb_strlen($message);

	if ($headingLength < 2 || $headingLength > 20) {

		echo 'Заголовок должен иметь не меньше 2 символов и не меньше 20 символов';
		include_once 'index.html';

	} else {
		if ($messageLength < 10 || $messageLength > 250) {

			echo 'Текст должен иметь не меньше 10 символов и не меньше 250 символов';
			include_once 'index.html';

		} else {

		    $sql = 'INSERT INTO posts (id, heading, message) 
            VALUES (NULL, :heading, :message)';
			$stmt = $db->dbh->prepare($sql);
			$result = $stmt->execute([
				'heading' => $heading,
				'message' => $message,
			]);
			echo 'Ваш пост сохранен';
            include_once __DIR__ . '/../all-posts.php';
		}
	}
}
