<?php
require ('../../conf/configuration.php');
function registrationCorrect(){
    $link = getDbConnection();

    if($_POST['login'] == '') return false;
    if($_POST['password'] == '') return false;
    if (!preg_match('/^([a-zA-Z0-9])(\w|-|_)+([a-z0-9])$/is', $_POST['login'])) return false;
    if (strlen($_POST['password']) < 5) return false;
    $login = $_POST['login'];
    $res = mysqli_query($link,"SELECT * FROM admins WHERE login=$login");
    if (mysqli_num_rows($res) != 0) return false;
    return true;
}