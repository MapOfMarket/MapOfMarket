<?php
require '../StoreService.php';
require '../../conf/configuration.php';

class StoreServiceImpl implements StoreService{

    function addNewStore($id, $name): void
    {
        $link = getDbConnection();

        $name = trim((string)$_POST["name"]);
        $boxes = trim((string)$_POST["boxes"]);

        $result = $link->query("INSERT INTO users(id, name, boxes) VALUES $name, $boxes");

        if (!$result){
            http_response_code(500);
            exit('Database query error');
        }
        echo "User added";
    }

    function deleteStore($id): void
    {
        $link = getDbConnection();

        $result = $link->query("DELETE FROM stores WHERE id={'$id'}");

        if (!$result){
            http_response_code(500);
            exit('Database query error');
        }
    }

    function updateStore($id, $name): void
    {
        $link = getDbConnection();

        $result = $link->query("SELECT * FROM stores WHERE id={$id}");

        if (!$result){
            http_response_code(500);
            exit('Database query error');
        }
    }

    function getStoreById($id): void
    {
        $link = getDbConnection();

        $result = $link->query("SELECT * FROM stores WHERE id={$id}");

        if (!$result){
            http_response_code(500);
            exit('Database query error');
        }
    }

    function findAll(): void
    {
        $link = getDbConnection();

        $result = $link->query("SELECT * FROM stores");

        if (!$result){
            http_response_code(500);
            exit('Database query error');
        }

        while($row = mysqli_fetch_array($result)){
            ?>
            <table>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['name']?></td>
                </tr>
            </table>
            <?php
        }
    }


}