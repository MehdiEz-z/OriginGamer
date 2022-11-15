<body>

    <nav class="navbar navbar-white bg-white p-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="accueil.php"><img class ="logo-nav me-3" src="assets/images/logos/YC-gamer 1.png" alt="logo" width="200"></a>
            <div class="d-flex d-none d-lg-flex">
                <input type="text" class="form-control border border-0" placeholder="Trouver des jeux"/>
                <button class="btn btn-search"><i class="fa fa-search"></i></button>
            </div>
            <div class="lien d-none d-lg-flex">
                <a class="text-decoration-none" href="#">Acheter vos jeux</a>
            </div>
            <div class="lien d-none d-lg-flex">
                <a class="text-decoration-none" href="login.php">Connectez-vous</a>
            </div>
            <div class="lien d-none d-lg-flex">
                <a class="text-decoration-none" href="signup.php">Inscrivez-vous</a>
            </div>
            <div class="lien d-none d-lg-flex">   
                <a href="#"><i class="fa-solid fa-heart text"></i></a>
                <a href="#"><i class="fa-solid fa-cart-shopping ps-4"></i></a>
            </div>
            
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-white" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                <a href="accueil.php"><img class ="logo-nav me-3" src="assets/images/logos/YC-gamer 1.png" alt="logo" width="100"></a>
                    <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body p-0 mt-3">
                    <ul class="navbar-nav justify-content-end flex-grow-1">
                        <li class="nav-item lien">
                            <a class="nav-link fs-6 ps-4 py-3" href="#">Acheter vos jeux</a>
                        </li>
                        <li class="nav-item lien">
                            <a class="nav-link fs-6 ps-4 py-3" href="login.php">Connectez-vous</a>
                        </li>
                        <li class="nav-item lien">
                            <a class="nav-link fs-6 ps-4 py-3" href="signup.php">Inscrivez-vous</a>
                        </li>
                    </ul>
                    <form class="d-flex mt-3 ms-3" role="search">
                        <input type="text" class="form-control border border-2" placeholder="Trouver des jeux"/>
                        <button class="btn btn-search"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    