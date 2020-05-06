<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SIGN UP</title>
    <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/css/fontawesome.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/css/all.css') ?>">
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
    <link rel="stylesheet" href="signup.css" />

    <script src="<?php echo base_url('public/js/jquery.min.js') ?>"></script>
    <!-- <script src="jquery.form.validator.min.js"></script> -->
    <script src="security.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('/public/signup.css') ?>">
    <!-- <link href="validator.css" rel="stylesheet"> -->
</head>

<body>
    <div class="container">
        <br>
        <div class="card" style="width:470px">
            <div class="card-body bg-light card w-100  ">


                <div class="row">
                    <div class="col">
                        <h4 class="h1 p-2 mb-2 text-dark text-center ">Create Account</h4>
                        <p class=" h5 p-2 mb-2  text-dark text-center ">Get started with your account</p>
                        <hr>
                        <form action="main">
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                </div>
                                <input id="name" class="form-control" placeholder="Full name" type="text" autocomplete="off" value="" required>

                            </div>
                            <!-- form-group// -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                </div>
                                <input id="lastname" class="form-control" placeholder="Last name" type="text" autocomplete="off" value="" required>
                            </div>
                            <!-- form-group// -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-home"></i> </span>
                                </div>
                                <input id="address" class="form-control" placeholder=" Address" type="address" autocomplete="off" value="" required>
                            </div>
                            <!-- form-group// -->

                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fas fa-map-marked"></i> </span>
                                </div>
                                <input id="city" class="form-control" placeholder="City " type="city" autocomplete="off" value="" required>
                            </div>
                            <!-- form-group// -->

                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                </div>
                                <input id="email" class="form-control" placeholder="Email address" type="email" autocomplete="off" value="" required>
                            </div> <!-- form-group// -->

                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                </div>
                                <input id="password" class="form-control" placeholder="Password" type="password" autocomplete="off" value="" required>
                            </div>
                            <!-- form-group// -->

                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-check-square"></i> </span>
                                </div>
                                <input id="confirmedpassword " class="form-control" placeholder="Confirmed password" type="password" autocomplete="off" value="" required>
                            </div>
                            <!-- form-group// -->

                            <div class="form-group">
                                <!-- form-group// -->
                                <button type="submit" class="btn btn-primary btn-block  "> SIGN UP </button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
</body>

</html>