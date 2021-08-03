<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url().'assets/assets/login.css'?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url().'assets/assets/fav.png'?>">
    <title>Login - Sistem E-Kasir</title>
</head>

<body>

    <div class="d-flex justify-content-center align-items-center login-container">
        <form class="login-form text-center" action="<?php echo base_url().'index.php/Login/auth'?>" method="POST">
            <img src="<?php echo base_url().'assets/assets/logo.png'?>" alt="RSUDgunungjati"> <br><br>
            <p>Selamat datang di E-Kasir Silahkan Login Menggunakan Akun Masing Masing</p>
            
            <?php echo $this->session->flashdata('msg'); ?>
            
            <div class="form-group">
                <input type="text" class="form-control rounded-pill form-control-lg" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control rounded-pill form-control-lg" name="password" placeholder="Password">
            </div>
            <div class="forgot-link form-group d-flex justify-content-between align-items-center">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">Remember Password</label>
                </div>
                <a href="#">Forgot Password?</a>
            </div>
            <input type="submit" name="submit" class="btn btn-block btn-primary" value="Sign In"><br>
            <p>Don't Have An Account? </p>
            <a href="<?php echo base_url().'index.php/User/User/data_user_input'?>" class="btn btn-primary">Sign Up</a><br><br>
                  
            <p class="mt-3 font-weight-normal">Fahrurrozi - 2019102014</p>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>