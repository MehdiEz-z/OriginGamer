<!-- <body class="dash">
    
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
                <li><a href="dashboard.php">
                    <i class="icon fa-brands fa-slack"></i>
                    <span class="nav-item">Tableau de bord</span>
                </a></li>
                <li><a href="games.php">
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
        </nav> -->


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
                <li><a href="../dashboard/ajouter.php">
                    <i class="icon fa-solid fa-square-plus"></i>
                    <span class="nav-item">Ajouter</span>
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
                <li><a href="#" class="logout">
                    <i class="icon fa-solid fa-right-from-bracket"></i>
                    <span class="nav-item">Déconnexion</span>
                </a></li> 
            </ul>
        </div>