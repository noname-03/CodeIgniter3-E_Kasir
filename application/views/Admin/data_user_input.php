<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url().'assets/assets/login.css'?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url().'assets/assets/fav.png'?>">
    <title>Registrasi - Sistem E-Kasir</title>
</head>

<body>

    <div class="d-flex justify-content-center align-items-center login-container">
    <form action="<?php echo base_url().'index.php/User/User/data_user_input_aksi' ?>" method="POST">
            <img src="<?php echo base_url().'assets/assets/logo.png'?>" alt="RSUDgunungjati"> <br><br>
            <h1>E- kasir : Aplikasi Kasir Berbasis cloud</h1>
            <p>Selamat datang di E-Kasir silahkan untuk melakukan registrasi terlebih dahulu dan isi dengan benar karena ini akan menjadi akun anda</p>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Toko</label>
                          <input type="hidden" class="form-control" name="id_toko" >
                          <input type="hidden" class="form-control" name="id_toko" >
                          <input type="text" class="form-control" name="nm_toko" >
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama</label>
                          <input type="text" class="form-control" name="username" >
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" class="form-control" name="password" >
                        </div>
                      </div>
                    </div>
                    <input type="submit" class="btn btn-primary pull-right" value="Sign Up">
                    <div class="clearfix"></div>
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