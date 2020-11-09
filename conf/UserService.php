<?php
interface UserService
{
    
    function addNewUser($id, $name, $login, $password, $boxes, $role): void;
    
    function deleteUser($id): void;
    
    function updateUser($id, $name, $login, $password, $boxes, $role): void;
    
    function getUserById($id): void;
    
    function findAll(): void;
}

