<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require_once("../conf/UserServiceImpl.php");
    ?>
    ?>
    <meta charset="UTF-8">
    <title>
        Delete a user
    </title>
</head>
<body>
    <?php
    $id = (int)$_POST['id'];

    $userServiceImpl = new UserServiceImpl();

    $userServiceImpl->deleteUser($id);
    ?>
<p><a href="superadmin.php">Вернутся на админ-панель</a></p>
</body>
</html>
