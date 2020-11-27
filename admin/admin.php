<!DOCTYPE html>
<html lang="ru">
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
