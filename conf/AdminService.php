<?php


namespace conf;


interface AdminService
{
    function addNewAdmin($id, $login, $password): void;

    function deleteAdmin($id): void;

    function updateAdmin($id, $login, $password): void;

    function getAdminById($id): void;

    function findAll(): void;
}