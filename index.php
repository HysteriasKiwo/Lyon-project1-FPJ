<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>BugBurger</title>
    <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/4.4.0/font/octicons.css">

    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>


    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <?php include('include/data.php');

    $page = "";

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 'home';
    }
    ?>

</head>

<body>
<div class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="item active">
        </div>
        <div class="item">
        </div>
        <div class="item">
        </div>
        <div class="item">
        </div>
        <div class="item">
        </div>
        <div class="item">
        </div>
    </div>
</div>
<div class="title <?php if ($page == "home") { effectHazard(); } ?>">
    Bug Burger
</div>
<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar" class="active">
        <div class="sidebar-header" id="sidebarCollapse">
            <div class="list-unstyled components">
                <i class="glyphicon glyphicon-align-justify"></i>
                <span></span>
            </div>
        </div>
        <ul class="list-unstyled components">
            <li<?php if ($page == "home") {
                echo ' class="active"';
            } ?>>
                <a href="?page=home">
                    <i class="glyphicon glyphicon-home"></i>
                    Home
                </a>
            </li>
            <li<?php if ($page == "carte") {
                echo ' class="active"';
            } ?>>
                <a href="?page=carte">
                    <i class="glyphicon glyphicon-cutlery"></i>
                    La Carte
                </a>
            </li>
            <li<?php if ($page == "resto") {
                echo ' class="active"';
            } ?>>
                <a href="?page=resto">
                    <i class="glyphicon glyphicon-map-marker"></i>
                    Restaurants
                </a>
            </li>
            <li<?php if ($page == "team") {
                echo ' class="active"';
            } ?>>
                <a href="?page=team">
                    <i class="mega-octicon octicon-organization"></i>
                    Team
                </a>
            </li>
            <li<?php if ($page == "contact") {
                echo ' class="active"';
            } ?>>
                <a href="?page=contact">
                    <i class="glyphicon glyphicon-send"></i>
                    Contact
                </a>
            </li>
            <li<?php if ($page == "FAQ") {
                echo ' class="active"';
            } ?>>
                <a href="?page=FAQ">
                    <i class="glyphicon glyphicon-question-sign"></i>
                    FAQ
                </a>
            </li>
        </ul>
    </nav>
    <div class="container body">
        <div class="contenue animated fadeIn">
            <?php

            switch ($page) {
                case 'home':
                    include("home.php");
                    break;
                case 'carte':
                    include("carte.php");
                    break;
                case 'team':
                    include("team.php");
                    break;
                case 'FAQ':
                    include("FAQ.php");
                    break;
                case 'contact':
                    include("contact.php");
                    break;
                case 'resto':
                    include("resto.php");
                    break;
                case 'mentions':
                    include("mentions.php");
                    break;
            }
            ?>
        </div>
    </div>


</div>
<div class="container">
    <footer>
        <div class="footer">
            <a href="?page=mentions">Mentions légale</a>
        </div>
    </footer>

</div>


<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<!-- Bootstrap Js CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });

</script>

</body>
</html>
