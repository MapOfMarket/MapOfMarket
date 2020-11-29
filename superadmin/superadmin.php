<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
    require_once('../conf/AdminService.php');
    require_once('../conf/AdminServiceImpl.php');
    require_once('../conf/SuperAdminService.php');
    require_once('../conf/SuperAdminServiceImpl.php');
    ?>
    <meta charset="UTF-8">
    <title>
        Welcome!
    </title>
</head>
<body>
<div>
    <p>
        <button><a href="add_admin.php">Регистрация нового админа</a></button>
        <button><a href="add_super_admin.php">Регистрация нового супер-админа</a></button>
        <button><a href="add_user.php">Регистрация нового пользователя</a></button>
        <button><a href="rm_admin.php">Удалить админа</a></button>
        <button><a href="rm_user.php">Удалить пользователя</a></button>
        <button><a href="rm_super_admin.php">Удалить супер-админа</a></button>
        <button><a href="all_admins.php">Вывести список админов</a></button>
        <button><a href="all_super_admins.php">Вывести список супер-админов</a></button>
    </p>
</div>
</body>
</html>
