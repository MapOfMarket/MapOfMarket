<?php
function getDbConnection(){
    $host = 'localhost';
    $database = 'mapOfStore';
    $user = 'artemiy';
    $password = 'Recognize13_';
    
    $link = mysqli_connect($host, $password, $user, $database);
    if(!$link)
    {
        http_response_code(505);
        exit('Database connection error');
    }
    return $link;
}



