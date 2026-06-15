<html>
    <head>
        <title>Activity 03</title>
        <style>
            .form-control{
                font-family: verdana;
            }
            .btn{
                background-color: blue;
                color: white;
            }
            .btn:hover{
                background-color: white;
                color: blue;
            }
        </style>
    </head>
    <body>
        <form method="post" action="activity_03_receiver.php">
            <label>First Name</label><br>
            <strong><?php echo $_POST["txtFirstName"] ?></strong><br><br>
            <label>Last Name</label><br>
            <strong><?php echo $_POST["txtLastName"] ?></strong><br><br>
            <label>Status</label><br>        
            <strong><?php echo $_POST["status"] ?></strong><br><br>
            <label>Date of Birth</label><br>
            <strong><?php echo $_POST["txtDOB"] ?></strong><br><br>
            <label>Address</label><br>
            <strong><?php echo $_POST["txtAreaAddress"] ?></strong><br><br>
            <a href="activity_03.php">Back</a>
        </form>
    </body>
</html>