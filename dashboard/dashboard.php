<?php
$Title='Dashboard | Origin Gamer';
include('../includes/header.php');
include('../includes/sidebar.php');

if(isset($_POST['sauvegarder'])){
    $titre          =mysqli_real_escape_string($connect,$_POST['game-titre']);
    $description    =mysqli_real_escape_string($connect,$_POST['game-description']);
    $prix           =$_POST['game-price']; 
    $categorie      =$_POST['game-categorie'];
    $date           =$_POST['game-date'];
    $image          =$_FILES["game-image"]["name"].'_'.uniqid();
    move_uploaded_file($_FILES['game-image']['tmp_name'],'imgs-jeux/'.$image);

    $requete        ="INSERT INTO games_info (title,description,price,date,category_id,image) 
                        VALUES ('$titre','$description','$prix','$date','$categorie','$image')";
    $query          =mysqli_query($connect,$requete);
    
    if($query){
        header('location:dashboard.php');
    }   
    
}

if(isset($_GET['Sid'])){

    $id         = $_GET['Sid'];
    $requete    ="DELETE FROM games_info WHERE id='$id'";
    $query      =mysqli_query($connect,$requete);
    if($query){
        unlink("imgs-jeux/".$_GET['imgs-jeux']);

        header('location:dashboard.php');
    }
    
}   
?>

        <div class="main-content">
            <div class="overview">
                
                <div class="title">
                    <h4>Tableau de bord</h4>
                    <a href="#modal-game" data-bs-toggle="modal" name="ajouter-jeux" class="btn-ajout rounded-pill"><i class="fa-solid fa-plus text-white"></i></a>
                </div>
                <div class="cards mt-5">

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
                            while($rows = mysqli_fetch_assoc($query)){
                                
                                echo'
                                    <div class="card-jeux">
                                        <img class="card-img-top rounded-top" src="imgs-jeux/'.$rows['image'].'" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title mb-2">'.$rows['title'].'</h5>
                                            <p class="card-text text-truncate mb-1">'.$rows['description'].'</p>
                                            <h6 class="card-price mb-2">'.$rows['price'].'Dhs</h6>
                                            <h6 class="card-date mb-2">'.$rows['date'].'</h6>
                                            <a href="modifier.php?id='.$rows['id'].'" class="btn btn-warning">Modifier</a>
                                            <a href="dashboard.php?Sid='.$rows['id'].'&imgs-jeux='.$rows['image'].'"><i class="delete fa-solid fa-xmark text-danger"></i></a>
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
                            while($rows = mysqli_fetch_assoc($query)){
                                
                                echo'
                                    <div class="card-jeux">
                                        <img class="card-img-top rounded-top" src="imgs-jeux/'.$rows['image'].'" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title mb-2">'.$rows['title'].'</h5>
                                            <p class="card-text text-truncate mb-1">'.$rows['description'].'</p>
                                            <h6 class="card-price mb-2">'.$rows['price'].'Dhs</h6>
                                            <h6 class="card-date mb-2">'.$rows['date'].'</h6>
                                            <a href="modifier.php?id='.$rows['id'].'" class="btn btn-warning">Modifier</a>
                                            <a href="dashboard.php?Sid='.$rows['id'].'&imgs-jeux='.$rows['image'].'"><i class="delete fa-solid fa-xmark text-danger"></i></a>
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
                                <div class="card-name text-white">Jeux XBOX</div>
                            </div>
                            <div class="img-card">
                                <img class="img-3 position-absolute" src="../assets/images/items/xbox.png" alt="img">
                            </div>
                        </div> 
                        <div class="cards-games">
                        <?php
                            while($rows = mysqli_fetch_assoc($query)){
                                
                                echo'
                                    <div class="card-jeux">
                                        <img class="card-img-top rounded-top" src="imgs-jeux/'.$rows['image'].'" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title mb-2">'.$rows['title'].'</h5>
                                            <p class="card-text text-truncate mb-1">'.$rows['description'].'</p>
                                            <h6 class="card-price mb-2">'.$rows['price'].'Dhs</h6>
                                            <h6 class="card-date mb-2">'.$rows['date'].'</h6>
                                            <a href="modifier.php?id='.$rows['id'].'" class="btn btn-warning">Modifier</a>
                                            <a href="dashboard.php?Sid='.$rows['id'].'&imgs-jeux='.$rows['image'].'"><i class="delete fa-solid fa-xmark text-danger"></i></a>
                                        </div>
                                    </div>';                         
                            }
                        ?>
                        </div>
                    </div>
                    

                    <div class="card-nintindo">
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
                            while($rows = mysqli_fetch_assoc($query)){
                                
                                echo'
                                    <div class="card-jeux">
                                        <img class="card-img-top rounded-top" src="imgs-jeux/'.$rows['image'].'" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title mb-2">'.$rows['title'].'</h5>
                                            <p class="card-text text-truncate mb-1">'.$rows['description'].'</p>
                                            <h6 class="card-price mb-2">'.$rows['price'].'Dhs</h6>
                                            <h6 class="card-date mb-2">'.$rows['date'].'</h6>
                                            <a href="modifier.php?id='.$rows['id'].'&imgs-jeux='.$rows['image'].'" class="btn btn-warning">Modifier</a>
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

    <div class="modal fade" id="modal-game">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="modal-header">
						<h5 class="modal-title">Ajouter un jeux</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
                        <input type="hidden" name="game-id"> 
                        <div class="mb-2">
                            <label class="form-label">Titre*</label>
                            <input class="form-control" name="game-titre" type="text" required>
                        </div>

                        <div class="mb-2 text-start">
                            <label class="form-label">Categories*</label>
                            <select class="form-select" name="game-categorie" required>
                                <option value="">Please select</option>
                                <?php
                                    $requete    = "SELECT * FROM category";
                                    $query      =mysqli_query($connect,$requete);
                                    while($category   =mysqli_fetch_assoc($query)){
                                        echo'
                                            <option value="'.$category['id'].'">'.$category['name'].'</option>';  
                                    }
                                ?>
                                                                             
                            </select>
                        </div>
    
                        <div class="mb-2">
                            <label class="col-form-label ">Description*</label>
                            <textarea class="form-control" name="game-description" rows="1" required></textarea>
                        </div>
                        <div class="mb-2">
                            <label class="col-form-label">Images*</label>
                            <input class="form-control" name="game-image" type="file">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Prix*</label>
                            <input class="form-control" name="game-price" type="number" min="1" max="100000" step="0.01" required>
                        </div>
                        <div class="mb-4"> 
                            <label class="form-label">Date*</label>
                            <input class="form-control" name="game-date" type="datetime-local" value="" required>
                        </div>
						
					</div>
					<div class="modal-footer">
						<a href="#" class="bg-light p-2 rounded-1 border border-0 text-dark" data-bs-dismiss="modal">Annuler</a>
						<button type="submit" name="sauvegarder" class="bg-success ms-2 p-2 rounded-1 text-white border border-0">Sauvegarder</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>