<?php
require_once ('../services/impl/UserServiceImpl.php');
require_once ('../services/UserService.php');

$userService = new UserService();

$userService->findAll();
