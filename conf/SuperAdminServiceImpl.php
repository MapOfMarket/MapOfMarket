<?php
require_once ('configuration.php');
require_once ('SuperAdminService.php');

class SuperAdminServiceImpl implements SuperAdminService {

    function addNewSuperAdmin($id, $login, $password): void
    {
        $role = 'superadmin';
        $link = getDbConnection();

        $result = $link->query("INSERT INTO superadmins(id, login, password, role) VALUES ('$id', '$login', '$password', '$role')");

        if (!$result){
            http_response_code(500);
            exit('Database query error');
        }
        echo "Admin added";
    }

    function deleteSuperAdmin($id): void
    {
        $link = getDbConnection();

        $result = $link->query("DELETE FROM superadmins s WHERE s.id=('$id')");

        if (!$result){
            http_response_code(500);
            exit('Database query error');
        }
        echo "Admin deleted";
    }

    function updateSuperAdmin($id, $login, $password): void
    {
        $link = getDbConnection();

        $result = $link->query("UPDATE superadmins s SET id =('$id'), login=('$login'), password=('$password') WHERE s.id=('$id')");

        if (!$result) {
            http_response_code(500);
            exit('Database query error');
        }

        echo "SuperAdmin with id = ".$id." updated";
    }

    function getSuperAdminById($id): void
    {
        $link = getDbConnection();

        $result = $link->query("SELECT * FROM superadmins WHERE id=('$id')");

        if (!$result){
            http_response_code(500);
            exit('Database query error');
        }
    }

    function findAll(): void
    {
        $link = getDbConnection();

        $result = $link->query("SELECT * FROM superadmins");

        if (!$result){
            http_response_code(500);
            exit('Database query error');
        }

        while($row = mysqli_fetch_array($result)){
            ?>
            <table border="1px">
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['login']?></td>
                    <td><?php echo $row['password']?></td>
                </tr>
            </table>
            <?php
        }
    }
}
