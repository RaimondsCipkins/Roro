<!DOCTYPE html>
<html lang="en">
<head>
    <title>Roro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="topspacer bgded overlay" style="background-image:url('../images/demo/backgrounds/01.png');">
    <!-- ################################################################################################ -->
    <div class="wrapper row1">
        <header id="header" class="hoc clear">
            <!-- ################################################################################################ -->
            <div id="logo" class="fl_left">
                <h1><a href="../index.php">Roro</a></h1>
            </div>
            <!-- ################################################################################################ -->
            <nav id="mainav" class="fl_right">
                <ul class="clear">
                    <li><a href="../index.php">Mājas</a></li>
                    <li class="active"><a class="drop" href="#">Pages</a>
                        <ul>
                            <li class="active"><a href="gallery.php">Galerija</a></li>
                            <li><a href="full-width.php">Produkti</a></li>
                        </ul>
                    </li>
                    <li><a class="drop" href="#">Produkti</a>
                        <ul>
                            <li><a href="#">Suši</a></li>
                            <li><a class="drop" href="#">Picas</a>
                                <ul>
                                    <li><a href="#">Lielās</a></li>
                                    <li><a href="#">Mazās</a></li>
                                    <li><a href="#">Videjās</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="active"><a href="login.php">Login</a></li>
                    <li class="active"><a href="register.php">Register</a></li>
                </ul>
            </nav>
        </header>
    </div>
    <div id="breadcrumb" class="hoc clear">
        <h6 class="heading">Gallerija</h6>
        <ul>
            <li><a href="#">Māja</a></li>
            <li><a href="#">Lorem</a></li>
            <li><a href="#">Ipsum</a></li>
            <li><a href="#">Dolor</a></li>
        </ul>
    </div>
</div>
<div class="wrapper row3">
    <main class="hoc container clear">
        <div class="content">
            <div id="gallery">
                <figure>
                    <?php
                    // define variables and set to empty values
                    $nameErr = $emailErr = $genderErr = $websiteErr = "";
                    $name = $email = $gender = $comment = $website = "";

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (empty($_POST["name"])) {
                            $nameErr = "Name is required";
                        } else {
                            $name = test_input($_POST["name"]);
                            // check if name only contains letters and whitespace
                            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                                $nameErr = "Only letters and white space allowed";
                            }
                        }

                        if (empty($_POST["email"])) {
                            $emailErr = "Email is required";
                        } else {
                            $email = test_input($_POST["email"]);
                            // check if e-mail address is well-formed
                            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                $emailErr = "Invalid email format";
                            }
                        }

                        if (empty($_POST["website"])) {
                            $website = "";
                        } else {
                            $website = test_input($_POST["website"]);
                            // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
                            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                                $websiteErr = "Invalid URL";
                            }
                        }

                        if (empty($_POST["comment"])) {
                            $comment = "";
                        } else {
                            $comment = test_input($_POST["comment"]);
                        }

                        if (empty($_POST["gender"])) {
                            $genderErr = "Gender is required";
                        } else {
                            $gender = test_input($_POST["gender"]);
                        }
                    }

                    function test_input($data) {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }
                    ?>

                    <h2>Validācija</h2>
                    <p><span class="error">* required field</span></p>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        Name: <input type="text" name="name" value="<?php echo $name;?>">
                        <span class="error">* <?php echo $nameErr;?></span>
                        <br><br>
                        E-mail: <input type="text" name="email" value="<?php echo $email;?>">
                        <span class="error">* <?php echo $emailErr;?></span>
                        <br><br>
                        Website: <input type="text" name="website" value="<?php echo $website;?>">
                        <span class="error"><?php echo $websiteErr;?></span>
                        <br><br>
                        <input type="submit" name="submit" value="Submit">
                    </form>

                    <?php
                    echo "<h2>Your Input:</h2>";
                    echo $name;
                    echo "<br>";
                    echo $email;
                    echo "<br>";
                    echo $website;
                    echo "<br>";
                    echo $comment;
                    echo "<br>";
                    echo $gender;
                    ?>

    </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4 bgded overlay" style="background-image:url('../images/demo/backgrounds/03.png');">
    <footer id="footer" class="hoc clear">
        <!-- ################################################################################################ -->
        <div class="one_quarter first">
            <h6 class="heading">Id urna scelerisque</h6>
            <p class="btmspace-30">Lacinia vivamus et dictum ex id malesuada augue sed</p>
            <nav class="btmspace-30">
                <ul class="nospace">
                    <li><a href="../index.php"><i class="fa fa-lg fa-home"></i></a></li>
                    <li><a href="#">Par</a></li>
                    <li><a href="#">Kontakti</a></li>
                    <li><a href="#">Cookies</a></li>
                </ul>
            </nav>
            <ul class="faico clear">
                <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>
        <div class="one_quarter">
            <h6 class="heading">Augue orci phasellus</h6>
            <ul class="nospace linklist contact">
                <li><i class="fa fa-map-marker"></i>
                    <address>
                        Restorānu lokācija
                    </address>
                </li>
                <li><i class="fa fa-phone"></i>+37126126216</li>
                <li><i class="fa fa-fax"></i>+37126126216</li>
                <li><i class="fa fa-envelope-o"></i>rcipkins@gmail.com</li>
            </ul>
        </div>
        <div class="one_quarter">

            </ul>
        </div>
        <div class="one_quarter">
            <h6 class="heading">Nibh ligula maecenas</h6>
            <p class="btmspace-30">Convallis tortor sed gravida ullamcorper aenean sed lectus est donec maximus quam.</p>
            <form method="post" action="#">
                <fieldset>
                    <legend>Newsletter:</legend>
                    <input class="btmspace-15" type="text" value="" placeholder="Vārds">
                    <input class="btmspace-15" type="text" value="" placeholder="Uzvārds">
                    <button type="submit" value="submit">Aizsūtīt</button>
                </fieldset>
            </form>
        </div>
    </footer>
</div>
<div class="wrapper row5">
    <div id="copyright" class="hoc clear">
        <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
        <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    </div>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>