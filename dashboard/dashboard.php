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
                                <img src="../assets/images/jeux/game 1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">PUBG</h5>
                                    <p class="card-text">Buttelfield</p>
                                    <a href="#" class="btn btn-primary">Modifier</a>
                                </div>
                            </div>
                            <div class="card-jeux">
                                <img src="../assets/images/jeux/game 1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">PUBG</h5>
                                    <p class="card-text">Buttelfield</p>
                                    <a href="#" class="btn btn-primary">Modifier</a>
                                </div>
                            </div>
                            <div class="card-jeux">
                                <img src="../assets/images/jeux/game 1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">PUBG</h5>
                                    <p class="card-text">Buttelfield</p>
                                    <a href="#" class="btn btn-primary">Modifier</a>
                                </div>
                            </div>
                            <div class="card-jeux">
                                <img src="../assets/images/jeux/game 1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">PUBG</h5>
                                    <p class="card-text">Buttelfield</p>
                                    <a href="#" class="btn btn-primary">Modifier</a>
                                </div>
                            </div>
                            <div class="card-jeux">
                                <img src="../assets/images/jeux/game 2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">PUBG</h5>
                                    <p class="card-text">Buttelfield</p>
                                    <a href="#" class="btn btn-primary">Modifier</a>
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
                                <img src="../assets/images/jeux/game 1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">PUBG</h5>
                                    <p class="card-text">Buttelfield</p>
                                    <a href="#" class="btn btn-primary">Modifier</a>
                                </div>
                            </div>
                            <div class="card-jeux">
                                <img src="../assets/images/jeux/game 2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">PUBG</h5>
                                    <p class="card-text">Buttelfield</p>
                                    <a href="#" class="btn btn-primary">Modifier</a>
                                </div>
                            </div>
                            <div class="card-jeux">
                                <img src="../assets/images/jeux/game 2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">PUBG</h5>
                                    <p class="card-text">Buttelfield</p>
                                    <a href="#" class="btn btn-primary">Modifier</a>
                                </div>
                            </div>
                            <div class="card-jeux">
                                <img src="../assets/images/jeux/game 2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">PUBG</h5>
                                    <p class="card-text">Buttelfield</p>
                                    <a href="#" class="btn btn-warning">Modifier</a>
                                    <a href="#"><i class="delete fa-solid fa-xmark text-danger"></i></a>
                                </div>
                            </div>
                            <div class="card-jeux">
                                <img src="../assets/images/jeux/game 1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">PUBG</h5>
                                    <p class="card-text">Buttelfield</p>
                                    <a href="#" class="btn btn-primary">Modifier</a>
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


                        </div>
                    </div>
                  
                </div>  
            </div>
        </div>
    </section>

</body>
</html>