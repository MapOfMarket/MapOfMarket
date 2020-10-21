<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require "../conf/UserServiceImpl.php";
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
<p><a href="admin.php"></a></p>
</body>
</html>
