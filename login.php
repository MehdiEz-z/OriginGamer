<?php
    include('connexion.php');
    $Title='Login | Origin Gamer';
    include('head.php');
    include('navbar.php');
?>

    <div class="vw-100 row d-flex justify-content-center mt-5">
        
        <div class="col-lg-4 col-md-6 col-sm-10 d-flex flex-column text-center">
            <div class="mt-5 mb-4">
                <h2>CONNECTEZ-VOUS</h2>
            </div>
            <div class="lien mb-5">
                Vous n'avez pas encore de compte ?
                <a href="signup.php" class="text-decoration-none">Inscrivez-vous</a>
            </div>
            <div class="mb-3 text-start">
                <label class="col-form-label fw-light">Email*</label>
                <input class="form-control" type="email" placeholder="mail@website.com" required>
            </div>
            <div class="mb-4 text-start">
                <label class="col-form-label fw-light">Mot de passe*</label>
                <input class="form-control" type="password" placeholder="mot de passe" required>
            </div>
            <div class="lien mb-4 text-end">
                <a href="#" class="text-decoration-none">Mot de passe oublié ?</a>					
            </div>
            <div class="mb-3">
                <input type="submit" value="Connectez-vous" class="login-btn rounded-pill border-0 py-3">
            </div>
            
        </div>
    </div>
</body>
</html>