<!DOCTYPE html>
<html>
    <head>
        <style></style>
        <?php
        require('conf/CityServiceImpl.php');
        ?>
        <meta charset="UTF-8">
        <title>
            Main page
        </title>
    </head>
    <body>
    <p><strong>Выберите город</strong></p>
    <?php
    $cityService = new CityServiceImpl();

    $cityService->findAllIndex();
    ?>
    <a href="admin/admin.php">Панель управления</a>
    </body>
</html>
