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
        <div class="page justify__content__center row">
            <div class="col-6">
                <img class="page__img " src="../img/Hit buy/hit2.jpg">

                <img class="img__plus" src="../img/bags/bags horse/cb1.jpg">
                <img class="img__plus" src="../img/bags/bags horse/cb2.jpg">
                <img class="img__plus" src="../img/bags/bags horse/cb3.jpg">
                <img class="img__plus" src="../img/bags/bags horse/cb4.jpg">
            </div>

            <div class="col-4">
                <h1 class="page__title">Сумка бананка из кожи "Крейзи-Хорс"</h1>

                <h2 class="page__txt">

                    Сумку - бананку Hard Leather с регулируемым ремнем можно носить на поясе, на плече, и за спиной.
                    Поясная сумка бананка мужская изготовлена из натуральной телячьей кожи высокого класса. Ремень на
                    сумке регулируется, так же изготовлен из натуральной телячьей кожи..

                    Кожа оработана водоотталкивающей эмуьсией, а торцы дополнительно зашлифованы и обработаны воском,
                    что позволяет сумке сохранять свою форму на долгую перспективу даже в агрессивной среде пользования
                    Размеры – 27 см - ширина, 5 см- глубина, 14 см - выcота

                </h2>

                <div>
                </div>
                <div>
                    <p class="page__colorTxt">Выбирите цвет:</p>
                    <label class="radio-label">
                        <input type="radio" name="color" value="" id="">
                        Коричневый
                    </label>

                    <label class="radio-label">
                        <input type="radio" name="color" value="" id="">
                        Красный камуфляж
                    </label>

                    <label class="radio-label">
                        <input type="radio" name="color" value="" id="">
                        Зеленый камуфляж
                    </label>
                    <div>
                        <div class="rub">
                            <p class="buy__rub"> 4990 ₽ </p>
                            <div class="counter">
                                <button class="in__btn">+</button>
                                <div class="counter__value">0</div>
                                <button class="de__btn">-</button>
                            </div>
                        </div>

                    </div>
                </div>

                <button onclick="KlickButton('addBuy')" id="addBuy" class="hit__button"> Добавить в корзину </button>
    </section>



    <?php include('../include/footer.php') ?>

</body>

</html>