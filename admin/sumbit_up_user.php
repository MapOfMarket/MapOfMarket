<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require_once("../conf/UserServiceImpl.php");
    ?>
    <meta charset="UTF-8">
    <title>
        Update a user
    </title>
</head>
<body>
    <?php
    $id = (int)$_POST['id'];
    $name = trim((string)$_POST['name']);
    $boxes = trim((string)$_POST['boxes']);
    $role = trim((string)$_POST['role']);

    $userServiceImpl = new UserServiceImpl();

    $userServiceImpl->updateUser($id, $name, $boxes, $role);
    ?>
<p><a href="admin.php">Вернутся на админ-панель</a></p>
</body>
</html>