<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login | DATAKARA BABINKUM TNI</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" href="<?php echo base_url();?>assets/loginasset/images/favicon.ico"/>
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/loginasset/images/favicon.ico" type="image/x-icon"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/loginasset/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/loginasset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <!--link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/loginasset/fonts/iconic/css/material-design-iconic-font.min.css"-->
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
<!--===============================================================================================-->

</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 login-dialog hoverable z-depth-1 animated zoomIn">
                
                <?php
                    $attributes = array('class' => 'login100-form validate-form');
                    echo form_open('login/whatsnext', $attributes);
                ?>
                    
                    <div class="d-block" align="center">
                        <div class="wrapper-image brand-login" align="center">
                            <a href="<?php echo base_url(); ?>">
                                <img src="<?php echo base_url();?>assets/loginasset/images/babinkum.png" alt="BABINKUM TNI" />
                            </a>
                        </div>
                    </div>
                    
                    <div class="title-login">
                        <h4 class="c-green text-center"><strong>DATAKARA</strong></h4>
                        <p class="text-center"><small>BABINKUM TNI</small></p>
                    </div>
                    
                    <!--  Pesan Jika username dan password tidak sesuai   -->
                    <?php 
                        if ($this->session->flashdata('err')) :
                            echo '<p class="c-red text-center give-range"><small>'.$this->session->flashdata('err').'</small></p>';          
                        endif;
                        
                        if ($this->session->flashdata('sucup')) :
                            echo '<p class="c-green text-center give-range"><small>'.$this->session->flashdata('sucup').'</small></p>';         
                        endif;
                    ?>
                    
                    <div class="clearfix wrap-input100 container-input-login validate-input" data-validate = "Wajib diisi">
                        <input class="input100" type="text" name="username">
                        <span class="focus-input100 login-input" data-placeholder="Nama user"></span>
                    </div>

                    <div class="clearfix wrap-input100 container-input-login validate-input" data-validate="Wajib diisi">
                        <span class="btn-show-pass">
                            <i class="fa fa-eye"></i>
                        </span>
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100 login-input" data-placeholder="Kata sandi"></span>
                    </div>

                    <div class="container-login100-form-btn" id="containerBtnLogin">
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