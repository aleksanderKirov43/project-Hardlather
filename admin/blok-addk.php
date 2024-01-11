<?php 
   session_start();

   include("../include/db_connect.php");
   
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
            
               
   
  
            <div>
                <h2 class="hit__names">Редактирование блока</h2>
            </div>
            <div>
                <div class="blok__kartochka" style = "border: none;">
                    
                    
                    <form action="../admin/create/add.php" metod="post">
      	
                        <div class="col-12"  style = " margin-bottom: 30px;">
                          <label class="form-label">Заголовок</label>
                          <input type="text" class="form-control" name="name" id="">
                          
                        </div>

                       <div class="col-12"  style = " margin-bottom: 30px; ">
                     <label for="formFile" class="form-label">Изображение</label> <br><br>
                     <input class="#"  type="hidden" name="MAX_FILE_SIZE" value="50000000"/>
                     <input class="#"  type="file" name="upload_image" />
                 </div> 
                    
                          <input class="hit__button" type="submit" id="#" value="Добавить"/>    	
                          
                    </form>
                    
                </div>
            </div>
    </section>


    <?php include('../include/footer.php') ?>


</body>
</html>