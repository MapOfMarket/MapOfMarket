<?php
interface UserService{
    
    function addNewUser($name, $boxes): void;
    
    function deleteUser($id): void;
    
    function updateUser($id, $name, $boxes): void;
    
    function getUserById($id): void;
    
    function findAll(): void;
}

