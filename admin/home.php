<?php include('../include/db__connekt.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/setka.css">
    <link rel="stylesheet" href="../css/main.css">
    
    <link rel="shortcut icon" href="../img/favicon/favicon.ico" type="image/x-icon">


</head>
<body>
    
<?php include('../include/menu.php') ?>

<div><p class="massage__admissions">Приветствую тебя, Администратор. Теперь ты можешь редактировать, добавлять, удалять блоки на любой странице.
</p></div>

    <section class="container">
        <h2 class="hit__names">Редактирование блоков</h2>
        <div class="row">
            <div class="col-4">
                <div class="text__algin_center blok__kartochka">
                    <a href="./edit/pages-belt-edit.php"><img style="cursor: pointer;" class="hit__img" src="../img/Hit buy/hit3.jpg"></a>
                    <p class="hit__title_k" style="cursor: pointer;"><a href="./edit/pages-belt-edit.php">Ремни</a></p>
                </div>
            </div>
            <div class="col-4">
                <div class="text__algin_center blok__kartochka">
                    <a href="./edit/pages-wallet-edit.php"><img style="cursor: pointer;" class="hit__img" src="../img/Hit buy/hit4.jpg"></a>
                    <p class="hit__title_k" style="cursor: pointer;"><a href="./edit/pages/pages-wallet-edit.php">Портмоне/кошельки"</a></p>
                </div>

            </div>
            <div class="col-4">
                <div class="text__algin_center blok__kartochka">
                    <a href="./edit/pages-bags-edit.php"><img style="cursor: pointer;" class="hit__img" src="../img/Hit buy/hit2.jpg"></a>
                    <p class="hit__title_k" style="cursor: pointer;"><a href="./edit/pages/pages-bags-edit.php">Сумки/Рюкзаки</a></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <div class="text__algin_center blok__kartochka">
                    <a href="./edit/pages-passport-cover-edit.php"><img style="cursor: pointer;" class="hit__img" src="../img/Hit buy/hit1.jpg"></a>
                    <p class="hit__title_k" style="cursor: pointer;"><a href="./edit/pages/pages-passport-cover-edit.php">Обложки на паспорт/Докхолдеры</a></p>
                </div>
            </div>

            <div class="col-4">
                <div class="text__algin_center blok__kartochka">
                    <a href="./edit/pages-cartholder-edit.php"><img style="cursor: pointer;" class="hit__img" src="../img/Hit buy/hit5.jpg"></a>
                    <p class="hit__title_k" style="cursor: pointer;"><a href="./edit/pages/pages-cartholder-edit.php">Картхолдеры</a></p>
                </div>
            </div>
            <div class="col-4">
                <div class="text__algin_center blok__kartochka">
                    <a href="./edit/pages-accessories-edit.php"><img style="cursor: pointer;" class="hit__img" src="../img/Accessories/a1.jpg"></a>
                    <p class="hit__title_k" style="cursor: pointer;"><a href="./edit/pages/pages-accessories-edit.php">Аксессуары</a></p>
                </div>
            </div>
        </div>
    </section>



<?php include('../include/footer.php') ?>


</body>
</html>