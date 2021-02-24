<?php

	$name = $_POST['name'];
	$email = $_POST['email'];
	$purshase_text = $_POST['purshase_text'];
	$response = "";

	$email = htmlspecialchars($email);
	$email = urldecode($email);
	$email = trim($email);
	$purshase_text = htmlspecialchars($purshase_text);
	$purshase_text = urldecode($purshase_text);
	$purshase_text = trim($purshase_text);

	if (isset($name) && isset($email) && isset($purshase_text) || $purshase_text != "" && $name != "" && $email != "")
	{

		$toEmail = "XXX@XXX.XX";// кому отправить
		$fromEmail = "bfsiberia@bk.ru";//кто отправил
		// $fromEmail = "master@XXX.ru";
		$mailTitle = "Сообщение с сайта БФ 'Сибирь'";
		$message = "Name: ".$name. "\r\nE-mail: ".$email. "\r\n\r\nСообщение: ".$purshase_text;

		if (mail($toEmail, $mailTitle, $message,'From: '.$fromEmail))
		{ 
		  $response .= "</p><h4>Ваше сообщение успешно отправлено!</h4>"; 
		} else { 
		  $response .= "</p><h4>Ошибка отправки сообщения! Пожалуйста повторите позже!</h4>"; 
		}
	} else {
		$response .= "</p><h4>Ошибка! Отсутствует e-mail или текст сообщения! Пожалуйста повторите позже!</h4>";
	}
	echo $response;

?>



