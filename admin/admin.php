<?php
    require_once('../conf/configuration.php');
    require_once('func/functions.php');
    $link = getDbConnection();

    $correct = registrationCorrect($link);
    if($correct){

        $id = htmlspecialchars($_POST['id']);
        $login = htmlspecialchars($_POST['login']);
        $password = md5($_POST['password']);
        if(mysqli_query($link, "INSERT INTO admins(id, login, password) VALUES ('$id', '$login', '$password')"))
        {
            setcookie("login", $login);
            setcookie("password", $password);
            $res = mysqli_query($link, "SELECT * FROM admins WHERE login='$login'");
            $row = mysqli_fetch_assoc($res);
            $_SESSION['id'] = $row['id'];
            $regged = true;
        }

    }
?>
<!DOCTYPE html>
<html>
<head>
    <?php
    require_once('../conf/UserServiceImpl.php');
    require_once('../conf/UserService.php');
    ?>
    <meta charset="UTF-8">
    <title>
        Welcome!
    </title>
</head>
<body>
<div>
    <p>
    <button><a href="add_user.php">Регистрация нового пользователя</a></button>
    <button><a href="rm_user.php">Удалить пользователя</a></button>
    <button><a href="upd_user.php">Изменить данные о пользователе</a></button>
    </p>
</div>
<div>
    <?php
    $userService = new UserServiceImpl();

    $userService->findAll();
    ?>
</div>



</body>
</html>
