<?php
interface CityService
{
    function addNewCity($id, $name): void;

    function deleteCity($id): void;

    function updateCity($id, $name): void;

    function getCityById($id): void;

    function findAll(): void;

    function findAllIndex($link): void;
}