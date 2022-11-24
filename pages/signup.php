<?php
    $Title='SignUp | Origin Gamer';
    include('../includes/header.php');
    include('../includes/navbar.php');

    if(isset($_POST['signup'])){

        $username           = mysqli_real_escape_string($connect, $_POST['username']);
        $email              = mysqli_real_escape_string($connect, strtolower(($_POST['email'])));
        $password           = password_hash($_POST['password'],PASSWORD_BCRYPT) ;
        $cpassword          = $_POST['cpassword'];
 
        $requete    = "SELECT * FROM user_infos WHERE email = '$email'";
        $query      = mysqli_query($connect, $requete);

            if(mysqli_num_rows($query) > 0){
                $error = 'Cet utilisateur exist deja'; 
            }else{
                $inserer   = "INSERT INTO user_infos (`username`,`email`,`password`) 
                    VALUE ('$username','$email ','$password')";

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
                    echo '<span class="d-block mb-3" style="color: #B94A48;">'.$error.'</span>';
            };  
            ?>

            <form id="form" action="" method="post" data-parsley-validate>
                <div class="mb-3 text-start">
                    <label class="col-form-label fw-medium">Nom d'utilisateur*</label>
                    <input class="form-control" name="username" type="text" placeholder="nom d'utilisateur" data-parsley-minlength="5" required>
                </div>
                <div class="mb-3 text-start">
                    <label class="col-form-label fw-medium">Email*</label>
                    <input class="form-control" name="email" type="email" placeholder="mail@website.com" data-parsley-type="email" required>
                </div>
                <div class="mb-3 text-start">
                    <label class="col-form-label fw-medium">Mot de passe*</label>
                    <input id="pass" class="form-control" name="password" type="password" placeholder="mot de passe" data-parsley-minlength="8" required>
                </div>
                <div class="mb-5 text-start">
                    <label class="col-form-label fw-medium">Confirmez votre mot de passe*</label>
                    <input class="form-control" name="cpassword" type="password" placeholder="confirmez votre mot de passe" data-parsley-equalto="#pass" required>
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
    <script src="../assets/js/main.js"></script>
</body>
</html>