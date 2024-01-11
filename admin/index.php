<?php include('../include/db__connekt.php') ?>

<?php
session_start();

$user = '';
if (isset($_POST["submit_enter"])) {
    $error = array();

    if (count($error)) {
        $_SESSION['message'] = "<p id='form-error'>" . implode('<br />', $error) . "</p>";
    } else {
        $name = $_POST['input_name'];
        $password = $_POST['input_pass'];

        $check_user =  mysqli_query($mysqli, "SELECT * FROM `admin` WHERE `name` = '$name' AND 
`pass` = '$password'");

        if (mysqli_num_rows($check_user) > 0) {
            $user = mysqli_fetch_assoc($check_user);
            $_SESSION['user'] = [
                "id" => $user['id'],
                "name" => $user['name'],
                "pass" => $user['pass']
            ];
            echo "<script>window.location.href='http://regionmp.beget.tech/admin/home.php';</script>";
            
        } else {
            $_SESSION['message'] = 'Неверный логин или пароль';
        }
    }
}
?>

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


    <section class="container">
        <div class="row justify__content__center">
            <h2 class="hit__names">Авторизация</h2>
        </div>
        <div class="row justify__content__center">
            <div class="col-6">
                <form enctype="multipart/form-data" method="post">
                    <div class="col-12">
                        <div class="admin__center">
                            <label for="exampleInputEmail" class="contact__adress">Логин</label>
                            <input type="text" class="contact__input" name="input_name" id="exampleInputEmail">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="admin__center">
                        <label for="exampleInputPassword" class="contact__adress">Пароль</label>
                        <input type="password" class="contact__input" name="input_pass" id="exampleInputPassword">
                        </div>
                    </div>
                    <div class="admin__center">
                    <input type="submit" name="submit_enter" class="hit__button" id="submit_enter" value="Вход" />
                    
                    </div>
                </form>
                <?php
                if (isset($_SESSION['message'])) {
                    echo '<p class="msg">' . $_SESSION['message'] . '</p>';
                }
                unset($_SESSION['message']);
                ?>

            </div>
        </div>
    </section>

    <?php include('../include/footer.php') ?>

</body>

</html>