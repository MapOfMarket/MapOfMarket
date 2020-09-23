<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        Add new user
    </title>
</head>
<body>
    <form action="/services/Impl/StoreServiceImpl.php" method="post">
        <p>Name: <input type="text" name="name"/></p>
        <p>Boxes: <input type="text" name="boxes"/></p>
        <p><input type="submit" name="submit" value="Submit"/></p>
    </form>
</body>
</html>
