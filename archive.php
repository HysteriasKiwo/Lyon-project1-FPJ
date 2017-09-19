<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!--<div class="navbar-header">
            <a class="navbar-brand" href="#">Bug Burger</a>
        </div>-->
        <ul class="nav navbar-nav">
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
                    <i class="glyphicon glyphicon-briefcase"></i>
                    La Carte
                </a>
            </li>
            <li<?php if ($page == "resto") {
                echo ' class="active"';
            } ?>>
                <a href="?page=resto">
                    <i class="glyphicon glyphicon-cutlery"></i>
                    Restaurants
                </a>
            </li>
            <li<?php if ($page == "team") {
                echo ' class="active"';
            } ?>>
                <a href="?page=team">
                    <i class="glyphicon glyphicon-link"></i>
                    Team
                </a>
            </li>
            <li<?php if ($page == "FAQ") {
                echo ' class="active"';
            } ?>>
                <a href="?page=FAQ">
                    <i class="glyphicon glyphicon-paperclip"></i>
                    FAQ
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
        </ul>
    </div>
</nav>
