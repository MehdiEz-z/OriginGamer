<?php
$Title='Dashboard | Origin Gamer';
include('../includes/header.php');

if(!isset($_SESSION['email'])){
    header('location:../pages/login.php');
}
include('../includes/sidebar.php')

?>

        <div class="main-content">
            <div class="overview">
                
                <div class="title">
                    <h4>Tableau de bord</h4>
                </div>
                <?php if (isset($_SESSION['message'])): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Génial!</strong>
                        <?php 
                            echo $_SESSION['message']; 
                            unset($_SESSION['message']);	
                        ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></span>
                    </div>
                <?php endif ?>
                <div class="cards">

                    <div class="cards-pc">
                        <div class="card-dash card-1">
                            <div class="card-content">
                                <div class="number text-white fs-2 fw-bold">25</div>
                                <div class="card-name text-white">Jeux Pc</div>
                            </div>
                            <div class="img-card">
                                <img class="img-1 position-absolute" src="../assets/images/items/pc.png" alt="img">
                            </div>
                        </div>
                        <div class="cards-games">
                            <div class="card-jeux">
                                <img class="card-img-top rounded-top" src="../assets/images/jeux/game 1.jpg" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title mb-2">PUBG</h5>
                                    <p class="card-text text-truncate mb-1">Buttelfield</p>
                                    <h6 class="card-price mb-2">140.00Dhs</h6>
                                    <h6 class="card-date mb-2">20-11-2022</h6>
                                    <a href="#" class="btn btn-warning">Modifier</a>
                                    <a href="#"><i class="delete fa-solid fa-xmark text-danger"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                        

                    <div class="card-ps5">
                        <div class="card-dash card-2 ">
                            <div class="card-content">
                                <div class="number text-white fs-2 fw-bold">25</div>
                                <div class="card-name text-white">Jeux PS5</div>    
                            </div>
                            <div class="img-card">
                                <img class="img-2 position-absolute"src="../assets/images/items/ps5.png" alt="img">
                            </div>
                        </div> 
                        <div class="cards-games">
                            <div class="card-jeux">
                                <img class="card-img-top rounded-top" src="../assets/images/jeux/game 1.jpg" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title mb-2">PUBG</h5>
                                    <p class="card-text mb-1">Buttelfield</p>
                                    <h6 class="card-price mb-3">140.00Dhs</h6>
                                    <h6 class="card-date mb-2">20-11-2022</h6>
                                    <a href="#" class="btn btn-warning">Modifier</a>
                                    <a href="#"><i class="delete fa-solid fa-xmark text-danger"></i></a>
                                </div>
                            </div>   
                        </div>
                    </div>
                    
        
                    <div class="card-xbox">
                        <div class="card-dash card-3">
                            <div class="card-content">
                                <div class="number text-white fs-2 fw-bold">25</div>
                                <div class="card-name text-white">Jeux XBOX Serie X</div>
                            </div>
                            <div class="img-card">
                                <img class="img-3 position-absolute" src="../assets/images/items/xbox.png" alt="img">
                            </div>
                        </div> 
                        <div class="cards-games">
                            <div class="card-jeux">
                                <img class="card-img-top rounded-top" src="../assets/images/jeux/game 1.jpg" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title mb-2">PUBG</h5>
                                    <p class="card-text mb-1">Buttelfield</p>
                                    <h6 class="card-price mb-3">140.00Dhs</h6>
                                    <h6 class="card-date mb-2">20-11-2022</h6>
                                    <a href="#" class="btn btn-warning">Modifier</a>
                                    <a href="#"><i class="delete fa-solid fa-xmark text-danger"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="card-xbox">
                        <div class="card-dash card-4">
                            <div class="card-content">
                                <div class="number text-white fs-2 fw-bold">25</div>
                                <div class="card-name text-white">Jeux Nintindo</div>
                            </div>
                            <div class="img-card">
                                <img class="img-4 position-absolute" src="../assets/images/items/nintindo.png" alt="img">
                            </div>
                        </div>
                        <div class="cards-games">
                            <div class="card-jeux">
                                <img class="card-img-top rounded-top" src="../assets/images/jeux/game 1.jpg" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title mb-2">PUBG</h5>
                                    <p class="card-text mb-1">Buttelfield</p>
                                    <h6 class="card-price mb-3">140.00Dhs</h6>
                                    <h6 class="card-date mb-2">20-11-2022</h6>
                                    <a href="#" class="btn btn-warning">Modifier</a>
                                    <a href="#"><i class="delete fa-solid fa-xmark text-danger"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>  
            </div>
        </div>
    </section>

</body>
</html>