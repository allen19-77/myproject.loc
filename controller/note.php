<?php


$dbh = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');

if (!$dbh) {
	echo 'Что то пошло не так!';
} else {
	$heading = $_POST['heading'];
	$message = $_POST['message'];


	if (mb_strlen($heading) < 2 || mb_strlen($heading) > 20) {

		echo 'Заголовок должен иметь не меньше 2 символов и не меньше 20 символов';
		include_once 'index.html';

	} else {
		if (mb_strlen($message) < 10 || mb_strlen($message) > 250) {

			echo 'Текст должен иметь не меньше 10 символов и не меньше 250 символов';
			include_once 'index.html';

		} else {

		    $sql = 'INSERT INTO posts (id, heading, message) 
            VALUES (NULL, :heading, :message)';
			$stmt = $dbh->prepare($sql);
			$result = $stmt->execute([
				'heading' => $heading,
				'message' => $message,
			]);
			echo 'Ваш пост сохранен';
            include_once __DIR__ . '/../all-posts.php';
		}
	}
}
