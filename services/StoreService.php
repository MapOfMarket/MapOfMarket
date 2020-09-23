<?php
interface StoreService{

    function addNewStore($id, $name): void;

    function deleteStore($id): void;

    function updateStore($id, $name): void;

    function getStoreById($id): void;

    function findAll(): void;
}