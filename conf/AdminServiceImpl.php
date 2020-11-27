<?php
class AdminServiceImpl implements AdminService
{
    function addNewAdmin($id, $login, $password): void
    {
        $role = 'admin';
        $link = getDbConnection();

        $result = $link->query("INSERT INTO admins(id, login, password, role) VALUES ('$id', '$login', '$password', '$role')");

        if (!$result){
            http_response_code(500);
            exit('Database query error');
        }
        echo "Admin added";
    }

    function deleteAdmin($id): void
    {
        $link = getDbConnection();

        $result = $link->query("DELETE FROM admins a WHERE a.id=('$id')");

        if (!$result){
            http_response_code(500);
            exit('Database query error');
        }
        echo "Admin deleted";
    }

    function updateAdmin($id, $login, $password): void
    {
        $link = getDbConnection();

        $result = $link->query("UPDATE admins a SET id =('$id'), login=('$login'), password=('$password') WHERE a.id=('$id')");

        if (!$result) {
            http_response_code(500);
            exit('Database query error');
        }

        echo "Admin with id = ".$id." updated";
    }

    function getAdminById($id): void
    {
        $link = getDbConnection();

        $result = $link->query("SELECT * FROM admins WHERE id=('$id')");

        if (!$result){
            http_response_code(500);
            exit('Database query error');
        }
    }

    function findAll(): void
    {
        $link = getDbConnection();

        $result = $link->query("SELECT * FROM admins");

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