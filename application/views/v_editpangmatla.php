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
    <title>Register Perkara | Pangkat Matra Laut</title>

    <link href="<?php echo base_url();?>assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/helper.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
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
			<?php echo $header;  ?>

        <!-- End header header -->

	    <!-- LeftBar -->
			<?php echo $leftbar;  ?>

        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Pangkat Matra Laut</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Master Data</a></li>
                        <li class="breadcrumb-item active">Pangkat Matra Laut</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body p-b-0">
                            <h4 class="card-title">Master Data [ Pangkat Matra Laut ]</h4>
                            
                            <!-- Tab panes -->
                            <div class="tab-content">
                               
                                    <div class="p-20">
								
                                        <h5>Edit Data</h5>

                                        <div class="row justify-content-left">
                                        <div class="col-lg-6">
                                        <div class="form-validation">

                                              <?php
											   foreach($pangmatla as $u){
                                                  $attributes = array('class' => 'form-valide');
                                                  echo form_open('pangmatla/editdata/', $attributes);

                                              ?>
                                                <div class="form-group row">

                                                    <label class="col-lg-4 col-form-label" for="val-username">Pangkat Matra Laut <span class="text-danger">*</span></label>
                                                    <div class="col-lg-8">
														 <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $u->id_pangmatla ?>" >
                                                        <input type="text" class="form-control" id="val-username" name="val-username" value="<?php echo $u->nama_pangmatla ?>" >
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-lg-8 ml-auto">
                                                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>  Simpan Perubahan >></button>
                                                    </div>
                                                </div>
											   <?php echo form_close(); } ?>
                                        </div>
                                      </div>
                                    </div>

                                    </div>
                                
                                
                            </div>
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
    <!--Custom JavaScript -->
    <script src="<?php echo base_url();?>assets/js/custom.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/sweetalert/sweetalert.min.js"></script>
    <!-- scripit init-->
    <script src="<?php echo base_url();?>assets/js/lib/sweetalert/sweetalert.init.js"></script>

    <script src="<?php echo base_url();?>assets/js/lib/datatables/datatables.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/datatables/datatables-init.js"></script>

    <!-- Form validation -->
    <script src="<?php echo base_url();?>assets/js/lib/form-validation/jquery.validate.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/form-validation/jquery.validate-init.js"></script>

</body>

</html>
</script>

</body>

</html>
