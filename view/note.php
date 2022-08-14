<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../style.css">
	<title>note</title>
</head>

<body>
	<form name="form" action="../controller/noteController.php" method="post" >
		<h2>Заметки</h2>

		<p>
		<div class="titles">Тема сообщения</div>
		<input  name="heading" type="text" />
		</p>

		<p>
		<div >Текст сообщения:</div><textarea name="message" cols="22" rows="5">
			</textarea>
		</p>
		<p>
			<input class="submit" value="Отправить" type="submit" />
		</p>
	</form>
</body>

</html>