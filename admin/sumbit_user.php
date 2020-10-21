<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        Add new user
    </title>
</head>
<body>
    <?php
    require "../conf/UserServiceImpl.php";

    $id = (int)$_POST['id'];
    $name = trim((string)$_POST['name']);
    $boxes = trim((string)$_POST['boxes']);
    $role = trim((string)$_POST['role']);

    $userServiceImpl = new UserServiceImpl();

    $userServiceImpl->addNewUser($id, $name, $boxes, $role);
    ?>
<p><a href="admin.php"></a></p>
</body>
</html>