<?php

if(isset($_POST['submit'])){

    //grabbing the data
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdrepeat'];
    $email = $_POST['email'];

    //Instantiate SignUp controller class
    include_once '../classes/dbh.classes.php';
    include_once '../classes/signup.classes.php';
    include_once '../classes/signup-contr.classes.php';
    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);

    //Running error handlers and user sign up
    $signup->signupUser();

    //Going back to front page
    header('Location: ../index.php?error=none');
}