<?php
require '../services/StoreService.php';
require 'configuration.php';

class CityServiceImpl implements CityService{


    function addNewCity($id, $name): void
    {
        $link = getDbConnection();

        $result = $link->query("INSERT INTO cities(id, name) VALUES ('$id', '$name')");

        if (!$result){
            http_response_code(500);
            exit('Database query error');
        }
        echo "City added";
    }

    function deleteCity($id): void
    {
        $link = getDbConnection();

        $result = $link->query("DELETE FROM cities c WHERE c.id=('$id')");

        if (!$result){
            http_response_code(500);
            exit('Database query error');
        }
        echo "City deleted";
    }

    function updateCity($id, $name): void
    {
        $link = getDbConnection();

        $result = $link->query("UPDATE cities c SET id =('$id'), name=('$name') WHERE c.id=('$id')");

        if (!$result) {
            http_response_code(500);
            exit('Database query error');
        }

        echo "User with id = ".$id." updated";
    }

    function getCityById($id): void
    {
        $link = getDbConnection();

        $result = $link->query("SELECT * FROM cities WHERE id=('$id')");

        if (!$result){
            http_response_code(500);
            exit('Database query error');
        }
    }

    function findAll(): void
    {
        $link = getDbConnection();

        $result = $link->query("SELECT * FROM cities");

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
                </tr>
            </table>
            <?php
        }
    }
}