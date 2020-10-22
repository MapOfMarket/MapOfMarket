<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require_once("../conf/StoreServiceImpl.php");
    ?>
    ?>
    <meta charset="UTF-8">
    <title>
        Update a store.
    </title>
</head>
<body>
<?php
$id = (int)$_POST['id'];
$name = (string)$_POST['name'];
$lon = (int)$_POST['lon'];
$lat = (int)$_POST['lat'];

$storeService = new StoreServiceImpl();

$storeService->updateStore($id, $name, $lat, $lon);
?>
<p><a href="admin.php">Вернутся на админ-панель</a></p>
</body>
</html>