<?php
require_once ('conf/configuration.php');
$link = getDbConnection();

if(isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
if(isset($_POST['password'])) { $password=$_POST['password']; if ($password == '') { unset($password);} }
if(!empty($login) && !empty($password)) {
    $login = stripcslashes($login);
    $login = htmlspecialchars($login);
    $password = htmlspecialchars($password);
    $login = trim($login);
    $res_admin = mysqli_query($link, "SELECT id FROM admins WHERE login=('$login') AND password=('$password')");
    $res_user = mysqli_query($link, "SELECT id FROM users WHERE login=('$login') AND role=('user')");
    $res_superadmin  = mysqli_query($link, "SELECT id FROM superadmins WHERE login=('$login') AND password=('$password') AND role=('superadmin')");
    $row = mysqli_fetch_array($res_admin);
    $row1 = mysqli_fetch_array($res_user);
    $row2 = mysqli_fetch_array($res_superadmin);
    if (empty($row) && empty($row1) && empty($row2)) {
        exit("You are not registered!");
    }
    elseif (!empty($row) && empty($row1) && empty($row2)){
        header('Location: php/admin/admin.php');
    }
    elseif (empty($row) && !empty($row1) && empty($row2)){
        header('Location: php/user/user.php');
    }
    elseif (empty($row) && empty($row1) && !empty($row2)){
        header('Location: php/superadmin/superadmin.php');
    }
    else{
        exit("It can be error or your data is used");
    }
}