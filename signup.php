<?php
    $Title='SignUp | Origin Gamer';
    include('header.php');
    include('navbar.php');

    if(isset($_POST['signup'])){

        $username   = mysqli_real_escape_string($connect, $_POST['username']);
        $email      = mysqli_real_escape_string($connect, $_POST['email']);
        $Vassword   = $_POST['password'];
        $cpassword  = $_POST['cpassword'];
        
        if($Vassword   != $cpassword){
            $error[]  = 'Les mots de passe ne sont pas identiques';
        }else{
            $password = password_hash($Vassword, PASSWORD_BCRYPT);
        }

        $requete    = "SELECT * FROM user_infos WHERE email = '$email' ";
        $query      = mysqli_query($connect, $requete);

        if(mysqli_num_rows($query) > 0){
            $error[] = 'Cet utilisateur exist deja'; 
        }else{
                $inserer   = "INSERT INTO user_infos (`username`,`email`,`password`) 
                    VALUE ('$username','$email ','$password')" ;
                mysqli_query($connect, $inserer);
                header('location:login.php');
        }
    }
?>

    <div class="w-100 row d-flex justify-content-center mt-5 ms-1">
        <div class="col-lg-4 col-md-6 col-sm-10 d-flex flex-column text-center">
            <div class="mt-5 mb-4">
                <h2>REJOINEZ-NOUS</h2>
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
                    <label class="col-form-label fw-light">Nom d'utilisateur*</label>
                    <input class="form-control" name="username" type="text" placeholder="nom d'utilisateur" required>
                </div>
                <div class="mb-3 text-start">
                    <label class="col-form-label fw-light">Email*</label>
                    <input class="form-control" name="email" type="email" placeholder="mail@website.com" required>
                </div>
                <div class="mb-3 text-start">
                    <label class="col-form-label fw-light">Mot de passe*</label>
                    <input class="form-control" name="password" type="password" placeholder="mot de passe" required>
                </div>
                <div class="mb-5 text-start">
                    <label class="col-form-label fw-light">Confirmez votre mot de passe*</label>
                    <input class="form-control" name="cpassword" type="password" placeholder="confirmez votre mot de passe" required>
                </div>
                <div class="mb-3">
                    <input type="submit" name="signup" value="Inscrivez-vous" class="sign-up-btn rounded-pill border-0 py-3">
                </div>
                <div class="lien mb-5">
                    Vous avez déjà un compte ?
                    <a href="login.php" class="text-decoration-none">Connectez-vous</a>
                </div>
                <div class="msg-condition mb-3">
                    En cliquant sur <i>'Inscription'</i>, vous acceptez nos <a href="#">conditions générales 
                    d'utilisation</a> et notre <a href="#">politique de confidentialité</a> .
                </div>
            </form>

        </div>
    </div>
</body>
</html>