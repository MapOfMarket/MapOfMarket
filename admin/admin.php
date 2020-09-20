<?php
require_once('../UserServiceImpl.php');
require_once('../UserService.php');

$userService = new UserServiceImpl();

$userService->findAll();
