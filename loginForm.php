<?php
 include('header.php');
 include('user.php');
 if((User::is_logged_in())){
    header('location: login.php');
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

        </div>

    
    
    </form>
    
<?php include('footer.php') ?>