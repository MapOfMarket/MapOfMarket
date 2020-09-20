<?php
require 'User.php';

interface UserService{
    
    function addNewUser($id, $name, $items, $boxes): void;
    
    function deleteUser($id): void;
    
    function updateUser($id, $name, $items, $boxes): string;
    
    function getUserById($id): string;
    
    function findAll(): void;
}

