<?php
    include('connexion.php');
    $Title='Login | Origin Gamer';
    include('head.php');
    include('navbar.php'); 

    session_start();

    if(isset($_POST['login'])){

        $email      = mysqli_real_escape_string($connect, $_POST['email']);
        $password   = md5($_POST['password']);

        $requete    = "SELECT * FROM user_infos WHERE email = '$email' && password = '$password' ";
        $query      = mysqli_query($connect, $requete);

        if(mysqli_num_rows($query) > 0){
            $_SESSION['email'] = $email;
            header('location:test.php');
        }else{
            $error[] = 'Email ou mot de passe incorect'; 
        }
    };
?>
?>

    <div class="vw-100 row d-flex justify-content-center mt-5">
        
        <div class="col-lg-4 col-md-6 col-sm-10 d-flex flex-column text-center">
            <div class="mt-5 mb-5">
                <h2>CONNECTEZ-VOUS</h2>
            </div>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="d-block p-2 rounded-2 text-white mb-4" style="background: rgba(177,79,252,1);">'.$error.'</span>';
                };
            };  
            ?>
        <form action="" method="post">  
            <div class="mb-3 text-start">
                <label class="col-form-label fw-light">Email*</label>
                <input class="form-control" name="email" type="email" placeholder="mail@website.com" required>
            </div>
            <div class="mb-4 text-start">
                <label class="col-form-label fw-light">Mot de passe*</label>
                <input class="form-control" name="password" type="password" placeholder="mot de passe" required>
            </div>
            <div class="lien mb-4 text-end">
                <a href="#" class="text-decoration-none">Mot de passe oublié ?</a>					
            </div>
            <div class="mb-3">
                <input type="submit" name="login" value="Connectez-vous" class="login-btn rounded-pill border-0 py-3">
            </div>
            <div class="lien mb-5">
                Vous n'avez pas encore de compte ?
                <a href="signup.php" class="text-decoration-none">Inscrivez-vous</a>
            </div>
        </form>     
        </div>
    </div>
</body>
</html>