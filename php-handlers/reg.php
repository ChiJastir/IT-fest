<?php
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $password = md5($_POST['Password']);
    $age = $_POST['Age'];
    $experience = $_POST['Experience'];

    $mysql = new mysqli("localhost", "root", "", "ruscraft");
    $mysql->query("SET NAMES 'utf8'");

    if($mysql->connect_error)
        echo "Ошибка";
    else{
        $mysql->query("INSERT INTO `beta-applications` (`username`, `email`, `password`, `age`, `experience`) VALUES('$name', '$email', '$password', '$age', '$experience')");
    }

    $mysql->close();

    header('Location: /registration/registration-complete.html');
    exit;