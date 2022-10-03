<?php

if($_SESSION['role'] == 'staff') {

    echo '<li class="nav-item menu-open">
    <a href="#" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
        Home
        <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    </li>';

    echo '<li class="nav-item">
    <a href="pages/widgets.php" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
        Application List
        </p>
    </a>
    </li>'; 
}

if($_SESSION['role'] == 'student') {

    echo '<li class="nav-item">
    <a href="#" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
        Home
        <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    </li>';

    echo '<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-edit"></i>
        <p>
        Application
        <i class="fas fa-angle-left right"></i>
        </p>
    </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="../../pages/housemateApplication.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Housemate Application</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="applicationStatus.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Application Status</p>
            </a>
            </li>
        </ul>
    </li>'; 

}

echo '<li class="nav-item">
    <a href="StudentLogin.php" class ="nav-link">
        <i class="nav-icon fas fa-angle-left"> </i>
            <p>Log Out</p>
       
    </a>
</li>'; 



?>