<?php
	$date = '';
	$title = '';
	$news = '';
	if ( count($_POST) > 0 )
	{
		$date = htmlspecialchars($_POST['date']);
		$title = htmlspecialchars($_POST['title']);
		$news = htmlspecialchars($_POST['news']);
		echo 'Спасибо, Ваши данные приняты и успешно импортированы на сайт!';
		
		//file_put_contents('check.php', $title .'<br>'. $date .'<br>'. $news);
		
		$date = htmlspecialchars_decode ('<div>' . '<h5>' . $date . '</h5>', ENT_QUOTES);
		$title = htmlspecialchars_decode ('<h4>' . $title . '</h4>', ENT_QUOTES);
		$title_min = htmlspecialchars_decode ('<h4>' . $title . '</h4>' . '<hr>' . '</div>', ENT_QUOTES);
		$news = htmlspecialchars_decode ('<p>' . $news . '</p>' . '<hr>' . '</div>', ENT_QUOTES);
		
		$fp = fopen('../news_min.php', 'a+');
		fwrite ($fp, $date);
		fwrite($fp, $title_min);
		fclose($fp);
		
		$fp = fopen('../news_max.php', 'a+');
		fwrite ($fp, $date);
		fwrite($fp, $title);
		fwrite($fp, $news);
		fclose($fp);
	}
?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="robots" content="index, follow" />
	<meta name="description" content="ДШИ №5 города Йошкар-Ола, детская школа искусств города Йошкар-Ола, детская музыкальная школа №5 города Йошкар-Ола" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Музыкальная школа №5 - ДШИ №5</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<link href="../style.css" rel="stylesheet">
	<link href="../favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
	<script src="../js/jquery.js"></script>
	<script src="../js/scripts.js"></script>
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
	<body>
		
		<div class="wrapper" style="width: 800px; display: inline-block; left: 50%; margin-left: 200px; padding-top: 50px;">
			<form class="form-horizontal" name="feedback" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<h3 class="text-center info">Новости для сайта ДШИ №5</h3>
				<div class="form-group">
					<input type="text" name="date" class="form-control" placeholder="Введите дату новости:">
				</div>
				<div class="form-group">
					<input type="text" name="title" class="form-control" placeholder="Введите заголовок новости:">
				</div>
				<div class="form-group">
					<input type="text" name="news" class="form-control" placeholder="Введите текст новости:"></textarea>
				</div>
				<div class="form-group">
					<button type="submit" name="send" class="btn btn-primary">загрузить новость на сайт</button>
				</div>
			</form>			
		</div>
	</body>
</html>	