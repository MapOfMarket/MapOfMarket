<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require_once("../conf/SuperAdminServiceImpl.php");
    ?>
    <meta charset="UTF-8">
    <title>
        Add new admin
    </title>
</head>
<body>
    <?php
    $id = (int)$_POST['id'];
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);

    $superAdminServiceImpl = new SuperAdminServiceImpl();

    $superAdminServiceImpl->addNewSuperAdmin($id, $login, $password);
?>
<p><a href="superadmin.php">Back to super-admin panel</a></p>
</body>
</html>