<?php


include('header.php') ;
include('user.php');

if(!(User::is_logged_in())){
    header('location: loginForm.php');


}

?>

<h1>welcome to Dashboard</h1>
<div class="form">
    <h2>You have Successfully logged in</h2>
    <?php User::login(); ?>
    <a href="logout.php" class="button">Logout</a>
    

</div>


<?php include('footer.php') ?>