<?php
interface SuperAdminService
{
    
    function addNewSuperAdmin($id, $login, $password): void;
    
    function deleteSuperAdmin($id): void;
    
    function updateSuperAdmin($id, $login, $password): void;
    
    function getSuperAdminById($id): void;
    
    function findAll(): void;
}

