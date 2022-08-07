<?php include ('header.php');?>
<form class="form" action="_logging.php" method="POST" autocomplete="off">
        <h2>Welcome to Registration Page</h2>
        <div class="form-control">
        <label for="name">Enter your name</label><br>
        <input type="text" class="input" autocomplete="off" name="name" id="name">
        </div>

        <div class="form-control">
        <label for="email">Enter your email</label><br>
        <input type="text" class="input" autocomplete="off" name="email" id="email">
        </div>

        <div class="form-control">
            <label for="password">Enter your Password</label><br>
            <input type="password" class="input" autocomplete="off" name="password" id="password">
        </div>

        <div class="form-control">
        <label for="phone">Enter your phone No</label><br>
        <input type="text" class="input" autocomplete="off" name="phone" id="phone">
        </div>
        <div class="form-button">
            <input type="submit" class="button" value="Register">

        </div>

    
    
</form>



<?php include ('footer.php');?>