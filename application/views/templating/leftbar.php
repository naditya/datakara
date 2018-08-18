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
                                        <li><a href="<?php echo base_url(); ?>berkas">Pengembalian dan Penerimaan</a></li>
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
                       
					   <li class="nav-label">Laporan</li>
						<li> 
							<a href="<?php echo base_url(); ?>listreport" aria-expanded="false"><i class="fa fa-th-list"></i><span class="hide-menu">Daftar Laporan</span></a>
                        </li>
					   
					    <li class="nav-label">Grafik</li>
						 <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-bar-chart"></i><span class="hide-menu">Grafik Perkara</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Grafik Total Perkara</a></li>
                                <li><a href="#">Grafik Perkara Per Otmil</a></li>
                                <li><a href="#">Grafik Perkara Per Otmilti</a></li>
                                <li><a href="#">Grafik Perkara Per Oditurat</a></li>
                                <li><a href="#">Grafik Perkara Masuk</a></li>
                                <li><a href="#">Grafik Perkara - Keptupra</a></li>
                                <li><a href="#">Grafik Perkara - Kepkumplin</a></li>
                                <li><a href="#">Grafik Perkara - Dakwaan</a></li>
                                <li><a href="#">Grafik Perkara - Tuntutan</a></li>
                                <li><a href="#">Grafik Perkara - Persidangan</a></li>
                                <li><a href="#">Grafik Perkara - Banding</a></li>
                                <li><a href="#">Grafik Perkara - Kasasi</a></li>
                                <li><a href="#">Grafik Perkara - PK</a></li>
                                <li><a href="#">Grafik Perkara - Eksekusi</a></li>
                                <li><a href="#">Grafik Jumlah Napi Per-Otmil</a></li>
                                <li><a href="#">Grafik Jumlah Napi Per-Masmil</a></li>
                                <li><a href="#">Grafik Pelanggaran Lalin</a></li>
                            </ul> 
						</li>
                        
						
						<li class="nav-label">Personil</li>
						<li> 
							<a href="<?php echo base_url(); ?>personil" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Data Personil</span></a>
                        </li>
						<li> 
							<a href="<?php echo base_url(); ?>pns" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Data PNS</span></a>
                        </li>

                        <li class="nav-label">Data Utama</li>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-key"></i><span class="hide-menu">Master Data</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>agama">Agama</a></li>
                                <li><a href="<?php echo base_url(); ?>suku">Suku Bangsa</a></li>
                                <li><a href="<?php echo base_url(); ?>goldar">Golongan Darah</a></li>
                                <li><a href="<?php echo base_url(); ?>statkawin">Status Perkawinan</a></li>
                                <li><a href="<?php echo base_url(); ?>matra">Matra / Satuan</a></li>
								<li><a href="<?php echo base_url(); ?>pangkat">Pangkat TNI</a></li>
								<li><a href="<?php echo base_url(); ?>pangpns">Pangkat PNS</a></li>
                                <!-- <li><a href="#" class="has-arrow">Pangkat</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="<?php //echo base_url(); ?>pangmatdar">Matra Darat</a></li>
                                        <li><a href="<?php //echo base_url(); ?>pangmatla">Matra Laut</a></li>
                                        <li><a href="<?php //echo base_url(); ?>pangmatud">Matra Udara</a></li>
                                        <li><a href="<?php //echo base_url(); ?>pangpns">PNS</a></li>
                                    </ul>
                                </li> -->
                                <li><a href="#" class="has-arrow">Kotama</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="<?php echo base_url(); ?>kotamamabes">Mabes TNI</a></li>
                                        <li><a href="<?php echo base_url(); ?>kotamaad">TNI AD</a></li>
                                        <li><a href="<?php echo base_url(); ?>kotamaal">TNI AL</a></li>
                                        <li><a href="<?php echo base_url(); ?>kotamaau">TNI AU</a></li>
                                        <li><a href="<?php echo base_url(); ?>kotamaluar">Luar Struktur TNI</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="has-arrow">Oditurat</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="<?php echo base_url(); ?>odituratbabinkum">Babinkum TNI</a></li>
                                        <li><a href="<?php echo base_url(); ?>odituratotjen">Otjen</a></li>
                                        <li><a href="<?php echo base_url(); ?>odituratotmilti">Otmilti</a></li>
                                        <li><a href="<?php echo base_url(); ?>odituratotmil">Otmil</a></li>
                                        <li><a href="<?php echo base_url(); ?>odituratmasmil">Masmil</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="has-arrow">Pasal</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="<?php echo base_url(); ?>kategoripasal">Kategori Pasal</a></li>
                                        <li><a href="<?php echo base_url(); ?>pasal">Data Pasal</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
						
						<li class="nav-label">Kontrol Akses</li>
						<li> 
							<a href="<?php echo base_url(); ?>akses" aria-expanded="false"><i class="fa fa-lock"></i><span class="hide-menu">Priveleges Access</span></a>
                        </li>


                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
