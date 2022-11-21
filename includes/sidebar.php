<?php
if(!isset($_SESSION['email'])){
    header('location:../pages/login.php');
}
?>



<body class="dashb">
    <section class="header">
        <div class="logo">
            <img src="../assets/images/logos/YC-gamer 1.png" alt="">
        </div>
        <div class="search-profil">
            <div class="search">
               <input type="text" placeholder="chercher votre jeux">
                <button><i class="fa-solid fa-magnifying-glass"></i></button> 
            </div>
            <div class="profil">
                <div class="photo-profil">
                    <img src="../assets/images/user/user-1.jpg" alt="">
                </div>
                <div class="situation-profile">
                    <i class="fa-solid fa-circle text-success pe-2"></i>
                    <span><?php echo $_SESSION['username']; ?></span>
                </div>               
            </div>            
        </div>
    </section>
    <section class="main">
        <div class="sidebar">
            <ul class="sidebar-items">
                <li><a href="../dashboard/dashboard.php">
                    <i class="icon fa-brands fa-slack"></i>
                    <span class="nav-item">Tableau de bord</span>
                </a></li>
                <li><a href="#">
                    <i class="icon fa-solid fa-user"></i>
                    <span class="nav-item">Profile</span>
                </a></li>
                <li><a href="#">
                    <i class="icon fa-solid fa-gear"></i>
                    <span class="nav-item">Paramétre</span>
                </a></li>                       
            </ul>
            <ul class="sidebar-bottom-items">
                <li><a href="#">
                    <i class="icon fa-solid fa-circle-question"></i>
                    <span class="nav-item">Aide</span>
                </a></li>
                <li><a href="../pages/logout.php" class="logout">
                    <i class="icon fa-solid fa-right-from-bracket"></i>
                    <span class="nav-item">Déconnexion</span>
                </a></li> 
            </ul>
        </div>