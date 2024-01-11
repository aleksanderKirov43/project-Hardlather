<?php include('../include/db__connekt.php') ?>

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

        <?php

$sql="SELECT * FROM `tovar` WHERE `id` = '2'";
		$res = $mysqli -> query($sql);
		
		if ($res -> num_rows > 0) {
			
			$resArticle = $res -> fetch_assoc()

?>


            <div id='2' class="itemId page justify__content__center row">
                <div class="col-6">
                    <img onclick="imageZoom('ImgClick')" class="page__img" src="../img/Remni/<?= $resArticle['img'] ?>" id="ImgClick">
                    <img onclick="imageZoom('ImgClickbk1')" class="img__plus" src="../img/Remni/belt compas/bk1.jpg" id="ImgClickbk1">
                    <img onclick="imageZoom('ImgClickbk2')" class="img__plus" src="../img/Remni/belt compas/bk2.jpg" id="ImgClickbk2">
                    <img onclick="imageZoom('ImgClickbk3')" class="img__plus" src="../img/Remni/belt compas/bk3.jpg" id="ImgClickbk3">
                </div>

                <div class="col-4">
                    <h1 class="page__title"><?= $resArticle['name'] ?></h1>

                    <h2 class="page__txt"><?= $resArticle['description'] ?></h2>



                <p class="page__colorTxt">Выбирите цвет:</p>
                <label class="radio-label">
                    <input type="radio" name="color" value="" id="">
                    Коричневый
                </label>

                <label class="radio-label">
                    <input type="radio" name="color" value="" id="">
                    Чёрный
                </label>

                <div>
                    <div class="rub">
                        <p class="buy__rub"><?= $resArticle['price']?>₽</p>
                        <div class="counter">
                            <button class="in__btn" id="increment-btn">+</button>
                            <div class="counter__value" id="counter-value">0</div>
                            <button class="de__btn" id="decrement-btn">-</button>
                        </div>
                    </div>

                </div>

                <?php    }
                ?>


<button onclick="KlickButton('addBuy')" id="addBuy" class="hit__button"> Добавить в корзину </button>
                </div>
            </div>
    </section>



    <?php include('../include/footer.php') ?>



    <div id='modal'>
        <div onclick="closeModal()" id='modal_img'>
        </div>
    </div>
    <script src="../JS/klickimg.js"> </script>
    <script src="../JS/schetchik.js"></script>
    <script src="../JS/button.js"></script>
</body>

</html>