<?php
	if(isset($_POST["send"])) {
		$message = "У Вас новый вопрос с сайта ДШИ №5";
		$to = "lib-5@yandex.ru";
		//$to = "denis1234567@mail.ru";
		$from = "send@muz-shkola.ru";
		$subject = "У Вас новый вопрос с сайта ДШИ №5";
		
		$name = htmlspecialchars ($_POST["name"]);
		$tel = htmlspecialchars ($_POST["tel"]);
		$email = htmlspecialchars ($_POST["email"]);
		$textarea = htmlspecialchars ($_POST["textarea"]);
		
		$text = '<br>'.'<br>'.'<b>'.'Имя: '.'</b>'.$name.'<br>'.'<b>'.'Телефон: '.'</b>'.$tel.'<br>'.$email.'<br>'.'<b>'.'Комментарии: '.'</b>'.$textarea;
		$message.= $text; 
		$subject = "=?utf-8?B?".base64_encode($subject)."?=";
		$headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/html; charset=utf-8\r\n";
		if (mail ($to, $subject, $message, $headers)) {
			echo '<script>window.location.href = "/thank-you.html"</script>';
		}
	}
?>	