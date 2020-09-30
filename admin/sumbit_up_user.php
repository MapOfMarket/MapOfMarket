<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        Update a user
    </title>
</head>
<body>
    <?php
    require "../conf/UserServiceImpl.php";

    $id = (int)$_POST['id'];
    $name = trim((string)$_POST['name']);
    $boxes = trim((string)$_POST['boxes']);

    $userServiceImpl = new UserServiceImpl();

    $userServiceImpl->updateUser($id, $name, $boxes);
    ?>
<p><a href="admin.php"></a></p>
</body>
</html>