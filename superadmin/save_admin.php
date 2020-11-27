<?php
require_once ('../conf/configuration.php');
    $link = getDbConnection();

    if(isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
    if(isset($_POST['password'])) { $password=$_POST['password']; if ($password == '') { unset($password);} }
    if(isset($_POST['idOfStore'])) { $idOfStore=$_POST['idOfStore']; if($idOfStore == '') { unset($idOfStore);} }
    if(!empty($login) && !empty($password) && !empty($idOfStore))
    {
        $login = stripcslashes($login);
        $login = htmlspecialchars($login);
        $password = stripcslashes($password);
        $password = htmlspecialchars($password);
        $login = trim($login);
        $password = trim($password);
        $res = mysqli_query($link, "SELECT id FROM admins WHERE login=('$login')");
        $row = mysqli_fetch_array($res);
        if(!empty($row)){
            exit("Sorry, your login has been used!");
        }
        else
            $res2 = mysqli_query($link, "INSERT INTO admins(login, password) VALUES ('$login', '$password')");
            $res4 = mysqli_query($link, "SELECT id FROM admins WHERE login=('$login')");
            $row2 = mysqli_fetch_array($res4);
            $id = $row2['id'];
            $res3 = mysqli_query($link, "INSERT INTO admin_store(Idofadmin, Idofstore) VALUES ('$id', '$idOfStore')");
        if($res2=='TRUE' && $res3='TRUE')
        {
            echo "Registration successful";
        }
        else
            {
            echo "Error!";
        }
    }