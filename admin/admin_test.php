<? 
error_reporting(-1);
require "../database_controll/db.php";
date_default_timezone_set('Europe/Moscow');
if($_SESSION['logged_user'])
{
	if(isset($_POST['getpost']))
	{
    	// Максимально допустимый размер загружаемого файла - 5Мб
    	$MaxFileSizeInBytes = 5242880;
    	// Разрешение расширения файлов для загрузки
		$AllowFileExtension = array('jpg', 'JPG', 'png', 'jpeg', 'gif');
		// Оригинальное название файла
    	$FileName = $_FILES['uploaded_file']['name'];
    	// Полный путь до временного файла
    	$TempName = $_FILES['uploaded_file']['tmp_name'];
    	// Папка где будут загружатся файлы
    	$UploadDir = "../database_controll/uploads/";
    	// Полный путь к новому файлу в папке сервера
    	$NewFilePatch = $UploadDir.$FileName;
    		if($FileName) {
        		// Проверка если расширение файла находится в массиве доступных
        		$FileExtension = pathinfo($FileName, PATHINFO_EXTENSION);
        		if(!in_array($FileExtension, $AllowFileExtension)) {
            		echo "Файлы с расширением {$FileExtension} не допускаются";
        		}
        		else {
            		// Проверка размера файла
            		if(filesize($TempName) > $MaxFileSizeInBytes) {
                		echo "Размер загружаемого файла превышает 5МБ";
            		}
            		else {
                		// Проверяем права доступа на папку
                		if(!is_writable($UploadDir)) {
                    		echo "Папка ".$UploadDir." не имеет прав на запись";
                		}
                		else {
                    		// Копируем содержимое временного файла $TempName и создаем нового в папке сервера
                    		$CopyFile = copy($TempName, $NewFilePatch);
                    		if(!$CopyFile) {
                        		echo "Возникла ошибка, файл не удалось загрузить!";
                    		}
                    		else {
                            	echo "Файл успешно загружен!<br />Ссылка на файл: <a href='{$NewFilePatch}'>{$NewFilePatch}</a>";
                        	}
                		}
            		}
        		}
    	}    
	$blog = R::dispense('blogs');
	$blog->title = $_POST['title'];
	$blog->descr = $_POST['description'];
	$blog->offer = $_POST['offer'];
	$blog->content = $_POST['content'];
	$blog->datetime = date('Y-m-d H:i:s');
	$blog->img = $NewFilePatch;
	R::store($blog);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Администратор | Юрбизнесгруп</title>
	<meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width, user-scalable=no">
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT:400,700&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="../img/favicon.png">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/fonts.css">
	<link rel="stylesheet" type="text/css" href="../css/animate.css">
	<link rel="stylesheet" type="text/css" href="../css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">	
</head>
<body> 
	
	<div class="navbar">
		<div class="container">
			<div class="navbar-top">
				<div class="nav-logo"><a class="nav-href" href="/">ООО «ЮРБИЗНЕСГРУП»</a></div>
				<div class="city">Ваш город:
					<select class='select_city'>
						<option class = 'select_city__option' value='moscow'>Москва</option>
						<option class = 'select_city__option' value='voronezh'>Воронеж</option>
						<option class = 'select_city__option' value='cheboksary'>Чебоксары</option>
						<option class = 'select_city__option' value='kazan'>Казань</option>
						<option class = 'select_city__option' value='ulyanovsk'>Ульяновск</option>
						<option class = 'select_city__option' value='samara'>Самара</option>
						<option class = 'select_city__option' value='izhevsk'>Ижевск</option>
						<option class = 'select_city__option' value='ufa'>Уфа</option>
						<option class = 'select_city__option' value='naberezhnyeChelny'>Набережные Челны</option>
						<option class = 'select_city__option' value='perm'>Пермь</option>
					</select>
				</div>
				</div>
		        <div class="right-block">
					<div class="nav-number"><a class="nav_href_tel" href="tel: +7(843)518-89-89"><i class="fa fa-phone"></i><span class='tel_number'>+7 (843) 518-89-89</span> </a></div>
		            <div class="search-btn">
		              <a class="search-ico"><i class="fa fa-search"></i></a>
		            </div>
		        </div>
			</div>
			<hr />
			<div class="navbar-botom">
				<ul>
					<li><a href="../about">О нас</a></li>
					<li><a href="../services">Услуги</a></li>
					<li><a href="../article">Статьи</a></li>
					<li><a href="../contact">Контакты</a></li>
					<li><a href="../signup">Регистрация</a> | <a href="../signin">Вход</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<section id="admin_section">
		<div class="col-md-8 admin_articles">
		<h1>Все статьи</h1>
		<br>
		<h3>Поиск по статьям</h3>
		
		<div class="admin_section_item">
			<input type="search" placeholder="Поиск по статьям...">
			<a href="add_post.php" class="add-btn">+ Добавить статью</a>
		</div>
		
		<div class="articles">
			<?php
			$blogs = R::findAll('blogs');
			foreach ($blogs as $blog) {
				
				$view_url = "../article/article.php?id=" . $blog->id;
				$edit_url = "editpost.php?id=" . $blog->id;
				$delete_url = "delpost.php?id=" . $blog->id;
				
				echo "<div class='col-md-6'>";
				echo "<b>" . $blog->title . "</b>";
				echo "<h5>" . $blog->datetime . "</h5>";
				echo "<div class='edit-buttons'><a href='" . $view_url . "'>Посмотреть</a> | <a href='" . $edit_url . "'>Редактировать</a> | <a href='" . $delete_url . "'>Удалить</a></div></div>";
			}
			?>
		</div>
		<section id="articles">
		<div class="number">
			<ul class="article-number" style="top: 0; margin-top: 2em; display: flex">
				<li><</li>
				<li>1</li>
				<li>2</li>
				<li>3</li>
				<li>...</li>
				<li>198</li>
				<li>199</li>
				<li>200</li>
				<li>></li>
			</ul>
		</div>
		</section>
	</section>
	
<section id="footer">
	<div class="container-fluid">
		<div class="col-md-12">
			<ul class="footer-nav hidden-xs">
	            <li><a href="/">Главная</a></li>
	            <li><a href="/about/">О нас</a></li>
	            <li><a href="/services/">Услуги</a></li>
	            <li><a href="/article/">Статьи</a></li>
	            <li><a href="/contact/">Контакты</a></li>
            </ul>
        </div>
        <div class="col-md-12 footer-links">
        	<h4>Подписывайтесь на нас 
        		<hr class="visible-xs" style="border: 0 !important; margin: 5px 0" />
        		<a href="#"><i class="fa fa-facebook" area-hidden="true"></i></a>
        		<a href="#"><i class="fa fa-twitter" area-hidden="true"></i></a>
        		<a href="#"><i class="fa fa-vk" area-hidden="true"></i></a>
        		<a href="#"><i class="fa fa-telegram" area-hidden="true"></i></a>
        	</h4>
        </div>
        <div class="col-md-12">
        	<div class="col-md-4">
        		<h3><a class="nav-link" href="#main">&copy; 2018 ООО «ЮРБИЗНЕСГРУП»</a></h3>
        	</div>
        	<div class="col-md-4">
        		<h3><a href="#">Политика конфиденциальности</a></h3>
        	</div>
        	<div class="col-md-4">
        		<h3>Разработка сайтов <a style="color: #00b4f7" href="http://itkluch.ru">ITKluch.ru</a></h3>
        	</div>
        </div>
    </div>
</section>
</body>
</html>
<? } ?>
<?php
 if($_SESSION['logged_user']->login != 'admin')
 {
   echo '<div style="color: red">Вы не можете просматривать данную страницу!</div>';
 }
?>