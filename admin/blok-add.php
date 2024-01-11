<?php 
   session_start();

   include("./include/db_connect.php");

   if (isset($_POST["submit_add"]))
    {

      $error = array();
      if (count($error))
       {         
            $_SESSION['message'] = "<p id='form-error'>".implode('<br />',$error)."</p>";
       }else
       {
      	
$name = $_POST['name'];
$img = $_POST['img'];



    
	$query ="INSERT INTO catalog (NULL, `name`, `img` ) VALUES 
	
    ( '".mysqli_real_escape_string($mysqli,$name)."', 
    '".mysqli_real_escape_string($mysqli,$img)."'
    )"; 
    

$result = mysqli_query($mysqli, $query) or die("Ошибка" . mysqli_error($mysqli)); 

if ($result == 'true') {
	
	}
else {echo "Ваши данные не добавлены";}
   
      $_SESSION['message'] = "<p id='form-success'>Данные успешно добавлены!</p>";
      
      $id = mysqli_insert_id($mysqli);
      if (empty($_POST["uploads_images"]))
      {        
      include("../actions/blog_image.php");
      unset($_POST["uploads_images"]);           
      }  
 } }  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hard Leather</title>

    <link href="../css/setka.css" rel="stylesheet" />
    <link href="../css/reset.css" rel="stylesheet" />
    <link href="../css/main.css" rel="stylesheet" />
    
    <link rel="shortcut icon" href="../img/favicon/favicon.ico" type="image/x-icon">

</head>
<body>
    
 <?php include('../include/menu.php') ?>


        <section class="container">
            <div >
                <h2 class="hit__names">Редактирование блока</h2>
            </div>
            <div>
                <div class="blok__kartochka" style = "border: none;">
                    <form enctype="multipart/form-data" method="post">
      	
                        <div class="col-12"  style = " margin-bottom: 30px;">
                          <label class="form-label">Заголовок</label>
                          <input type="text" class="form-control" name="name" id="">
                          
                        </div>

<!--                         <div class="col-12"  style = " margin-bottom: 30px; ">
    <label class="form-label">Текст</label>
    <textarea class="#" name="description" id=""></textarea>
</div> -->

                        <div class="col-12"  style = " margin-bottom: 30px; ">
                            <label for="formFile" class="form-label">Изображение</label> <br>
                            <input class="#"  type="file" name="uploads_images" />
                        </div>
                        
<!--                         
<div class="col-12" style = " margin-bottom: 30px; ">
    <label  class="form-label">Строимость</label> <br>
    <input class="#"  type="price" name="price" value=""/>
</div> -->
                        
                          <input class="hit__button" type="submit" id="submit_form" name="submit_add" value="Добавить"/>    	
                          
                    </form>
                </div>
            </div>
    </section>
    
    <?php
 
$mysqli = new mysqli('localhost', 'regionmp_hl', 'm2*AGWYA', 'regionmp_hl');
 
if ($mysqli->connect_error) {
    die('Ошибка подключения (' . $mysqli->connect_errno . ') '
     . $mysqli->connect_error);
}
echo '<p>Соединение установлено... ' . $mysqli->host_info . "</p>";
$result = $mysqli->query("SHOW TABLES;");
while ($row = $result->fetch_row()) {
    echo "<p>Таблица: {$row[0]}</p>";
}
echo 'Версия MYSQL сервера: ' . $mysqli->server_info . "\n";
$mysqli->close();
 
?>


    <?php include('../include/footer.php') ?>


</body>
</html>