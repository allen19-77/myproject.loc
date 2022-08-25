<?php
require_once __DIR__ . '/../model/Database.php';
require_once __DIR__ . '/../model/Post.php';

$db = new \model\Database();


if (!$db->dbh) {
	echo 'Что то пошло не так!';
} else {
    $postOne = new Post($_POST['heading'], $_POST['message']);

    $postOne->isHeaderValid();

    $postOne->isMessageValid();

	if (!empty($postOne->errors))
	{
        foreach ($postOne->errors as $error)
        {
            echo $error . "<br>\r\n";
        }
        include_once __DIR__ . '/../view/note.php';
    } else
    {
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
