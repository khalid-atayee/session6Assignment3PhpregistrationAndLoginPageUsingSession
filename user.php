<?php
session_start();

class User {
     
    public static function login_check($email,$password){
       
        $_SESSION['email']=$email;
        $_SESSION['password']=$password;
        $_SESSION['autheticated']=true;
        header('location: login.php');
       

    }
    
    public static function login(){
        echo 'Email,  '.$_SESSION['email'].'<br>Password,  '.$_SESSION['password'];
        
        
    } 
    public static function logout(){
        session_destroy();
        header('location:loginForm.php');

    }
    
    public static function is_logged_in(){
        
        return isset($_SESSION['autheticated']);
        

    }
   
}
?>






















