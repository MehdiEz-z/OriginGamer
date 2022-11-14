<?php
include('connexion.php');
$Title='Dashboard | Origin Gamer';
include('head.php');

session_start();

if(!isset($_SESSION['email'])){
    header('location:test.php');
}
?>

<body>
    <div class="container min-vh-100 d-flex align-items-center justify-content-center bg-white pb-5">
        <div class="content text-center w-50">
            <h3 class="pb-3">salut, <span class="text-white rounded-3 px-3" style="background: rgba(177,79,252,1);">admin</span></h3>
            <h1>BIENVENU</h1>
            <p class="py-2 fs-4">c'est votre page admin</p>
            <p class="pb-2 fw-bold">votre email : <span class="text-danger"><?php echo $_SESSION['email'] ?></span></p>
            <a href="logout.php" class="logout text-decoration-none d-inline-block mt-2 text-white rounded-3 py-2 px-4" style="background: linear-gradient(90deg, rgba(177,79,252,1) 0%, rgba(130,74,248,1) 100%);">Déconnexion</a>
        </div>
    </div>
</body>
</html>