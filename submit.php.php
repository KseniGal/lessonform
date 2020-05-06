<?php


		$theme = 'Новое сообщение';

		$letter = 'данные сообщения:\r\n';
		$letter .='Name: '.$_POST['name'].' \r\n';
		$letter .='Email: '.$_POST['email'].' \r\n';

		mail('ksyu.s2109@gmail.com', $theme, $letter);

?>