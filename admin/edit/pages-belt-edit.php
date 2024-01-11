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
        <h2 class="hit__names">Ремни</h2>
        <div class="row">

    <div class="col-4">
        <div class="text__algin_center blok__kartochka">
            <a href="./pages-product_belt-2edit.php"><img class="hit__img"
                    src="../img/Remni/1.jpg"></a>
            <div>
                <a href="./pages-product_belt-2edit.php" class="hit__title">
                    Ремень "Компас"</a>
            </div>
            <div class="button__inline">
                <button onclick="window.location='http:/admin/blok-add.php'" class="hit__button"> Редактировать</button>
                <button class="hit__button"> Удалить </button>
            </div>
        </div>
    </div>



    <div class="col-4">
        <div class="text__algin_center blok__kartochka">
            <a href="../product card/pages-product belt.php"><img class="hit__img"
                    src="../img/Remni/2.jpg"></a>
            <div>
                <a href="../product card/pages-product belt.php" class="hit__title">Ремень "Чёрный бык"</a>
            </div>
            <div class="button__inline">
                <button class="hit__button"> Редактировать</button>
                <button class="hit__button"> Удалить </button>
            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="text__algin_center blok__kartochka">
            <a href="../product card/pages-product belt-3 .php"><img class="hit__img"
                    src="../img/Remni/3.jpg"></a>
            <div>
                <a href="../product card/pages-product belt-3 .php" class="hit__title">Ремень "Лев"</a>
            </div>
            <div class="button__inline">
                <button class="hit__button"> Редактировать</button>
                <button class="hit__button"> Удалить </button>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-4">
        <div class="text__algin_center blok__kartochka">
            <a href="../product card/pages-product belt-4.php"><img class="hit__img"
                    src="../img/Remni/4.jpg"></a>
            <div>
                <a href="../product card/pages-product belt-4.php" class="hit__title">Ремень "Земля"</a>
            </div>
            <div class="button__inline">
                <button class="hit__button"> Редактировать</button>
                <button class="hit__button"> Удалить </button>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="text__algin_center blok__kartochka">
            <a href="../product card/pages-product belt-5.php"><img class="hit__img"
                    src="../img/Remni/5.jpg"></a>
            <div>
                <a href="../product card/pages-product belt-5.php" class="hit__title">Ремень "Изумруд"</a>
            </div>
            <div class="button__inline">
                <button class="hit__button"> Редактировать</button>
                <button class="hit__button"> Удалить </button>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="text__algin_center blok__kartochka">
            <a href="../product card/pages-product belt-6.php"><img class="hit__img"
                    src="../img/Remni/6.jpg"></a>
            <div>
                <a href="../product card/pages-product belt-6.php" class="hit__title">Ремень "Вечность"</a>
            </div>
            <div class="button__inline">
                <button class="hit__button"> Редактировать</button>
                <button class="hit__button"> Удалить </button>
            </div>
        </div>
    </div>
    
        <div class="col-4">
        <div class="text__algin_center blok__kartochka">
            <a href="../blok-add.php"><img style="height: auto;" class="hit__img"
                    src="../img/add.png"></a>
            <div class="button__inline">
                <button onclick="window.location='http:/admin/blok-add.php'" class="hit__button"> Добавить </button>
            </div>
        </div>
    </div>
</div>
</section>

<?php include('../include/footer.php') ?>

</body>

</html>