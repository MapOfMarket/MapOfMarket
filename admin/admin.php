<!DOCTYPE html>
<html>
<head>
    <?php
    require_once('../conf/UserServiceImpl.php');
    require_once('../services/UserService.php');
    ?>
    <meta charset="UTF-8">
    <title>
        Adminka
    </title>
</head>
<body>
    <button><a href="add_user.php">Добавить пользователя</a></button>
    <button><a href="rm_user.php">Удалить пользователя</a></button>
<div>
    <?php
    $userService = new UserServiceImpl();

    $userService->findAll();
    ?>
</div>



</body>
</html>
