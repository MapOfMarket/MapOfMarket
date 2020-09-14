<?php
require 'classes/User.php';

interface UserService{
    public function addNewUser($id, $name, $items, $boxes): void;
    
    public function deleteUser($id): void;
    
    public function updateUser($id, $name, $items, $boxes): User;
    
    public function getUserById($id): User;
    
    public function findAll(): string;
}

