<?php
require_once __DIR__ . '/../model/Database.php';
require_once __DIR__ . '/../model/Post.php';

$db = new \model\Database();


if (!$db->dbh) {
	echo 'Что то пошло не так!';
} else {
    $postOne = new Post($_POST['heading'], $_POST['message']);
	$headingLength = mb_strlen($postOne->heading);
	$messageLength = mb_strlen($postOne->message);

	if ($headingLength < 2 || $headingLength > 20) {

		echo 'Заголовок должен иметь не меньше 2 символов и не меньше 20 символов';
		include_once '../view/note.php';

	} else {
		if ($messageLength < 10 || $messageLength > 250) {

			echo 'Текст должен иметь не меньше 10 символов и не меньше 250 символов';
			include_once '../view/note.php';

		} else {

		    $sql = 'INSERT INTO posts (id, heading, message) 
            VALUES (NULL, :heading, :message)';
			$stmt = $db->dbh->prepare($sql);
			$result = $stmt->execute([
				'heading' => $postOne->heading,
				'message' => $postOne->message,
			]);
			echo 'Ваш пост сохранен';
            include_once __DIR__ . '/../all-posts.php';
		}
	}
}
