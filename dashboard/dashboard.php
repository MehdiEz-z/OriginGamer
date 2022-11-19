<?php
$Title='Dashboard | Origin Gamer';
include('../includes/header.php');

if(!isset($_SESSION['email'])){
    header('location:../pages/login.php');
}
?>

<body class="dash">
    <!-- <div class="navbar navbar-white bg-white shadow-sm w-100 position-fixed">
        <div class="container-fluid">
            <a class="navbar-brand" href="acceuil.php">
                <img class ="me-1" src="../assets/images/logos/YC-gamer 6.png" alt="logo" height="40">
                <img class ="logod" src="../assets/images/logos/YC gamer 7.png" alt="logo" height="32">
            </a>
            <div class="navbar-item navbar-user dropdown">
                <a href="#" class="navbar-link dropdown-toggle d-flex align-items-center text-decoration-none text-black" data-bs-toggle="dropdown">
                    <img id="user-img-nav"src="../assets/images/user-1.jpg" alt="" /> 
                    <span>
                        <span class="d-none d-md-inline pe-2"><?php echo $_SESSION['username']; ?></span>
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
    <div class="side-bar vh-100 shadow">
        <center class="top-side-bar px-4 pt-4 mb-4">
            <img class="rounded-pill mb-2" style="width:50px;" src="../assets/images/user-1.jpg" alt="admin"/>
            <h6 class="text-black mb-1 text-uppercase"><?php echo $_SESSION['username']; ?></h6>
            <small class="action-admin"><i class="fa-solid fa-circle pe-2"></i>connecté</small>
        </center>
        <a href="#"><i class="fa-solid fa-chart-line me-3"></i><span>Dashboard</span>
        <a href="#"><i class="fa-solid fa-gamepad me-3"></i><span>Jeux</span></a></li>
        <a href="#"><i class="fa-solid fa-sliders me-3"></i><span>Service</span></a>
        <a href="#"><i class="fa-regular fa-circle-question me-3"></i></i><span>A propos</span></a>
        <a href="#"><i class="fa-regular fa-envelope me-3"></i><span>Nous-contactez</span></a>
    </div>
    <div class="dash p-4">
        dd
    </div>  -->


    
    <div class="d-flex">
        <nav class="sidebar position-relative top-0 bottom-0 vh-100 bg-white overflow-hidden">
            <ul class="ps-0">
                <li><a href="#" class="d-flex justify-content-center align-item-center pt-3">
                    <img class ="logod me-2" src="../assets/images/logos/YC-gamer 3.png" alt="logo" height="40">
                    <img class ="logod" src="../assets/images/logos/YC gamer 7.png" alt="logo" height="42">
                </a></li>
                <center class="top-sidebar px-4 pt-4 mb-4">
                    <img class="rounded-pill mb-2" style="width:50px;" src="../assets/images/user/user-1.jpg" alt="admin"/>
                    <h6 class="text-black mb-1 text-uppercase"><?php echo $_SESSION['username']; ?></h6>
                    <small class="text-black-50"><i class="fa-solid fa-circle text-success pe-2"></i>connecté</small>
                </center>
                <li><a href="#">
                    <i class="icon fa-brands fa-slack"></i>
                    <span class="nav-item">Tableau de bord</span>
                </a></li>
                <li><a href="#">
                    <i class="icon fa-solid fa-gamepad"></i>
                    <span class="nav-item">Jeux</span>
                </a></li>
                <li><a href="#">
                    <i class="icon fa-solid fa-user"></i>
                    <span class="nav-item">Profile</span>
                </a></li>
                <li><a href="#">
                    <i class="icon fa-solid fa-gear"></i>
                    <span class="nav-item">Paramétre</span>
                </a></li>
                <li><a href="#">
                    <i class="icon fa-solid fa-circle-question"></i>
                    <span class="nav-item">Aide</span>
                </a></li>
                <li><a href="../pages/logout.php" class="logout">
                    <i class="icon fa-solid fa-right-from-bracket"></i>
                    <span class="nav-item">Déconnexion</span>
                </a></li>         
            </ul>
        </nav>
        <div class="main vh-100">
            <div class="titre">
                <h4 class="">Tableau de bord</h4>
            </div>
            <div class="cartes w-100">
                <div class="carte-1 shadow position-relative">
                    <div class="card-content">
                        <div class="number text-white fs-2 fw-bold">25</div>
                        <div class="card-name text-white">Jeux Pc</div>
                    </div>
                    <div class="img-card">
                        <img class="img-1 position-absolute" src="../assets/images/items/pc.png" alt="img">
                    </div>
                </div>
                <div class="carte-2 shadow position-relative">
                    <div class="card-content">
                        <div class="number text-white fs-2 fw-bold">25</div>
                        <div class="card-name text-white">Jeux PS5</div>    
                    </div>
                    <div class="img-card">
                        <img class="img-2 position-absolute"src="../assets/images/items/ps5.png" alt="img">
                    </div>
                </div> 
                <div class="carte-3 shadow position-relative">
                    <div class="card-content">
                        <div class="number text-white fs-2 fw-bold">25</div>
                        <div class="card-name text-white">Jeux XBOX Serie X</div>
                    </div>
                    <div class="img-card">
                        <img class="img-3 position-absolute" src="../assets/images/items/xbox.png" alt="img">
                    </div>
                </div> 
                <div class="carte-4 shadow position-relative">
                    <div class="card-content">
                        <div class="number text-white fs-2 fw-bold">25</div>
                        <div class="card-name text-white">Jeux Nintindo</div>
                    </div>
                    <div class="img-card">
                        <img class="img-4 position-absolute" src="../assets/images/items/nintindo.png" alt="img">
                    </div>
                </div>  
            </div>
        </div>
    </div>

</body>
</html>