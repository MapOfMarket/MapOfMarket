<?php
interface StoreService{

    function addNewStore($id, $name, $lat, $lon): void;

    function deleteStore($id): void;

    function updateStore($id, $name, $lat, $lon): void;

    function getStoreById($id): void;

    function findAll(): void;
}