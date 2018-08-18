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
    <title>Register Perkara | Otjen</title>

    <link href="<?php echo base_url();?>assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/helper.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/lib/sweetalert/sweetalert.css" rel="stylesheet">
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
                    <h3 class="text-primary">Otjen</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Master Data</a></li>
                        <li class="breadcrumb-item active">Otjen</li>
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
                            <h4 class="card-title">Master Data [ Otjen ]</h4>
                            <!-- Nav tabs -->
                            
                            <!-- Tab panes -->
                            <div class="tab-content">
                                  <div class="row">
                                      <div class="col-12">
                                          <div class="card">
                                              <div class="card-body">
                                                  <a href="<?php echo base_url(); ?>odituratotjen/form" type="button" class="btn btn-success m-b-10 m-l-5">+ Tambah Data Otjen</a>
														<?php if ($this->session->flashdata('suc')) : ?>
                                                          <div class="alert alert-info alert-dismissible fade show">
                                                            <i class="ti-check"> </i><?php echo $this->session->flashdata('suc'); ?>
                                                          </div>
														<?php endif; ?>
													  
														<?php if ($this->session->flashdata('del')) : ?>
                                                          <div class="alert alert-info alert-dismissible fade show">
                                                            <i class="ti-check"> </i><?php echo $this->session->flashdata('del'); ?>
                                                          </div>
														<?php endif; ?>
                                                  <!-- <h6 class="card-subtitle">Export data untuk Copy, CSV, Excel, PDF & Print</h6> -->
                                                  <div class="table-responsive m-t-40">
                                                     <table id="example23" class="display nowrap table table-hover table-bordered" cellspacing="0" width="100%">
                                                          <thead>
                                                              <tr>
                                                                  <th>No</th>
                                                                  <th>Nama Otjen</th>
                                                                  <th>Perintah</th>

                                                              </tr>
                                                          </thead>
                                                          <tfoot>
                                                              <tr>
                                                                <th>No</th>
                                                                <th>Nama Otjen</th>
                                                                <th>Perintah</th>
                                                              </tr>
                                                          </tfoot>
                                                          <tbody>
                                                            <?php
                                                                $no=1;
                                                                foreach ($odituratotjen as $a) {

                                                            ?>

                                                              <tr>
                                                                  <td><?php echo $no++ ?></td>
                                                                  <td><?php echo $a->nama_odituratotjen ?></td>
                                                                  <td>
                                                                    
                                                                        <a href="<?php echo base_url(); ?>odituratotjen/dataform/<?php echo $a->id_odituratotjen ; ?>" type="button" class="btn btn-addon btn-sm btn-primary btn-rounded m-b-10 m-l-5"><i class="ti-pencil"></i> Edit</a>



                                                                        <a href="javascript:void(0) ;" onclick="hapus(<?php echo $a->id_odituratotjen;?>) ;" type="button" class="btn btn-addon btn-sm btn-danger sweet-confirm btn-rounded m-b-10 m-l-5"><i class="ti-trash"></i> Hapus</a>
																	
                                                                  </td>
                                                              </tr>

                                                            <?php } ?>


                                                          </tbody>
                                                      </table>
                                                  </div>
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

    <!--Custom JavaScript -->
    <script src="<?php echo base_url();?>assets/js/custom.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/lib/datatables/datatables.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/datatables/datatables-init.js"></script>

	<script type="text/javascript">
    var url="<?php echo base_url();?>";
    function hapus(id){
       var r=confirm("Apakah anda yakin akan menghapus data tersebut ?")
        if (r==true)
          window.location = url+"odituratotjen/deldata/"+id;
        else
          return false;
        } 
	</script>
	
</body>

</html>
</script>

</body>

</html>
