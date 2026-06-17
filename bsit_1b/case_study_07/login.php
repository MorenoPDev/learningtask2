<html>
    <head>
        <title>.: Login :. </title>
    </head>
    <body>
        <?php

        $correct_username = "admin";
        $correct_password = "password123";
        if(isset($_POST["submit"])){
            if($_POST["username"] == $correct_username && $_POST["password"] == $correct_password){
                echo "Welcome! ".$_POST["username"]."</strong><br>";
                echo "<a href='login.php'>Back</a>";
            } else {
                echo "Invalid username or password.";
                echo "<a href='login.php'>Back</a>";
            }
        }
        else{
            ?>
        <form method="post" action="">
            <label>Username</label> <br>
            <input type="text" name="username"> <br>
            <label>Password</label> <br>
            <input type="text" name="password"> <br> <br>
            <input type="submit" name="submit" value="Log In"> 
        </form>
        <?php } ?>
    </body>
</html>
