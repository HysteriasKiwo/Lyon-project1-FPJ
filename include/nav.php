<!-- Sidebar Holder -->
<nav id="sidebar" class="active">
    <div class="sidebar-header" id="sidebarCollapse">
        <div class="list-unstyled components">
            <i class="glyphicon glyphicon-align-justify"></i>
            <span></span>
        </div>
    </div>
    <ul class="list-unstyled components">
        <li<?php echo ($page == "home") ? ' class="active"' : '' ; ?>>
            <a href="?page=home">
                <i class="glyphicon glyphicon-home"></i>
                Home
            </a>
        </li>
        <li<?php echo ($page == "carte") ? ' class="active"' : '' ; ?>>
            <a href="?page=carte">
                <i class="glyphicon glyphicon-cutlery"></i>
                La Carte
            </a>
        </li>
        <li<?php echo ($page == "resto") ? ' class="active"' : '' ; ?>>
            <a href="?page=resto">
                <i class="glyphicon glyphicon-map-marker"></i>
                Restaurants
            </a>
        </li>
        <li<?php echo ($page == "team") ? ' class="active"' : '' ; ?>>
            <a href="?page=team">
                <i class="mega-octicon octicon-organization"></i>
                Team
            </a>
        </li>
        <li<?php echo ($page == "contact") ? ' class="active"' : '' ; ?>>
            <a href="?page=contact">
                <i class="glyphicon glyphicon-envelope"></i>
                Contact
            </a>
        </li>
        <li<?php echo ($page == "FAQ") ? ' class="active"' : '' ; ?>>
            <a href="?page=FAQ">
                <i class="glyphicon glyphicon-question-sign"></i>
                FAQ
            </a>
        </li>
    </ul>
</nav>