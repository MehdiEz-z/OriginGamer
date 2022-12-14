<?php

    $Title='Login | Origin Gamer';
    include('../includes/header.php');
    include('../includes/navbar.php');

    if(isset($_POST['login'])){

        $email      = mysqli_real_escape_string($connect, strtolower(($_POST['email'])));
        $password   = $_POST['password'];

        $requete    = "SELECT * FROM user_infos WHERE email = '$email' ";
        $query      = mysqli_query($connect, $requete);

        if(mysqli_num_rows($query) > 0){
            $_SESSION['email'] = $email;

            $result=mysqli_fetch_assoc($query);
            $password_v = password_verify($password,$result['password']); 
        
            if($password_v == $password){
                $_SESSION['username'] = $result['username'];
                header('location:../dashboard/dashboard.php');
            }else{
                $error = 'Mot de passe incorect';    
            }
        }else 
        $error = 'Email incorect';    
    };
?>

    <div class="vw-100 row d-flex justify-content-center mt-5 ms-1">
        
        <div class="col-lg-4 col-md-6 d-flex flex-column text-center">
            <div class="mt-5 mb-5">
                <h2>CONNECTEZ-VOUS</h2>
            </div>
            <?php
            if(isset($error)){             
                    echo '<span class="d-block mb-4" style="color: #B94A48;">'.$error.'</span>';              
            };  
            ?>
            <form action="" method="post" data-parsley-validate>  
                <div class="mb-3 text-start">
                    <label class="col-form-label fw-medium">Email*</label>
                    <input class="form-control" name="email" type="email" placeholder="mail@website.com" data-parsley-type="email" required>
                </div>
                <div class="mb-4 text-start">
                    <label class="col-form-label fw-medium">Mot de passe*</label>
                    <input class="form-control" name="password" type="password" placeholder="mot de passe" data-parsley-minlength="8" required>
                </div>
                <div class="lien mb-4 text-end">
                    <a href="#" class="text-decoration-none">Mot de passe oubli?? ?</a>					
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
    <script src="../assets/js/main.js"></script>
</body>
</html>