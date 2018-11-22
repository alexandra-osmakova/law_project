<?php
 error_reporting(-1);
 require "../database_controll/db.php";
 if($_SESSION['logged_user'])
 { ?>
<!DOCTYPE html>
<html>
<head>
	<title>Добавление статей | Информационный портал</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="../jscripts/tiny_mce/tiny_mce.js"></script>
</head>
<body style="background: #00a89c; background-image: url(../img/test-back.png);">
   <div class="container">
   <div class="row"><h2>Добавление и редактирование статей</h2>
   <div class="col-md-8 col-lg-8">
<p>Добавить статью</p>
<?php
  date_default_timezone_set('Europe/Moscow');
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
<form method="POST" action="admin.php" name="upload_form" enctype="multipart/form-data">
<div class="form-group">
 <p>Мета теги</p>
 <input class="form-control"  type="text" name="title" placeholder="Название страницы"><br>
 <input class="form-control"  type="text" name="description" placeholder="Описание страницы"><br>
 <p>Контент страницы</p>
 <input class="form-control"  type="text" name="offer" placeholder="Название статьи"><br>
 <textarea rows="5" class="form-control" type="text" id="txt1" name="content" placeholder="Текст статьи"></textarea><br>
 <p>Рекомендованный размер изображения: 2100х1400</p>
 <input type="hidden" name="MAX_FILE_SIZE" value="5242880" />
 <input name="uploaded_file" type="file" class="btn btn-default">
 <input class="btn btn-success" type="submit" name="getpost" value="Создать статью">
 </div>
</form>
</div>
</div>
</div>
<div class="container">
<div class="row">
<hr>
<p>Новости за все время</p>
<table class="table">
<thead>
 <th>Название статьи</th>
 <th>Дата</th>
 <th>Ссылка</th>
 <th>Действия</th>
</thead>
<tbody>
<?php
 $blogs = R::findAll('blogs');
 foreach ($blogs as $blog) {
   echo '<tr><td>'.$blog->title.'</td>';
   echo '<td>'.$blog->datetime.'</td>';
   echo '<td><a href="http://test.5186688.ru/article/article.php?id='.$blog->id.'" target="_blank" style="color:#fff;">Ссылка</a></td>';
   echo '<td><p><a href="editpost.php?id='.$blog->id.'" style="color:#fff;">РЕД.</a> | <a style="color:#fff;" href="delpost.php?id='.$blog->id.'">УДАЛИТЬ</a></p></td></tr>'; 
 }
?>
</tbody>
</table>
 </div>
 </div>
 <script type="text/javascript">
tinyMCE.init({
// General options
mode : "exact",
elements : "txt1",
theme : "advanced",
language : "ru",
plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
// Theme options
theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontselect,fontsizeselect",
theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,media,help,code,|,insertdate,inserttime,|,forecolor,backcolor",
theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,|,sub,sup,|,charmap,emotions,|,print,|,ltr,rtl,|,fullscreen",
theme_advanced_buttons4 : "",
theme_advanced_toolbar_location : "top",
theme_advanced_toolbar_align : "left",
theme_advanced_statusbar_location : "none",
theme_advanced_resizing : true,
theme_advanced_path : false,
 
// Example content CSS (should be your site CSS)
content_css : "/styles/mystyle.css",
});
</script>
 <?php }?>
 <?php
 if($_SESSION['logged_user']->login != 'admin')
 {
   echo '<div class="color:red">Вы не можете просматривать данную страницу!</div>';
 }
?>
</body>
</html>