<?php
require 'UserService.php';
require 'configuration.php';

class UserServiceImpl implements UserService{
    
     public function addNewUser($id, $name, $items, $boxes): void {
         $link = getDbConnection();
        
         $result = $link->prepare(sprintf("INSERT INTO users (id, name, items, boxes) VALUES ('%d', '%s', '%s', '%s')",
    $id, mysqli_real_escape_string($link, $name), mysqli_real_escape_string($link, $items), mysqli_real_escape_string($link, $boxes)));
     
        if (!$result){
            http_response_code(500);
        exit('Database query error');
    
        }
     }

     function deleteUser($id): void {
         $link = getDbConnection();
         
         $result = $link->prepare(sprintf("DELETE FROM users WHERE id={$id}"));
         
         if (!$result){
            http_response_code(500);
         exit('Database query error');
        }
     }

     function getUserById($id): string {
         $link = getDbConnection();
         
         $result = $link->prepare(sprintf("SELECT * FROM users WHERE id={$id}"));
         
         if (!$result){
            http_response_code(500);
         exit('Database query error');
        }
     }

     function updateUser($id, $name, $items, $boxes): string{
         $link = getDbConnection();
         
         $result = $link->prepare(sprintf("UPDATE users SET name={$name}, items={$items}, boxes={$boxes} WHERE id={$id}"));
         
         if (!$result){
            http_response_code(500);
         exit('Database query error');
        }
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
            <table>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['boxes']?></td>
                    <td><?php echo $row['items']?></td>
                </tr>
            </table>
            <?php
        }
     } 
}
?>
