<?php
 include('header.php');
 include('user.php');

// if(!(User::is_regestred())){
//     header('location: registration.php');
    

// }
 if((User::is_logged_in())){
    header('location: login.php');
 }
 
 if($_SERVER['REQUEST_METHOD']=='POST'){

       
     $name = $_POST['name'];
     $email= $_POST['email'];
     $password=$_POST['password'];
     $phone= $_POST['phone'];
     User::registrationData($name,$email,$password,$phone);
 }
 
?>

    <form class="form" action="_logging.php" method="POST" autocomplete="off">
        <h2>Welcome to Login Page</h2>
        <div class="form-control">
        <label for="email">Enter your email</label><br>
        <input type="text" class="input" autocomplete="off" name="email" id="email">
        </div>
       
        <div class="form-control">
        <label for="password">Enter your Password</label><br>
        <input type="password" class="input" autocomplete="off" name="password" id="password">
        </div>
        <div class="form-button">
            <input type="submit" class="button" value="Log in">
            <a href="__registration_backend.php" class="button">Go to Registration</a>

        </div>

    
    
    </form>
    
<?php include('footer.php') ?>
