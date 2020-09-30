<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        Delete a user
    </title>
</head>
<body>
    <?php
    require "../conf/UserServiceImpl.php";

    $id = (int)$_POST['id'];

    $userServiceImpl = new UserServiceImpl();

    $userServiceImpl->deleteUser($id);
    ?>
<p><a href="admin.php"></a></p>
</body>
</html>
