<?php
require 'conf/configuration.php';

function createUsersTable() {
    $link = getDbConnection();
    $query = 'CREATE TABLE users (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    box_id INTEGER NOT NULL,
    item_id INTEGER NOT NULL,
    )';

    $result = $link->exec($query);
    if (!$result) 
    {
        http_response_code(500);
        exit('Database init error');
    }
}

