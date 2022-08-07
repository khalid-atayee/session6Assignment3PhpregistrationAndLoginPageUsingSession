<?php

include('user.php');



if($_SERVER["REQUEST_METHOD"] == "POST"){

    $email = $_POST['email'];
    $password = $_POST['password'];

    User::login_check($email,$password);


    

}




?>