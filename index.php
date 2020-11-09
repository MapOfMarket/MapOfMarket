<!DOCTYPE html>
<html>
    <head>
        <style></style>
        <?php
        require_once ('conf/configuration.php');
        require_once ('conf/StoreServiceImpl.php');
        require_once ('conf/CityServiceImpl.php');
        ?>
        <meta charset="UTF-8">
        <title>
            Main page
        </title>
    </head>
    <body>
    <p><strong>Выберите город</strong></p>
    <?php
    $link = getDbConnection();
    $cityService = new CityServiceImpl();
    $storeService = new StoreServiceImpl();

    $cityService->findAllIndex($link);
    ?>
    <div>
        <?php
        $storeService->findAllIndex($link);
        ?>
    </div>
    <a href="login.php">Залогинтесь</a>
    </body>
</html>
