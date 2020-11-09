<?php
require_once ('StoreService.php');
class StoreServiceImpl implements StoreService
{

    function addNewStore($id, $name, $lat, $lon): void
    {
        $link = getDbConnection();

        $result = $link->query("INSERT INTO stores(id, name, lat, lon) VALUES ('$id', '$name', '$lat', '$lon')");

        if (!$result){
            http_response_code(500);
            exit('Database query error');
        }
        echo "User added";
    }

    function deleteStore($id): void
    {
        $link = getDbConnection();

        $result = $link->query("DELETE FROM stores WHERE id=('$id')");

        if (!$result){
            http_response_code(500);
            exit('Database query error');
        }
    }

    function updateStore($id, $name, $lat, $lon): void
    {
        $link = getDbConnection();

        $result = $link->query("UPDATE stores u SET name=('$name'), lat=('$lat'), lon = ('$lon') WHERE u.id=('$id')");

        if (!$result){
            http_response_code(500);
            exit('Database query error');
        }
    }

    function getStoreById($id): void
    {
        $link = getDbConnection();

        $result = $link->query("SELECT FROM stores s WHERE s.id=('$id')");

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
            <table border="1px">
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['lat']?></td>
                    <td><?php echo $row['lon']?></td>
                </tr>
            </table>
            <?php
        }
    }

    function findAllIndex($link): void
    {
        $result = $link->query("SELECT * FROM stores");

        if (!$result){
            http_response_code(500);
            exit('Database query error');
        }
        echo '<div>';
        echo '<select>';
        while($row = mysqli_fetch_array($result)){
            ?>
            <option><?php echo $row['name']?></option>
            <?php
        }
        echo '</select>';
        echo '</div>';
    }


}