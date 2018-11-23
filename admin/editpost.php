<?php
  error_reporting(0);
  require "../database_controll/db.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>Панель управления</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Marmelad" rel="stylesheet">
</head>
<body style="background: #00a89c; background-image: url(../img/test-back.png);">
 <div class="container" style="margin-top: 37px;">
  <p><a href="admin.php">Назад</a></p>
 
 <form method="POST" action="editpost.php">
	<div class="form-group">
	 <input class="form-control"  type="text" name="title" value="<?php echo $blog->title ?>"><br>
	 <textarea rows="5" class="form-control" type="text" name="content"><?php echo nl2br($blog->content) ?></textarea><br>
     <p>Рекомендованный размер изображения: 2100х1400</p>
     <input type="hidden" name="MAX_FILE_SIZE" value="5242880" />
     <input name="uploaded_file" type="file" class="btn btn-default">
	 <input class="btn btn-default" type="submit" name="editpost" value="Редактировать">
	 </div>
</form>

<?php
  $blog = R::load('blogs', $_GET['id']);
  date_default_timezone_set('Europe/Moscow');
  if(isset($_POST['editpost']))
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
    $UploadDir = "../uploads/";
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
  $blog->title = $_POST['title'];
  $blog->content = $_POST['content'];
  $blog->datetime = date('Y-m-d H:i:s');
  $blog->img = $NewFilePatch;
  R::store( $blog );
  	echo '<div style="color: green;"><p><strong>Запись успешно отредактирована</strong></p></div>';
  }
 ?>
 </div>
</body>
</html>