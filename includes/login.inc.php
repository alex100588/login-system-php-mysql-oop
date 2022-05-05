<?php

session_start();


if(isset($_POST['submit'])){

    //grabbing the data
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    //Instantiate SignUp controller class
    include_once '../classes/dbh.classes.php';
    include_once '../classes/login.classes.php';
    include_once '../classes/login-contr.classes.php';
    $login = new LoginContr($uid, $pwd);

    //Running error handlers and user sign up
    $login->loginUser();

    //Going back to front page
    header('Location: ../index.php?error=none');
}