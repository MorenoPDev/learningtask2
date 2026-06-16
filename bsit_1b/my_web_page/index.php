<html>
<head>
    <title>my web page</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
    <div id="wrapper">
    <div class="header">
        
        </div>
        <div class="main-navigation">
            <a href="index.php">Home</a> /
            <a href="index.php?page=about_us.php">About us</a> /
            <a href="index.php?page=mission_vision.php">Mission and vision</a> /
            <a href="index.php?page=gallery.php">Gallery</a>
        </div>

        <div class="container">

        <?php
            switch (@$_GET["page"]) 
            {
                case "about_us.php":
                    include("about_us.php");
                    break;

                case "mission_vision.php":
                    include("mission_vision.php");
                    break;

                case "gallery.php":
                    include("gallery.php");
                    break;

                default:
                    include("home.php");
                    break;
            }
            ?>

        </div>

        <div class="footer">
        </div>

    </div>
</body>
</html>