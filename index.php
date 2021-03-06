<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v3.5.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.5.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900">
  <link rel="stylesheet" href="assets/et-line-font-plugin/style.css">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/socicon/css/socicon.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<section id="menu-0">

    <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="https://mobirise.com" class="navbar-logo"><img src="assets/images/logo.png" alt="Mobirise"></a>
                        <a class="navbar-caption" href="https://mobirise.com">CS2102</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar"><li class="nav-item"><a class="nav-link link" href="https://mobirise.com/">OVERVIEW</a></li><li class="nav-item dropdown"><a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="https://mobirise.com/">FEATURES</a><div class="dropdown-menu"><a class="dropdown-item" href="https://mobirise.com/">Mobile friendly</a><a class="dropdown-item" href="https://mobirise.com/">Based on Bootstrap</a><div class="dropdown"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown-submenu" href="https://mobirise.com/">Trendy blocks</a><div class="dropdown-menu dropdown-submenu"><a class="dropdown-item" href="https://mobirise.com/">Image/content slider</a><a class="dropdown-item" href="https://mobirise.com/">Contact forms</a><a class="dropdown-item" href="https://mobirise.com/">Image gallery</a><a class="dropdown-item" href="https://mobirise.com/">Mobile menu</a><a class="dropdown-item" href="https://mobirise.com/">Google maps</a><a class="dropdown-item" href="https://mobirise.com/">Social buttons</a><a class="dropdown-item" href="https://mobirise.com/">Google fonts</a><a class="dropdown-item" href="https://mobirise.com/">Video background</a></div></div><a class="dropdown-item" href="https://mobirise.com/">Host anywhere</a></div></li><li class="nav-item dropdown"><a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="https://mobirise.com/">HELP</a><div class="dropdown-menu"><a class="dropdown-item" href="http://forums.mobirise.com/">Forum</a><a class="dropdown-item" href="https://mobirise.com/">Tutorials</a><a class="dropdown-item" href="https://mobirise.com/">Contact us</a></div></li><li class="nav-item nav-btn"><a class="nav-link btn btn-white btn-white-outline" href="https://mobirise.com/">DOWNLOAD</a></li></ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>

<section class="engine"><a rel="external" href="https://mobirise.com">top mobile web site creator software</a></section><section class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background" id="header1-1" style="background-image: url(assets/images/jumbotron.jpg);">

    

    <div class="mbr-table-cell">

        <div class="container">
            <div class="row">
                <div class="mbr-section col-md-10 col-md-offset-1 text-xs-center">

                    <h1 class="mbr-section-title display-1">CS2102</h1>
                    <p class="mbr-section-lead lead">The pre-alpha demo. Now available on github.</p>
                    
                </div>
            </div>
        </div>
    </div>

    <div class ="mbr-table-cell">
      <p class = "mbr-section-lead lead"> Demo Book Catalog</p>
            <?php
    $dbconn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=postgres")
    or die('Could not connect: ' . pg_last_error());
    ?>

<tr>
<td style="background-color:#eeeeee;">
<form method="post">
        Title: <input type="text" name="Title" id="Title">

        <select name="Language"> <option value="">Select Language</option> </select>

        <input type="radio" name="Format" id="Format1" value="hardcover">hardcover
        <input type="radio" name="Format" id="Format2" value="paperback">paperback

        <input type="submit" name="formSubmit" value="Search" >
</form>

<?php if(isset($_POST['formSubmit'])) 
{
  $title = $_POST['Title'];
  $query = "SELECT DISTINCT b.title FROM book b WHERE b.title LIKE '%$title%'";
  $result = pg_query($query) or die('Query failed: ' . pg_last_error());


  echo "<b>SQL: </b>".$query."<br></br>";
  while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
  } 
  pg_free_result($result);
}
?>
</td> </tr>
<?php
pg_close($dbconn);
?>
</div>

    

</section>

<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-2" style="background-color: rgb(50, 50, 50); padding-top: 1.75rem; padding-bottom: 1.75rem;">
    
    <div class="container">
        <p class="text-xs-center">Copyright (c) 2016 CS2102</p>
    </div>
</footer>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/viewportChecker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>