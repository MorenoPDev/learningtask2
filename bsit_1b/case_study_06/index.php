<html>
<head>
    <title>my web page</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
    <div id="wrapper">
    <div class="header">
        <img class="logo" src="logo.jpg" alt="Logo" width="60">
        <h1>QuantumStack Inc.</h1>
        </div>
        <div class="main-navigation">
            <a href="index.php">Home</a>
            <a href="index.php?page=project.php">Project</a>
            <a href="index.php?page=job_posting.php">Job Posting</a>
            <a href="index.php?page=testimonies.php">Testimonies</a>
            <a href="index.php?page=contacts.php">Contacts</a>
        </div>

        <div class="container">

        <?php
            switch (@$_GET["page"]) 
            {
                case "project.php":
                    include("project.php");
                    break;

                case "job_posting.php":
                    include("job_posting.php");
                    break;

                case "testimonies.php":
                    include("testimonies.php");
                    break;

                case "contacts.php":
                    include("contacts.php");
                    break;

                default:
                    include("home.php");
                    break;
            }
            ?>
        </div>

        <div class="footer">
            <p>&copy; 2026 QuantumStack Inc. All Rights Reserved.</p>
        </div>

    </div>
</body>
</html>