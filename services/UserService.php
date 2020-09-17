<?php
require 'classes/User.php';

interface UserService{
    
    function addNewUser($id, $name, $items, $boxes): void;
    
    function deleteUser($id): void;
    
    function updateUser($id, $name, $items, $boxes): User;
    
    function getUserById($id): User;
    
    function findAll(): string;
}

