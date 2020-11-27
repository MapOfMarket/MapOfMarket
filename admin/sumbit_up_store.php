<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require_once("../conf/StoreServiceImpl.php");
    require_once("../conf/configuration.php");
    ?>
    ?>
    <meta charset="UTF-8">
    <title>
        Update a store.
    </title>
</head>
<body>
    <?php
    $link = getDbConnection();

    $query = mysqli_query($link, "SELECT idOfStore FROM admin_store WHERE IdOfAdmin=('')")
    $id = (int)$_POST['id'];
    $name = trim((string)$_POST['name']);
    $lon = (int)$_POST['lon'];
    $lat = (int)$_POST['lat'];

    $storeService = new StoreServiceImpl();

    $storeService->updateStore($id, $name, $lat, $lon);
    ?>
<p><a href="admin.php">Вернутся на админ-панель</a></p>
</body>
</html>