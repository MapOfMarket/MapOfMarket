<?php
interface UserService
{
    
    function addNewUser($id, $name, $boxes, $role): void;
    
    function deleteUser($id): void;
    
    function updateUser($id, $name, $boxes, $role): void;
    
    function getUserById($id): void;
    
    function findAll(): void;
}

