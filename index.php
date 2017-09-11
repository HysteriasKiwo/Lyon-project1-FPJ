<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bug Burger</title>
    <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>

    <link href="https://fonts.googleapis.com/css?family=Amatica+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>

    </style>


</head>

<body>
<!-- Inspired by https://codepen.io/transportedman/pen/NPWRGq -->

<div class="carousel slide carousel-fade" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
        </div>
        <div class="item">
        </div>
        <div class="item">
        </div>
    </div>
</div>

<!-- Remeber to put all the content you want on top of the slider below the slider code -->

<div class="title">
    BUG BURGER
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 'home';

            }


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
            }


            ?>

        </div>

    </div>


</div>


<div class="wrapper">

    <!-- Sidebar Holder -->
    <nav id="sidebar" class="active">

        <!--    <div class="sidebar-header">

          </div>-->

        <ul class="list-unstyled components">
            <!--            <li>
                            <a href="#" id="sidebarCollapse">
                                <i class="glyphicon glyphicon-menu-hamburger"></i>
                            </a>


                        </li>-->
            <li class="active">
                <a href="?page=home">
                    <i class="glyphicon glyphicon-home"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="?page=carte">
                    <i class="glyphicon glyphicon-briefcase"></i>
                    La Carte
                </a>
            </li>
            <li>
                <a href="?page=resto">
                    <i class="glyphicon glyphicon-cutlery"></i>
                    Restaurants
                </a>
            </li>
            <li>
                <a href="?page=team">
                    <i class="glyphicon glyphicon-link"></i>
                    Team
                </a>
            </li>
            <li>
                <a href="?page=FAQ">
                    <i class="glyphicon glyphicon-paperclip"></i>
                    FAQ
                </a>
            </li>
            <li>
                <a href="?page=contact">
                    <i class="glyphicon glyphicon-send"></i>
                    Contact
                </a>
            </li>
        </ul>
    </nav>

</div>

<div class="footer">



</div>


<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js'></script>

<script>

    $('.carousel').carousel();


</script>

</body>
</html>
