<?php
    include('connexion.php');
    $Title='SignUp | Origin Gamer';
    include('head.php');
    include('navbar.php');
?>

    <div class="vw-100 row d-flex justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-10 d-flex flex-column text-center">
            <div class="mt-5 mb-4">
                <h2>Rejoinez-nous</h2>
            </div>

            <form action="" method="post">
                <div class="mb-3 text-start">
                    <label class="col-form-label fw-light">Nom d'utilisateur*</label>
                    <input class="form-control" type="text" placeholder="nom d'utilisateur" required>
                </div>
                <div class="mb-3 text-start">
                    <label class="col-form-label fw-light">Email*</label>
                    <input class="form-control" type="email" placeholder="mail@website.com" required>
                </div>
                <div class="mb-5 text-start">
                    <label class="col-form-label fw-light">Mot de passe*</label>
                    <input class="form-control" type="password" placeholder="mot de passe" required>
                </div>
                <div class="mb-3">
                    <button type="submit" class="sign-up-btn rounded-pill border-0 py-3">Inscrivez-vous</button>
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