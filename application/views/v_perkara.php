<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/images/favicon.png">
    <title>Register Perkara | Dashboard</title>

    <link href="<?php echo base_url();?>assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/lib/datepicker/bootstrap-datepicker3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/helper.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom_style.css">
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
            <?php 
                if ($this->session->userdata('role') == "topadmin" ) {
                    echo $header;
                }
                else {
                    echo $a_header;
                }
            ?>

        <!-- End header header -->

        <!-- LeftBar -->
            <?php 
                if ($this->session->userdata('role') == "topadmin" ) {
                    echo $leftbar;
                }
                else {
                    echo $a_leftbar;
                }
            ?>

        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Perkara</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active">Perkara</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="col-lg-12">
                    <div class="card card-outline-primary">
                        <div class="card-header">
                            <h4 class="m-b-0 text-white">Pendataan Perkara Pidana</h4>
                        </div>
                        <div class="card-body">
                            <form action="#">
                                <div class="form-body">
                                    <h3 class="card-title m-t-15">Register Perkara</h3>
                                    <hr>
                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Nomor Register Perkara</label>
                                                <input type="text" name="noreg_perkara" id="firstName" class="form-control">
                                                <small class="form-control-feedback"><span class="text-info">Input register perkara</span> </small> </div>
                                        </div>
                                        <!--/span-->

                                        <div class="col-md-6">
                                          <div class="form-group input_fields_wrap">
                                              <label class="control-label">Tersangka</label>
                                              <button type="button" class="btn btn-info btn-sm btn-rounded m-b-10 m-l-5 add_field_button">+ Tersangka Lain</button>
                                              <input type="text" name="addtsk[]" class="form-control">
                                              <small class="form-control-feedback"><span class="text-info">Input tersangka</span> </small> </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                          <div class="form-group">
                                              <label class="control-label">Tanggal</label>
                                              <input type="text" id="date" name="date" class="form-control">
                                              <small class="form-control-feedback"><span class="text-info">Pilih tanggal</span> </small> </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                              <div class="form-group input_fields_wrap1">
                                              <label class="control-label">Kategori Kasus</label>
                                              <button type="button" class="btn btn-info btn-sm btn-rounded m-b-10 m-l-5 add_field_button1">+ Kasus Lain</button>
                                              <select name="addkasus[]" class="form-control custom-select">
                                                        <option value="">Male</option>
                                                        <option value="">Female</option>
                                              </select>
                                              <small class="form-control-feedback"><span class="text-info">Input kategori kasus</span> </small> </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-12">
                                          <div class="form-group">
                                              <label class="control-label">Catatan</label>
                                              <textarea class="form-control" rows="5" placeholder="Catatan"></textarea>
                                              <small class="form-control-feedback"><span class="text-info">Input catatan jika ada</span></small> </div>
                                          </div>
                                        </div>
                                        <!--/span-->

                                        <!--/span-->
                                    </div>
                                    <!--/row-->

                                    <hr>

                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->

            <?php echo $footer;  ?>


            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="<?php echo base_url();?>assets/js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url();?>assets/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url();?>assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url();?>assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>


    <script src="<?php echo base_url();?>assets/js/lib/datamap/d3.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/datamap/topojson.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/datamap/datamaps.world.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/datamap/datamap-init.js"></script>

    <script src="<?php echo base_url();?>assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/weather/weather-init.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/owl-carousel/owl.carousel-init.js"></script>


    <script src="<?php echo base_url();?>assets/js/lib/chartist/chartist.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/chartist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/chartist/chartist-init.js"></script>

    <script src="<?php echo base_url();?>assets/js/lib/datepicker/bootstrap-datepicker.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url();?>assets/js/custom.min.js"></script>

    <script>
          $(document).ready(function() {
          var max_fields      = 10000; //maximum input boxes allowed
          var wrapper         = $(".input_fields_wrap"); //Fields wrapper
          var add_button      = $(".add_field_button"); //Add button ID

          var x = 1; //initlal text box count
          $(add_button).click(function(e){ //on add input button click
              e.preventDefault();
              if(x < max_fields){ //max input box allowed
                  x++; //text box increment
                  $(wrapper).append('<div class="form-group"><input type="text" name="addtsk[]" class="form-control" /><small class="form-control-feedback"><span class="text-info">Input kategori tersangka</span> </small><button type="button" class="btn btn-danger btn-xs btn-rounded m-b-10 m-l-5 remove_field">x Hapus</button></div>'); //add input box
              }
          });

          $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
              e.preventDefault(); $(this).parent('div').remove(); x--;
          })
      });
</script>

<script>
      $(document).ready(function() {
      var max_fields1      = 10000; //maximum input boxes allowed
      var wrapper1         = $(".input_fields_wrap1"); //Fields wrapper
      var add_button1      = $(".add_field_button1"); //Add button ID

      var x = 1; //initlal text box count
      $(add_button1).click(function(e){ //on add input button click
          e.preventDefault();
          if(x < max_fields1){ //max input box allowed
              x++; //text box increment
              $(wrapper1).append('<div class="form-group"><select name="addkasus[]" class="form-control custom-select"><option value="">Male</option><option value="">Female</option></select><small class="form-control-feedback"><span class="text-info">Input kategori kasus</span> </small><button type="button" class="btn btn-danger btn-xs btn-rounded m-b-10 m-l-5 remove_field1">x Hapus</button></div>'); //add input box
          }
      });

      $(wrapper1).on("click",".remove_field1", function(e){ //user click on remove text
          e.preventDefault(); $(this).parent('div').remove(); x--;
      })
  });
</script>

<script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'dd/mm/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>

<script>
$(document).ready(function () {
       $('.input-group.date').datetimepicker({
           locale: 'id',
       });
   });
</script>

</body>

</html>
