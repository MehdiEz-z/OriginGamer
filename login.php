<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- My style CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Title & Icon -->
    <title>YouCode | Origine Gamer</title>
    <link rel="icon" href="assets/images/logos/YC-gamer 6.png" />

</head>  
<body>
    <div class="login">
        <div class="row">
            <!-- left login -->
            <div class="left-login col-lg-6 d-none d-lg-block d-flex justify-content-center">
                <div class="d-flex justify-content-center flex-column text-center" style="min-height: 100vh;">
                    <div class="header">
                        <h1 class="fw-bold">Welcome Back</h1>
                        <p class="fw-light">Welcome back! Please enter your details</p>
                    </div>
                    <div class="">
                        <img class="illustration" src="assets/images/backgrounds/bg1.png" width = "70%">
                    </div>
                </div>
            </div>
            <!-- right login -->
            <div class="right-login col-lg-6 bg-white d-flex justify-content-center">
                <div class="d-flex justify-content-center flex-column text-center col-lg-9 col-md-9 col-sm-9" style="min-height: 100vh;">
                    <div class="mt-5">
                        <img src="assets/images/logos/YC-gamer 1.png" width="80%">
                    </div>
                    <div class="mt-5 mb-4">
                        <h2 style="color: #824af8;">Login</h2>
                    </div>
                    <form action="">
                        <div class="mb-3 text-start">
							<label class="col-form-label fw-bold">Email*</label>
							<input class="form-control" type="email" placeholder="mail@website.com" required>
						</div>
                        <div class="mb-3 text-start">
							<label class="col-form-label fw-bold">Password*</label>
							<input class="form-control" type="password" placeholder="min 8 character" required>
						</div>
                        <div class="mb-4">
                            <a href="#" class="text-decoration-none" style="color: #824af8;">Forget Password</a>					
						</div>
                        <div class="mb-3">
							<button type="submit" class="sign-in-btn fw-semibold rounded-pill border-0 py-2">Login</button>
						</div>
                        <div class="fw-light">
                            Not registered yet ?
							<a href="register.php" class="text-decoration-none fw-bolder" style="color: #824af8;">Creat an account</a>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>