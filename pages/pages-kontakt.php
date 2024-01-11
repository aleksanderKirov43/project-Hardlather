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
        <div>
            <h2 class="hit__names">Контакты</h2>
            <p class="contact__txt">Мы можем проконсультировать вас по телефону, в мессенджерах или в нашей мастерской
            </p>
            <br>
            <p class="contact__txt">Пн-Чт: с 10:00 до 20:00<br>
                Пт: с 10:00 до 16:00<br>
                Сб-Вс: выходные</p>
            <br>
            <p class="contact__txt">Киров(Вятка), ул. Азина 17.</p>
            <br>
            <p class="contact__txt">+7 900 529-55-57<br>
                hardleather@yandex.ru</p>
        </div>
        <div>
            <ul class="contact__ico">
                <li style="margin: 10px 10px 10px 10px;" class="nav__buy"> <a class="nav__item__link" href="#"><img
                            class="buy__img" src="../img/iconKontakt/vk.svg"></a>
                </li>
                <li style="margin: 10px 10px 10px 10px;" class="nav__buy"> <a class="nav__item__link" href="#"><img
                            class="buy__img" src="../img/iconKontakt/telegram.svg"></a>
                </li>
                <li style="margin: 10px 10px 10px 10px;" class="nav__buy"> <a class="nav__item__link" href="#"><img
                            class="buy__img" src="../img/iconKontakt/whatsapp.svg"></a>
                </li>
                <li style="margin: 10px 10px 10px 10px;" class="nav__buy"> <a class="nav__item__link" href="#"><img
                            class="buy__img" src="../img/iconKontakt/instagram.svg"></a>
                </li>

            </ul>
        </div>
    </section>

    <section class="container">
        <div class="contact__map">
            <iframe 
                src="https://yandex.ru/map-widget/v1/?um=constructor%3A24eb2120f2e2a43e443a9b353e7a674624ea517ef16c6cf53a48c1ddcca2e945&amp;source=constructor"
                width="1000" height="400" frameborder="0"></iframe>
        </div>
    </section>

    <?php include('../include/footer.php') ?>

</body>

</html>