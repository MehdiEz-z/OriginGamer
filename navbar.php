<body>

    <div class="d-flex align-items-center justify-content-between px-3 py-4">      
        <div>
            <a href="accueil.php"><img class ="logo-nav me-3" src="assets/images/logos/YC-gamer 1.png" alt="logo" width="200"></a>
        </div>
        <div class="d-flex d-none d-lg-flex">
            <input type="text" class="form-control border border-0" placeholder="Trouver des jeux" />
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

        <!-- Button trigger modal -->
        <div class="mobile-toggler d-lg-none">
            <a href="#" data-bs-toggle="modal" data-bs-target="#navbarModal">
                <i class="fa-solid fa-bars fa-lg text-black ms-3"></i>
            </a>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="navbarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog m-0 w-50">
                <div class="modal-content rounded-0 vh-100 overflow-scroll">

                    <div class="modal-body">
                        <div class="">
                            <a class="text-decoration-none" href="#">Acheter vos jeux</a>
                        </div>
                        <div class="">
                            <a class="text-decoration-none" href="login.php">Connectez-vous</a>
                        </div>
                        <div class="">
                            <a class="text-decoration-none" href="signup.php">Inscrivez-vous</a>
                        </div>  
                    </div>

                </div>
            </div>
        </div>
    </div>
    