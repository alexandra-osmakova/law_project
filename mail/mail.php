<?php
//header("Refresh:5;url=");
 if(isset($_POST['submit'])) {
 	$name = $_POST['name'];
 	$phone = $_POST['phone'];
 	$usluga = $_POST['usluga'];
 	$mail = $_POST['mail'];
 	$to = "parkour20_99@mail.ru";
 	$subject = 'Заявка с сайта Юрбизнесгруп';
 	
 	$msg = "<html>
				<h1 style=font-size:20px>Пришла заявка с сайта</h1>
				 <hr style=width:250px;margin-left:0 />
				Имя: $name
				 <hr style=width:250px;margin-left:0 />
				Телефон: $phone
				 <hr style=width:250px;margin-left:0 />
				Почта: $mail
				 <hr style=width:250px;margin-left:0 />
				Услуга: $usluga
				 <hr style=width:250px;margin-left:0 />
			</html>";
		
	$headers  = "Content-type: text/html; charset=UTF-8 \r\n";
 	$headers .= "From: no-reply@ubiz.ru";
 	mail($to, $subject, $msg, $headers);
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Отправка заявки...</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="fonts/phenomena/phenomena.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="shortcut icon" href="http://xn--1-otbg.xn--p1ai/wp-content/uploads/2018/07/repair.png">
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
</head>
<body>
	<body>
	<style type="text/css">
		body {
			background: url(http://xn--1-otbg.xn--p1ai/wp-content/uploads/2018/07/paper-100.jpg);
			background-size: cover;
			height: 768px;
		}
		#goga {
			padding:250px 0;
			color: #fff;
		}
		@media screen and (max-width: 480px) {
			body {
				background: url(../images/paper-mob-100.jpg);
				height: 100%;
			}
			#goga {
				padding: 150px 0;
			}
		}
	</style>
	<div class="container" id="goga">
		<div class="row">
			<div class="col-md-6 text-center">
				<img src="../img/favicon.png" />
			</div>
			<div class="col-md-5 text-center">
				<h1>Успешно!</h1>
				<h3>Ваша заявка уже летит на нашу почту</h3>
				<br>
				<p>Вы будете перенаправлены на главную через 5 секунд...</p>
			</div>
		</div>
	</div>	
</body>
</html>