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
                    <form action="login" method="post">
                        <form action="/action_page.php">
                            <div class="form-group">
                                <label for="name">Vārds:</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="name">Uzvārds:</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="name">Email:</label>
                                <input type="email" class="form-control" id="email">
                                <div class="form-group">
                                    <label for="name">Telefons:</label>
                                    <input type="email" class="form-control" id="email">
                            <div class="checkbox">
                                <label><input type="checkbox"> Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                    <hr>
                    <div class="container signin">
                        <h2> Add a comment </h2>
                        <textarea rows="4" cols="50" name="comment" form="usrform" maxlength="200">
                Enter text here...</textarea>
                        <input type="submit" value="Submit">
                        <!-- ################################################################################################ -->
                    </div>
                    <!-- ################################################################################################ -->
                    <!-- / main body -->
                    <div class="clear"></div>
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