<!DOCTYPE html>
<html>
    <head>
        <title>Activity 03</title>

        <style type="text/css">
            .form-control {
                font-family: verdana;
            }

            .btn {
                background-color: blue;
                color: white;
            }
            .btn:hover {
                background-color: white;
                color: blue;
            }
        </style>
    </head>
    <body>
        <form method="post" action="activity_03_receiver.php">
            <label>First Name</label><br>
            <input type="text" class="form-control" name="txtFirstName" placeholder="First Name..."><br><br>
            <label>Last Name</label><br>
            <input type="text" class="form-control" name="txtLastName" placeholder="Last Name..."><br><br>
            <label>Status</label><br>
            <select name="status">
                <option value="Single">Single</option>
                <option value="Married">Married</option>
            </select><br>
            <label>DOB</label><br>
            <input type="date" class="form-control" name="txtDOB"><br>
            <label>Address</label><br>
            <textarea rows="10" cols="25" class="form-control"
                name="txtAreaAddress" placeholder="Address..."></textarea><br>
            <input class="btn" type="submit" name="btnSubmit" value="Submit">
            <input class="btn" type="reset" value="Clear">
        </form>
    </body>
</html>