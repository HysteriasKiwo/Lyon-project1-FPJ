    <?php include('include/data.php');

    $page = "";

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 'home';
    }
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>BugBurger</title>
    <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/4.4.0/font/octicons.css">

    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>


    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">

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
    <h1>Bug Burger</h1>
</div>

<div class="wrapper">
    <?php include ("include/nav.php"); ?>
    <div class="container body">
        <div class="contenue animated fadeIn">

            <?php

            switch ($page) {
                case 'home':
                    $linkPage = "home.php";
                    break;
                case 'carte':
                    $linkPage = "carte.php";
                    break;
                case 'team':
                    $linkPage = "team.php";
                    break;
                case 'FAQ':
                    $linkPage = "FAQ.php";
                    break;
                case 'contact':
                    $linkPage = "contact.php";
                    break;
                case 'resto':
                    $linkPage = "resto.php";
                    break;
                case 'mentions':
                    $linkPage = "mentions.php";
                    break;
                default:
                    $linkPage = "home.php";
                    break;
            }

            include("pages/$linkPage");
            ?>
            </div>
    </div>


</div>
<div class="container">
    <footer>
        <div class="footer">
            <?php include "include/footer.php"; ?>

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
