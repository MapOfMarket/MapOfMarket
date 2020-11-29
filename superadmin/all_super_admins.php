<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require_once("../conf/UserServiceImpl.php");
    ?>
    ?>
    <meta charset="UTF-8">
    <title>
        Delete a super admin
    </title>
</head>
<body>
    <?php
    $id = (int)$_POST['id'];

    $superAdminServiceImpl = new SuperAdminServiceImpl();

    $superAdminServiceImpl->findAll();
    ?>
<p><a href="superadmin.php">Вернутся на админ-панель</a></p>
</body>
</html>
