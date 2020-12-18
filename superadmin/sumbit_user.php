<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require_once("../conf/UserServiceImpl.php");
    ?>
    <meta charset="UTF-8">
    <title>
        Add new user
    </title>
</head>
<body>
    <?php
    $id = (int)$_POST['id'];
    $name = trim((string)$_POST['name']);
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);
    $boxes = trim((string)$_POST['boxes']);
    $role = trim("user");
    $id_of_store = (int)$_POST['id_of_store'];

    $userServiceImpl = new UserServiceImpl();

    $userServiceImpl->addNewUser($id, $name, $login, $password, $boxes, $role);
    ?>
<p><a href="superadmin.php">Back to admin-panel</a></p>
</body>
</html>