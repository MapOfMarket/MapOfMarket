<?php
require 'configuration.php';
require '../services/UserService.php';

class UserServiceImpl implements UserService{
    
     public function addNewUser($name, $boxes): void {
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

     function deleteUser($id): void {
         $link = getDbConnection();

         $id = trim((int)$_POST["idOfUser"]);
         
         $result = $link->query("DELETE FROM users u WHERE u.id={'$id'}");
         
         if (!$result){
            http_response_code(500);
         exit('Database query error');
        }
         echo "User deleted";
     }

     function getUserById($id): void {
         $link = getDbConnection();
         
         $result = $link->query("SELECT * FROM users WHERE id={$id}");
         
         if (!$result){
            http_response_code(500);
         exit('Database query error');
        }
     }

     function updateUser($id, $name, $boxes): void{
         $link = getDbConnection();

         $name = trim((string)$_POST["name"]);
         $boxes = trim((string)$_POST["boxes"]);
         
         $result = $link->query("UPDATE users SET name={'$name'}, boxes={'$boxes'} WHERE id={'$id'}");
         
         if (!$result) {
             http_response_code(500);
             exit('Database query error');
         }

         echo "User with id".$_POST['id']."updated";
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