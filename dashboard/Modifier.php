<?php
$Title='Modifier | Origin Gamer';
include('../includes/header.php');
include('../includes/sidebar.php');  

if(isset($_GET['id'])){
    $id             =$_GET['id'];
    $requete        ="SELECT * FROM games_info WHERE id = '$id' ";
    $query          =mysqli_query($connect,$requete);
    $rows           =mysqli_fetch_assoc($query);
}

if(isset($_POST['modifier'])){
    $titre          =mysqli_real_escape_string($connect,$_POST['game-titre']);
    $description    =mysqli_real_escape_string($connect,$_POST['game-description']);
    $prix           =$_POST['game-price']; 
    $categorie      =$_POST['game-categorie'];
    $date           =$_POST['game-date'];

    if($_FILES["game-image"]["name"] != ""){
        $image       =$_FILES["game-image"]["name"].'_'.uniqid();
        move_uploaded_file($_FILES['game-image']['tmp_name'],'imgs-jeux/'.$image);
        unlink("imgs-jeux/" .$_POST['old-game-image']);
    }else{
        $image       =$_POST['old-game-image'];
    }

    $requete        ="UPDATE `games_info` SET `title`='$titre',`description`='$description',
                        `price`='$prix',`date`='$date',`category_id`='$categorie',`image`='$image' 
                            WHERE id= '$id' ";
    $query          =mysqli_query($connect,$requete);
    if($query){
        header('location:dashboard.php');
    }
}

?>  


    <div class="main-content">
        <div class="overview row d-flex justify-content-center ">
            <div class="title">
                <h4>Modification des jeux</h4>
            </div>
            <div class="form-add col-md-8 d-flex flex-column text-center">
                <form action="" method="post" enctype="multipart/form-data"> 
                    <input type="hidden" name="game-id" value = "<?php echo $rows['id'] ?>"> 
                    <div class="mb-2 text-start">
                        <label class="col-form-label fw-semibold">Titre*</label>
                        <input class="form-control" name="game-titre" type="text" value="<?php echo $rows['title'] ?>" required>
                    </div>
                    <div class="mb-2 text-start">
                        <label class="col-form-label fw-semibold">Categories*</label>
                        <select class="form-select" name="game-categorie" required>
                            <option value="">Please select</option>
                            <?php
                                $requete    = "SELECT * FROM category";
                                $query      =mysqli_query($connect,$requete);
                                while($category   =mysqli_fetch_assoc($query)){
                            ?>   
                                <option value="<?php echo $category['id']; ?>" <?php echo ($rows["category_id"] == $category["id"]) ? "selected" : "" ?>> <?php echo $category["name"] ?></option>
                            <?php       
                                }
                            ?>
            
                        </select>
                    </div>
                    <div class="mb-2 text-start">
                        <label class="col-form-label fw-semibold">Description*</label>
                        <textarea class="form-control" name="game-description"  rows="1" required><?php echo $rows['description'] ?></textarea>
                    </div>
                    <div class="mb-2 text-start">
                        <label class="col-form-label fw-semibold">Images*</label>
                        <input class="form-control" name="game-image" type="file">
                        <input class="form-control" name="old-game-image" value="<?php echo $rows['image'] ?>" type="hidden">
                    </div>
                    <div class="mb-2 text-start">
                        <label class="form-label fw-semibold">Prix*</label>
                        <input class="form-control" name="game-price" value="<?php echo $rows['price'] ?>" type="number" min="1" max="100000" step="0.01" required>
                    </div>
                    <div class="mb-4 text-start"> 
                        <label class="form-label fw-semibold">Date*</label>
                        <input class="form-control" name="game-date" type="datetime-local" value="<?php echo $rows['date'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="modifier" value="modifier" class="login-btn rounded-pill border-0 py-3">
                    </div>
                    
                </form>  
            </div>
        </div>
    </div>


</body>
</html>