<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

 <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
						<li class="nav-label"><font color="red">Level : <?php echo $this->session->userdata('role') ?></font></li>
                        <li class="nav-label">Beranda</li>
                        <li> <a href="<?php echo base_url(); ?>dashboard" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard </span></a>

                        </li>
                        <li class="nav-label">Perkara</li>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-balance-scale"></i><span class="hide-menu">Perkara</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>perkara">Tambah Perkara Pidana</a></li>
                                <li><a href="#">Alur Perkara Pidana</a></li>
                                <li><a href="#" class="has-arrow">Berkas Perkara Pidana</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="#">Pengambilan Berkas Perkara</a></li>
                                        <li><a href="#">Penerimaan Perkara Pidana</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Pelimpahan Perkara Pidana</a></li>
                            </ul>
                        </li>
                        <li> 
							<a href="#" aria-expanded="false"><i class="fa fa-gavel"></i><span class="hide-menu">Pelanggaran Lalu Lintas</span></a>
                        </li>
						
						
                        <li class="nav-label">Cetak Form</li>
						 <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-print"></i><span class="hide-menu">Cetak Formulir</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Model 30</a></li>
                                <li><a href="#">Model 31</a></li>
                                <li><a href="#">Model 32</a></li>
                                <li><a href="#">Model 35</a></li>
                                <li><a href="#">Model 36</a></li>
                                <li><a href="#">Model 39</a></li>
                                <li><a href="#">Model 40</a></li>
                                <li><a href="#">Model 51</a></li>
                            </ul>
                        </li>
                       
                        
                       
                        <!--
						<li class="nav-label">Laporan</li>
						<li> 
							<a href="<?php // echo base_url(); ?>listreport" aria-expanded="false"><i class="fa fa-th-list"></i><span class="hide-menu">Daftar Laporan</span></a>
                        </li>
						-->
						
						<li class="nav-label">Personil</li>
						<li> 
							<a href="<?php echo base_url(); ?>personil" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Data Personil</span></a>
                        </li>
						<li> 
							<a href="<?php echo base_url(); ?>pns" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Data PNS</span></a>
                        </li>

                  


                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
