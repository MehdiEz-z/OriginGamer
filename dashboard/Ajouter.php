<?php
$Title='Ajouter | Origin Gamer';
include('../includes/header.php');

if(!isset($_SESSION['email'])){
    header('location:../pages/login.php');
}
include('../includes/sidebar.php');


if(isset($_POST['ajouter'])){
    $titre          =$_POST['game-titre'];
    $description    =$_POST['game-description'];
    $prix           =$_POST['game-price']; 
    $categorie      =$_POST['game-categorie'];
    $date           =$_POST['game-date'];
    $image          =$_FILES["game-image"]["name"];
    $folder         ="imgs-jeux/".$image;
    move_uploaded_file($_FILES['game-image']['tmp_name'],$folder);

    $requete        ="INSERT INTO games_info (title,description,price,date,category_id,image) 
                        VALUES ('$titre','$decription','$prix','$date','$categorie','$folder')";
    $query          =mysqli_query($connect,$requete);
    
    if($query){
        $_SESSION['message'] = "Jeux ajouté avec succé !";      
    }
    header('location:dashboard.php');
}
    
?>  
    <div class="main-content">
        <div class="overview">
            <div class="title">
                <h4>Ajouter des jeux</h4>
            </div>
            <div class="form-add row d-flex justify-content-center">
                <form action="" method="post" enctype="multipart/form-data"> 
                    <input type="hidden" name="game-id"> 
                    <div class="mb-5 text-start">
                        <label class="col-form-label fw-semibold">Titre*</label>
                        <input class="form-control" name="game-titre" type="text" required>
                    </div>
                    <div class="mb-4 text-start">
                        <label class="col-form-label fw-semibold">Categories*</label>
                        <select class="form-select" name="game-categorie" required>
                            <option value="">Please select</option>
                            <option value="1">Jeux Pc</option>
                            <option value="2">Jeux PS5</option>
                            <option value="3">Jeux XBOX</option>
                            <option value="4">Jeux Nintindo</option>
                        </select>
                    </div>
                    <div class="mb-4 text-start">
                        <label class="col-form-label fw-semibold">description*</label>
                        <textarea class="form-control" name="game-description" required></textarea>
                    </div>
                    <div class="mb-4 text-start">
                        <label class="col-form-label fw-semibold">Images*</label>
                        <input class="form-control" name="game-image" type="file">
                    </div>
                    <div class="mb-4 text-start">
                        <label class="form-label fw-semibold">Prix*</label>
                        <input class="form-control" name="game-price" type="number" min="1" max="100000" required>
                    </div>
                    <div class="mb-4 text-start"> 
                        <label class="form-label fw-semibold">Date*</label>
                        <input class="form-control" name="game-date" type="datetime-local" value="" required>
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="ajouter" value="Ajouter" class="login-btn rounded-pill border-0 py-3">
                    </div>
                    
                </form>  
            </div>
        </div>
    </div>


</body>
</html>