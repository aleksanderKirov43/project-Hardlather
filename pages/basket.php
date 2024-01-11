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
        <div class="row" style="margin-top: 84px">
            <div class="col-6">
                <h2 class="title__basket">Корзина</h2>

                <?php

                $sql = "SELECT * FROM `tovar` ";
                $res = $mysqli->query($sql);

                if ($res->num_rows > 0) {
                    while ($resArticle = $res->fetch_assoc()) {
                ?>

                      

                            <div id="<?= $resArticle['id'] ?>" style="display:none" class="find basket basket__order row basket__line">
                                <img class="basket__img col-6" src="../img/Remni/<?= $resArticle['img'] ?>">

                                <div class="basket__orders col-6">
                                    <div class="row">
                                        <div class="col-6 backet__txt">Наименование товара:</div>
                                        <div class="col-6 backet__txt"><?= $resArticle['name'] ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6 backet__txt">Количество:</div>
                                        <div class="basket__counter col-6">
                                            <div id="count-<?= $resArticle['id'] ?>">0</div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6 backet__txt">Цена: </div>
                                        <div class="col-6 backet__txt"><?= $resArticle['price'] ?> рублей</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6 backet__txt">Цвет: </div>
                                        <div class="col-6 backet__txt">Коричнвый</div>
                                    </div>
                                    <div>
                        
                        <button onclick="delit(<?= $resArticle['id'] ?>)"> Удалить из корзины</button>
                        
            </div>
        </div>
        </div>
        </div>
        </div>



<?php    }
                } ?>
<div class="col-6 basket__line basket__cart">
    <h2 class="title__basket">Обзор заказа</h2>
    <div class="basket__block">
        <div class="basket__block__price">
            <p class="price__txt">Количество товаров:</p>
            <div class="basket__block__line"></div>
            <p class="price__txt">Стоимость заказа:</p>
        </div>
        <button class="hit__button basket__button"> Оформить заказ</button>
    </div>
</div>
</div>
    </section>




    <section class="container">

        <div class="footer__contact">
            <p class="contact__adress">Укажите адрес доставки:</p>
            <label class="" for=""><input class="contact__input" type="text" placeholder="Адрес доставки:" id="" pattern="" size="50" required /></label>
        </div>

        <div>
            <p class="contact__adress">Укажите контактный телефон:</p>
            <label class="" for=""><input class="contact__input" type="tel" placeholder="Номер телефона:" id="" pattern="+7()" size="50" required /></label>
        </div>

        <p class="contact__text">После оформлени заказа мы свяжемся с Вами в течение 15 минут!</p>
    </section>

    <?php include('../include/footer.php') ?>
    <script src="../JS/kard.js"></script>
    <script src="../JS/delete.js"></script>
</body>

</html>