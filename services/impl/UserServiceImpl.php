<?php
require 'classes/User.php';
require 'Services/ItemService.php';
require 'conf/configuration.php';

class UserServiceImpl implements UserService{
    
     public function addNewUser($id, $name, $items, $boxes): void {
         $link = getDbConnection();
        
         $result = $link->execute(sprintf("INSERT INTO users (id, name, items, boxes) VALUES ('%d', '%s', '%s', '%s')",
    $id, mysqli_real_escape_string($link, $name), mysqli_real_escape_string($link, $items), mysqli_real_escape_string($link, $boxes)));
     
        if (!$result){
            http_response_code(500);
        exit('Database query error');
    
        }
     }

     function deleteUser($id): void {
         $link = getDbConnection();
         
         $result = $link->execute(sprintf("DELETE FROM users WHERE id={$id}"));
         
         if (!$result){
            http_response_code(500);
         exit('Database query error');
        }
     }

     function getUserById($id): string {
         $link = getDbConnection();
         
         $result = $link->execute(sprintf("SELECT * FROM users WHERE id={$id}"));
         
         if (!$result){
            http_response_code(500);
         exit('Database query error');
        }
     }

     function updateUser($id, $name, $items, $boxes): string{
         $link = getDbConnection();
         
         $result = $link->execute(sprintf("UPDATE users SET name={$name}, items={$items}, boxes={$boxes} WHERE id={$id}"));
         
         if (!$result){
            http_response_code(500);
         exit('Database query error');
        }
     }
     
     function findAll(): string {
         $link = getDbConnection();
         
         $result = $link->execute(sprintf("SELECT * FROM users"));
         
         if (!$result){
            http_response_code(500);
         exit('Database query error');
        }
     } 
}
