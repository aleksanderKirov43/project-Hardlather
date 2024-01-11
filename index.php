<?php include('./include/db__connekt.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hard Leather - изделия из кожи ручной работы</title>
    <meta name="Description" content="Кожанные изделия ручной работы с неизмеримой ценностью, которые точно выделят вас среди окружения. Отличное решение для подарка или преобретения.">
    <meta name="keywords" content="изделия ручной работы на заказ">


    <link href="css/setka.css" rel="stylesheet" />
    <link href="css/reset.css" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
    
<link rel="shortcut icon" href="./img/favicon/favicon.ico" type="image/x-icon">



</head>

<body>

    <?php include('./include/menu.php') ?>

    <section class="container">
        <div class="blog__separation row">
            <div class="img__banner col-8"><img src="./img/banner.jpg"></div>
            <div class="col-4">
                <div class="separation__block">
                    <h2 class="separation__title">Изделия ручной работы на заказ</h2>
                    <h3 class="separation__txt">Вы можете выбрать любое изделие из каталога, или заказать индивидуальное
                        изделие</h3>
                    <form action="./pages/katalog.php">
                        <button class="separation__button">Каталог</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="menu row">

            <div class="col-2">
                <div class="menu__image">
                    <a href="./pages/pages-belt.php"><img class="menu__img" src="./img/MenuRemni.jpg"></a>
                </div>
                <div class="img__title">
                    <a href="./pages/pages-belt.php">Ремни</a>
                </div>
            </div>


            <div class="col-2">
                <div class="menu__image">
                    <a href="./pages/pages-wallet.php"><img class="menu__img" src="./img/MenuPortmone.jpg"></a>
                </div>
                <div class="img__title">
                    <a href="./pages/pages-wallet.php">Портмоне/кошельки</a>
                </div>
            </div>


            <div class="col-2">
                <div class="menu__image">
                    <a href="./pages/pages-bags.php"><img class="menu__img" src="./img/MenuSumki.jpg"></a>
                </div>
                <div class="img__title">
                    <a href="./pages/pages-bags.php">Сумки/Рюкзаки</a>
                </div>
            </div>

            <div class="col-2">
                <div class="menu__image">
                    <a href="./pages/pages-passport-cover.php"><img class="menu__img" src="./img/MenuOblojki.jpg"></a>
                </div>
                <div class="img__title">
                    <a href="./pages/pages-passport-cover.php">Обложки на паспорт</a>
                </div>
            </div>

            <div class="col-2">
                <div class="menu__image">
                    <a href="./pages/pages-cartholder.php"><img class="menu__img" src="./img/MenuCartholder.jpg"></a>
                </div>
                <div class="img__title">
                    <a href="./pages/pages-cartholder.php">Картхолдеры</a>
                </div>
            </div>

            <div class="col-2">
                <div class="menu__image">
                    <a href="./pages/pages-cartholder.php"><img class="menu__img" src="./img/MenuAksessuar.jpg"></a>
                </div>
                <div class=" img__title">
                    <a href="./pages/pages-accessories.php">Аксессуары</a>
                </div>
            </div>

        </div>
    </section>

    <section class="container">
        <h2 class="hit__name">Хиты продаж</h2>
        <div class="row">

            <div class="col-4">
                <div class="text__algin_center blok__kartochka">
                    <a href="./product card/pages-product cover passport.php"><img class="hit__img" src="./img/Hit buy/hit1.jpg"></a>
                    <div>
                        <a href="./product card/pages-product cover passport.php" class="hit__title">Обложка на паспорт
                            в
                            цвете
                            "Виски"</a>
                        <p class="hit__byu">1290 ₽</p>
                    </div>
                    <div class="button__inline">
                        <button class="hit__button"> В корзину </button>
                    </div>
                </div>
            </div>



            <div class="col-4">
                <div class="text__algin_center blok__kartochka">
                    <a href="./product card/pages-product bags.php"><img class="hit__img" src="./img/Hit buy/hit2.jpg"></a>
                    <div>
                        <a href="./product card/pages-product bags.php" class="hit__title">Сумка бананка из кожи
                            "Крейзи-Хорс"</a>
                        <p class="hit__byu">4990 ₽</p>
                    </div>
                    <div class="button__inline">
                        <button class="hit__button"> В корзину </button>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="text__algin_center blok__kartochka">
                    <a href="./product card/pages-product belt.php"><img class="hit__img" src="./img/Hit buy/hit3.jpg"></a>
                    <div>
                        <a href="./product card/pages-product belt.php" class="hit__title">Ремень <br> "Чёрный бык"</a>
                        <p class="hit__byu">3990 ₽</p>
                    </div>
                    <div class="button__inline">
                        <button class="hit__button"> В корзину </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <div class="text__algin_center blok__kartochka">
                    <a href="./product card/pages-product wallet.php"><img class="hit__img" src="./img/Hit buy/hit4.jpg"></a>
                    <div>
                        <a href="./product card/pages-product wallet.php" class="hit__title">Бифолд в цвете
                            "Коньяк"</a>
                        <p class="hit__byu">2490 ₽</p>
                    </div>
                    <div class="button__inline">
                        <button class="hit__button"> В корзину </button>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="text__algin_center blok__kartochka">
                    <a href="./product card/pages-product cartholder.php"><img class="hit__img" src="./img/Hit buy/hit5.jpg"></a>
                    <div>
                        <a href="./product card/pages-product cartholder.php" class="hit__title">Картхолдер
                            "Пола"</a>
                        <p class="hit__byu">1490 ₽</p>
                    </div>
                    <div class="button__inline">
                        <button class="hit__button"> В корзину </button>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="text__algin_center blok__kartochka">
                    <a href="./product card/pages-product bags green camuflage .php"><img class="hit__img" src="./img/Hit buy/hit6.jpg"></a>
                    <div>
                        <a href="./product card/pages-product bags green camuflage .php" class="hit__title">Сумка
                            бананка "Камуфляж"</a>
                        <p class="hit__byu">4990 ₽</p>
                    </div>
                    <div class="button__inline">
                        <button class="hit__button"> В корзину </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=" footer__form">
        <div class="container form__email justify__content__between row">

            <p class="form__emailTxt col-5">Подпишитесь на новостную рассылку, и Вы всегда будете в курсе новинок и
                скидок!</p>

            <label class="col-5 justify__content__between" for="email"><input class="form__emaile" type="email" placeholder="Введите Ваш email:" id="email" pattern=".+@gmail\.com" size="50" required /></label>
            <div class="col-2 form__buttonn">
                <a href='#'><button class="form__button">Подписаться</button></a>
            </div>
        </div>

    </section>

    <?php include('./include/footer.php') ?>


</body>

</html>