<?php
session_start();

class User {
     
    public static function login_check($email,$password){
       
        $_SESSION['email']=$email;
        $_SESSION['password']=$password;
        if($_SESSION['email']==$_SESSION['regEmail'] && $_SESSION['password']==$_SESSION['regPassword']){
            $_SESSION['autheticated']=true;
            header('location: login.php');

        }
        else
        {
            header('location: loginForm.php');
        }
       

    }
    
    public static function login(){
        echo 'Name,  '.$_SESSION['regName'].'<br>Email,  '.$_SESSION['email'].'<br>Password,  '.$_SESSION['password'].'<br>Phone,  '.$_SESSION['regPhone'];
        
        
    } 
    public static function logout(){
        session_destroy();
        header('location:registration.php');

    }
    
    public static function is_logged_in(){
        
        return isset($_SESSION['autheticated']);
        

    }
    public static function is_regestred(){
        return isset($_SESSION['regestration_auth']);
    }

    public static function registrationData($name,$email,$password,$phone){
        $_SESSION['regName']=$name;
        $_SESSION['regEmail']=$email;
        $_SESSION['regPassword']=$password;
        $_SESSION['regPhone']=$phone;
        $_SESSION['regestration_auth']=true;

    }
 
}
?>






















