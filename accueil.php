<?php
    include('connexion.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouCode | Origin Gamer</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f57667c685.js" crossorigin="anonymous"></script>

</head>
<body>

    <div class="d-flex align-items-center justify-content-between px-5 py-4">

        <div>
            <a href="accueil.php"><img class ="logo" src="assets/images/logos/YC-gamer 1.png" alt="logo" width="200"></a>
        </div>

        <div class="d-flex">
            <input type="text" class="form-control border border-0" placeholder="Trouver des jeux" />
            <button class="btn btn-search"><i class="fa fa-search"></i></button>
        </div>

        <div class="lien">
            <a class="text-decoration-none" href="#">Acheter vos jeux</a>
        </div>

        <div class="lien">
            <a class="text-decoration-none" href="login.php">Connectez-vous</a>
        </div>

        <div class="lien">
            <a class="text-decoration-none" href="signup.php">Inscrivez-vous</a>
        </div>

        <div class="lien">   
            <a href="#"><i class="fa-solid fa-heart text"></i></a>
            <a href="#"><i class="fa-solid fa-cart-shopping ps-4"></i></a>
        </div>

    </div>

    <div class="liens d-flex align-items-center justify-content-between bg-dark px-5 py-2 mb-3">
        <a href="#" class="font-monospace text-decoration-none">Jeux Pc</a>
        <a href="#" class="font-monospace text-decoration-none">Jeux Android</a>
        <a href="#" class="font-monospace text-decoration-none">Jeux IOS</a>
        <a href="#" class="font-monospace text-decoration-none">Jeux PlayStation 5</a>
        <a href="#" class="font-monospace text-decoration-none">Jeux PlayStation 4</a>
        <a href="#" class="font-monospace text-decoration-none">Jeux XBOX Serie X</a>
        <a href="#" class="font-monospace text-decoration-none">Jeux Nintindo Switch</a>
    </div> 
    
    <div class="">
        <p style="text-align: center ;"><img class="background" src="assets/images/backgrounds/Bg.jpg" alt="background" width="95%" style="border-radius: 1%;"></p>
    </div>
    
</body>
</html>