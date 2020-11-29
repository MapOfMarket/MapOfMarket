<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require_once("../conf/AdminServiceImpl.php");
    ?>
    <meta charset="UTF-8">
    <title>
        Update an admin.
    </title>
</head>
<body>
    <?php
    $id = (int)$_POST['id'];
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);

    $adminServiceImpl = new AdminServiceImpl();

    $adminServiceImpl->updateAdmin($id, $login, $password);
    ?>
<p><a href="superadmin.php">Вернутся на админ-панель</a></p>
</body>
</html>
