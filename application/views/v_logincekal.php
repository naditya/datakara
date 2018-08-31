<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login | DATAKARA BABINKUM TNI</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/loginasset/images/icons/favicon.png"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/loginasset/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/loginasset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/loginasset/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/loginasset/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/loginasset/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/loginasset/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/loginasset/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/loginasset/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/loginasset/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/loginasset/css/main.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom_style.css">
<style>
img {
    opacity: 0.5;
    filter: alpha(opacity=50); /* For IE8 and earlier */
    height: 50%;
    width: 50%;
}

img:hover {
    opacity: 1.0;
    filter: alpha(opacity=100); /* For IE8 and earlier */
    height: 50%;
    width: 50%;
}
</style>


</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                
                <?php
                    $attributes = array('class' => 'login100-form validate-form');
                    echo form_open('login/whatsnext', $attributes);

                ?>
                    
                    <span class="login100-form-title p-b-10">
                        <img src="<?php echo base_url();?>assets/loginasset/images/babinkum.png" alt="BABINKUM TNI" height="151" width="160">
                    </span>
                    
                    <h5><center>DATAKARA</center></h5>
                    <h4><center>BABINKUM TNI</center></h4>
                    </br></br>
                    
                    <!--  Pesan Jika username dicekal   -->
                    <font size="2" color="red">
                    <?php if ($this->session->flashdata('cekal')) :
                        echo $this->session->flashdata('cekal');           
                    endif; ?>
                    </font>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Wajib diisi">
                        <input class="input100" type="text" name="username">
                        <span class="focus-input100" data-placeholder="Nama user"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Wajib diisi">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100" data-placeholder="Kata sandi"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Masuk >>
                            </button>
                        </div>
                    </div>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="<?php echo base_url();?>assets/loginasset/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url();?>assets/loginasset/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url();?>assets/loginasset/vendor/bootstrap/js/popper.js"></script>
    <script src="<?php echo base_url();?>assets/loginasset/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url();?>assets/loginasset/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url();?>assets/loginasset/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?php echo base_url();?>assets/loginasset/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url();?>assets/loginasset/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url();?>assets/loginasset/js/main.js"></script>

</body>
</html>