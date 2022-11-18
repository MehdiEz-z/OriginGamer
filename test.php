<?php
$Title='Dashboard | Origin Gamer';
include('header.php');

if(!isset($_SESSION['email'])){
    header('location:login.php');
}
?>

<body>
    <div class="navbar navbar-white bg-white px-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="accueil.php"><img class ="me-3" src="assets/images/logos/YC-gamer 1.png" alt="logo" width="120"></a>
            <div class="navbar-item navbar-user dropdown">
                <a href="#" class="navbar-link dropdown-toggle d-flex align-items-center text-decoration-none text-black" data-bs-toggle="dropdown">
                    <img id="user-img"src="assets/images/user-2.jpg" alt="" /> 
                    <span>
                        <span class="d-none d-md-inline"><?php echo $_SESSION['username'] ?></span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end me-1">
                    <a href="#" class="dropdown-item">Edit Profile</a>
                    <a href="#" class="dropdown-item">Setting</a>
                    <div class="dropdown-divider"></div>
                    <a href="logout.php" class="dropdown-item">Log Out</a>
                </div>
            </div>
        </div>
        
    </div>

    <div class="d-flex flex-column p-3 text-white bg-white position-fixed shadow h-100" style="width : 250px;">
        <ul class="nav nav-pills flex-column mb-auto">
            <li>
                <a href="#" class="nav-link text-black"><i class="fa-solid fa-chart-line me-3"></i>Dashboard</a>
            </li>
            <li>
                <a href="#" class="nav-link text-black"><i class="fa-solid fa-gamepad me-3"></i></i>Jeux</a>  
            </li>
        </ul>
        <hr>
    </div>
</body>
</html>