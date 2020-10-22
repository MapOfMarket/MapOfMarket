<?php
require 'configuration.php';
require 'UserService.php';

class UserServiceImpl implements UserService
{
    
     public function addNewUser($id, $name, $boxes, $role): void {
         $link = getDbConnection();

         $result = $link->query("INSERT INTO users(id, name, boxes, role) VALUES ('$id', '$name', '$boxes', '$role')");

         if (!$result){
             http_response_code(500);
             exit('Database query error');
         }
         echo "User added";
     }

     function deleteUser($id): void {
         $link = getDbConnection();
         
         $result = $link->query("DELETE FROM users u WHERE u.id=('$id')");
         
         if (!$result){
            http_response_code(500);
         exit('Database query error');
        }
         echo "User deleted";
     }

     function getUserById($id): void {
         $link = getDbConnection();
         
         $result = $link->query("SELECT FROM users u WHERE u.id=('$id')");
         
         if (!$result){
            http_response_code(500);
         exit('Database query error');
        }
     }

     function updateUser($id, $name, $boxes, $role): void{
         $link = getDbConnection();
         
         $result = $link->query("UPDATE users u SET name=('$name'), boxes=('$boxes'), role=('$role') WHERE u.id=('$id')");
         
         if (!$result) {
             http_response_code(500);
             exit('Database query error');
         }

         echo "User with id = ".$id." updated";
     }
     
     function findAll(): void {
         $link = getDbConnection();
         
         $result = $link->query("SELECT * FROM users");
         
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
                    <td><?php echo $row['boxes']?></td>
                </tr>
            </table>
            <?php
        }

     } 
}
?>