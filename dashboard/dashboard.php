<?php
$Title='Dashboard | Origin Gamer';
include('../includes/header.php');

if(!isset($_SESSION['email'])){
    header('location:../pages/login.php');
}
include('../includes/sidebar.php');

if(isset($_GET['Sid'])){

    $id         = $_GET['Sid'];
    $requete    ="DELETE FROM games_info WHERE id='$id'";
    $query      =mysqli_query($connect,$requete);
    if($query){
        header('location:dashboard.php');
    }
    
}   
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
                                <div class="number text-white fs-2 fw-bold">
                                <?php
                                    $requete    = "SELECT * FROM games_info WHERE category_id = 1 ";
                                    $query      = mysqli_query($connect, $requete);
                                    
                                    echo mysqli_num_rows($query);                                                           
                                ?>   
                                </div>
                                <div class="card-name text-white">Jeux Pc</div>
                            </div>
                            <div class="img-card">
                                <img class="img-1 position-absolute" src="../assets/images/items/pc.png" alt="img">
                            </div>
                        </div>
                        <div class="cards-games">
                            
                        <?php
                            $requete    ="SELECT * FROM games_info WHERE category_id = 1";
                            $query      = mysqli_query($connect, $requete);
        
                            while($rows = mysqli_fetch_assoc($query)){
                                
                                echo'
                                    <div class="card-jeux">
                                        <img class="card-img-top rounded-top" src="'.$rows['image'].'" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title mb-2">'.$rows['title'].'</h5>
                                            <p class="card-text text-truncate mb-1">'.$rows['description'].'</p>
                                            <h6 class="card-price mb-2">'.$rows['price'].'Dhs</h6>
                                            <h6 class="card-date mb-2">'.$rows['date'].'</h6>
                                            <a href="dashboard.php?id='.$rows['id'].'" class="btn btn-warning">Modifier</a>
                                            <a href="dashboard.php?Sid='.$rows['id'].'"><i class="delete fa-solid fa-xmark text-danger"></i></a>
                                        </div>
                                    </div>';                         
                            }
                        ?>

                        </div>
                    </div>
                        

                    <div class="card-ps5">
                        <div class="card-dash card-2 ">
                            <div class="card-content">
                                <div class="number text-white fs-2 fw-bold">
                                <?php
                                    $requete    = "SELECT * FROM games_info WHERE category_id = 2";
                                    $query      = mysqli_query($connect, $requete);
                                    
                                    echo mysqli_num_rows($query);                                                           
                                ?> 
                                </div>
                                <div class="card-name text-white">Jeux PS5</div>    
                            </div>
                            <div class="img-card">
                                <img class="img-2 position-absolute"src="../assets/images/items/ps5.png" alt="img">
                            </div>
                        </div> 
                        <div class="cards-games">
                        <?php
                            $requete    ="SELECT * FROM games_info WHERE category_id = 2";
                            $query      = mysqli_query($connect, $requete);
        
                            while($rows = mysqli_fetch_assoc($query)){
                                
                                echo'
                                    <div class="card-jeux">
                                        <img class="card-img-top rounded-top" src="'.$rows['image'].'" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title mb-2">'.$rows['title'].'</h5>
                                            <p class="card-text text-truncate mb-1">'.$rows['description'].'</p>
                                            <h6 class="card-price mb-2">'.$rows['price'].'Dhs</h6>
                                            <h6 class="card-date mb-2">'.$rows['date'].'</h6>
                                            <a href="dashboard.php?id='.$rows['id'].'" class="btn btn-warning">Modifier</a>
                                            <a href="dashboard.php?Sid='.$rows['id'].'"><i class="delete fa-solid fa-xmark text-danger"></i></a>
                                        </div>
                                    </div>';                         
                            }
                        ?>  
                        </div>
                    </div>
                    
        
                    <div class="card-xbox">
                        <div class="card-dash card-3">
                            <div class="card-content">
                                <div class="number text-white fs-2 fw-bold">
                                <?php
                                    $requete    = "SELECT * FROM games_info WHERE category_id = 3 ";
                                    $query      = mysqli_query($connect, $requete);
                                    
                                    echo mysqli_num_rows($query);                                                           
                                ?> 
                                </div>
                                <div class="card-name text-white">Jeux XBOX Serie X</div>
                            </div>
                            <div class="img-card">
                                <img class="img-3 position-absolute" src="../assets/images/items/xbox.png" alt="img">
                            </div>
                        </div> 
                        <div class="cards-games">
                        <?php
                            $requete    ="SELECT * FROM games_info WHERE category_id = 3";
                            $query      = mysqli_query($connect, $requete);
        
                            while($rows = mysqli_fetch_assoc($query)){
                                
                                echo'
                                    <div class="card-jeux">
                                        <img class="card-img-top rounded-top" src="'.$rows['image'].'" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title mb-2">'.$rows['title'].'</h5>
                                            <p class="card-text text-truncate mb-1">'.$rows['description'].'</p>
                                            <h6 class="card-price mb-2">'.$rows['price'].'Dhs</h6>
                                            <h6 class="card-date mb-2">'.$rows['date'].'</h6>
                                            <a href="dashboard.php?id='.$rows['id'].'" class="btn btn-warning">Modifier</a>
                                            <a href="dashboard.php?Sid='.$rows['id'].'"><i class="delete fa-solid fa-xmark text-danger"></i></a>
                                        </div>
                                    </div>';                         
                            }
                        ?>
                        </div>
                    </div>
                    

                    <div class="card-xbox">
                        <div class="card-dash card-4">
                            <div class="card-content">
                                <div class="number text-white fs-2 fw-bold">
                                <?php
                                    $requete    = "SELECT * FROM games_info WHERE category_id = 4 ";
                                    $query      = mysqli_query($connect, $requete);
                                    
                                    echo mysqli_num_rows($query);                                                           
                                ?> 
                                </div>
                                <div class="card-name text-white">Jeux Nintindo</div>
                            </div>
                            <div class="img-card">
                                <img class="img-4 position-absolute" src="../assets/images/items/nintindo.png" alt="img">
                            </div>
                        </div>
                        <div class="cards-games">
                        <?php
                            $requete    ="SELECT * FROM games_info WHERE category_id = 4";
                            $query      = mysqli_query($connect, $requete);
        
                            while($rows = mysqli_fetch_assoc($query)){
                                
                                echo'
                                    <div class="card-jeux">
                                        <img class="card-img-top rounded-top" src="'.$rows['image'].'" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title mb-2">'.$rows['title'].'</h5>
                                            <p class="card-text text-truncate mb-1">'.$rows['description'].'</p>
                                            <h6 class="card-price mb-2">'.$rows['price'].'Dhs</h6>
                                            <h6 class="card-date mb-2">'.$rows['date'].'</h6>
                                            <a href="dashboard.php?id='.$rows['id'].'" class="btn btn-warning">Modifier</a>
                                            <a href="dashboard.php?Sid='.$rows['id'].'"><i class="delete fa-solid fa-xmark text-danger"></i></a>
                                        </div>
                                    </div>';                         
                            }
                        ?>
                        </div>
                    </div>                 
                </div>  
            </div>
        </div>
    </section>

</body>
</html>