<?php
require_once ('../conf/configuration.php');
    $link = getDbConnection();

    if(isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    if(empty($login) or empty($password))
    {
        $login = stripcslashes($login);
        $login = htmlspecialchars($login);
        $password = stripcslashes($password);
        $password = htmlspecialchars($password);
        $login = trim($login);
        $password = trim($password);
        $res = mysqli_query($link, "SELECT id FROM admins WHERE login=('login')");
        $row = mysqli_fetch_array($res);
        if(!empty($row)){
            exit("Sorry, your login copyrighted!");
        }
        else
            $res2 = mysqli_query($link, "INSERT INTO admins(login, password) VALUES ('$login', '$password')");
        if($res2=='TRUE')
        {
            echo "Registration successful";
        }
        else
            {
            echo "Error!";
        }
    }