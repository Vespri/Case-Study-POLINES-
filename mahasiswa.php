<!DOCTYPE html>
<html lang="en">
<head>
<link href="images/logo.png" rel="shortcut icon">
<title>Data Diri Mahasiswa Baru</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question">Punya pertanyaan?</div></li>
									<li>
										<i class="fa fa-instagram" aria-hidden="true"></i>
										<div>@polinesofficial</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="#">
									<div class="logo_text">Poli<span>nes</span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li><a href="#">Home</a></li>
									<li><a href="#">Tentang Kami</a></li>
									<li><a href="#">Jurusan</a></li>
									<li class="active"><a href="#">Pendaftaran</a></li>
									<li class="active"><a href="#">Halo, Calon Mahasiswa Baru</a></li>
								</ul>
								<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

								<!-- Hamburger -->

								<div class="shopping_cart"><a href="#"><i class="fa fa-users" aria-hidden="true"></i></a></i></div>
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="#">Home</a></li>
				<li class="menu_mm"><a href="#">Tentang Kami</a></li>
				<li class="menu_mm"><a href="#">Jurusan</a></li>
				<li class="menu_mm"><a href="#">Pendaftaran</a></li>
			</ul>
		</nav>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="#">Home</a></li>
								<li>Pendaftaran</li>
								<li>Pendaftaran Nilai</li>
								<li>Hasil</li>
								<li>Data Diri Mahasiswa</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Contact -->

	<div class="contact">

		<!-- Contact Info -->

		<div class="contact_info_container">
			<div class="container">
				<div class="row">

					<!-- Contact Form -->
					<div class="col-lg-6">
						<div class="contact_form">
							<div class="contact_info_title">Data Diri Mahasiswa Baru</div>
							<form class="comment_form" method="post" action="siswaTambahSave.php">
								<div>
									<div class="form_title">Nomor Siswa Nasional</div>
									<input name="txtnosiswa" type="text" id="txtnosiswa" class="comment_input" required="required" placeholder="NISN Contoh : 0010096101">
								</div>
								<div>
									<div class="form_title">Tahun Angkatan</div>
									<input name="txttahunangkatan" type="text" id="txttahunangkatan" class="comment_input" required="required" placeholder="Tahun diterima">
								</div>
								<div>
									<div class="form_title">Jurusan</div>
									<select name="txtjurusan" id="txtjurusan" class="comment_input">
										<option value="BLANK">...</option>
										<?php
										include "koneksi.php";
										$sql = "SELECT * FROM jurusan order by kd_jurusan";
										$query = mysql_query($sql,$konek) or die ("Query salah : ".mysql_error());
										while ($data = mysql_fetch_array($query)){
										echo "<option value = '$data[kd_jurusan]'> $data[nama_jurusan]</option>";
										}
										?>
                                    </select>
								</div>
								<?php
								include "koneksi.php";

								if($_GET){
									$id = $_GET['id'];
									$sql = "SELECT * from pendaftaran where id= '$id'";
									$query=mysql_query($sql,$konek) or die ("Query salah : ".mysql_error());
									$data=mysql_fetch_array($query);
									}
								?>
								<div>
									<div class="form_title">Nama Lengkap</div>
									<input name="txtnama" type="text" id="txtnama" class="comment_input" required="required" value="<?php echo $data["nama"];?>">
								</div>
								<div>
									<div class="form_title">Jenis Kelamin</div>
                                    <input name="txtjeniskelamin" type="text" id="txtjeniskelamin" class="comment_input" required="required" value="<?php echo $data['jenis_kelamin'];?>">
								</div>
								<div>
									<div class="form_title">Agama</div>
									<input name="txtagama" type="text" id="txtagama" class="comment_input" required="required" value="<?php echo $data['agama'];?>">
								</div>
								<div>
									<div class="form_title">Golongan Darah</div>
									<input name="txtgolongandarah" type="text" id="txtgolongandarah" class="comment_input" required="required" value="<?php echo $data['gol_darah'];?>">
								</div>
								<div>
									<div class="form_title">Nomor Telepon/Hp</div>
									<input name="txttelepon" type="text" id="txttelepon" value="<?php echo $data['telepon'];?>" class="comment_input" required="required" placeholder="08123456789">
                                </div>
                                <div>
									<div class="form_title">Email</div>
									<input name="txtemail" type="text" id="txtemail" value="<?php echo $data['email'];?>" class="comment_input" required="required" placeholder="email@gmail.com">
                                </div>
                                <div>
									<div class="form_title">Alamat</div>
									<input name="txtalamat" type="text" id="txtalamat" value="<?php echo $data['alamat'];?>" class="comment_input" required="required" placeholder="Alamat Lengkap">
                                </div>
                                <div>
									<div class="form_title">Tanggal Lahir</div>
									<input name="txttanggallahir" type="date" id="txttanggallahir" value="<?php echo $data['tgl_lahir'];?>" class="comment_input" required="required" placeholder="2000/01/13">
                                </div>
                                <div>
									<div class="form_title">Tempat Lahir</div>
									<input name="txttempatlahir" type="text" id="txttempatlahir" value="<?php echo $data['tempat_lahir'];?>" class="comment_input" required="required" placeholder="Palembang">
                                </div>
                                <div>
									<div class="form_title">Nama Ayah</div>
									<input name="txtnamaayah" type="text" id="txtnamaayah" value="<?php echo $data['nama_ayah'];?>" class="comment_input" required="required" placeholder="Nama Orangtua">
                                </div>
                                <div>
									<div class="form_title">Pekerjaan Ayah</div>
									<input name="txtpekerjaanayah" type="text" id="txtpekerjaanayah" value="<?php echo $data['p_ayah'];?>" class="comment_input" required="required" placeholder="Pekerjaan Orangtua">
                                </div>
                                <div>
									<div class="form_title">Nama Ibu</div>
									<input name="txtnamaibu" type="text" id="txtnamaibu" value="<?php echo $data['nama_ibu'];?>" class="comment_input" required="required" placeholder="Nama Orangtua">
                                </div>
                                <div>
									<div class="form_title">Pekerjaan Ibu</div>
									<input name="txtpekerjaanibu" type="text" id="txtpekerjaanibu" value="<?php echo $data['p_ibu'];?>" class="comment_input" required="required" placeholder="Pekerjaan Orangtua">
                                </div>
                                <div>
									<div class="form_title">Sekolah Asal</div>
									<input name="txtsekolahasal" type="text" id="txtsekolahasal" value="<?php echo $data['sekolah_asal'];?>" class="comment_input" required="required" placeholder="SMA Mandiri Sejati">
                                </div>
								<div>
									<div class="form_title">Nomor Pendaftaran</div>
									<input name="txtnopendaftaran" type="text" id="txtnopendaftaran" value="<?php echo $data['no_pendaftaran'];?>" class="comment_input" required="required" placeholder="061801">
								</div>
								<div>
									<input type="submit" name="Submit" class="comment_button trans_200" value="SUBMIT">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-3 footer_col">
					
								<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="#">
											<div class="footer_logo_text">Poli<span>nes</span></div>
										</a>
									</div>
									<div class="footer_about_text">
										<p>Politeknik Negeri Semarang Jawa Tengah.</p>
									</div>
									<div class="footer_social">
										<ul>
											<li><a href="https://id-id.facebook.com/pages/category/Community-College/Politeknik-Negeri-Semarang-207263599290792/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="https://www.instagram.com/polinesofficial/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="https://twitter.com/polinesofficial"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title">Hubungi Kami</div>
									<div class="footer_contact_info">
										<ul>
											<li>Instagram : @polinesofficial</li>
											<li>Jl. Prof. Soedarto, Tembalang-, Semarang, Jawa Tengah, Indonesia</li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer links -->
								<div class="footer_section footer_links">
									<div class="footer_title">Hubungi Kami</div>
									<div class="footer_links_container">
										<ul>
											<li><a href="#">Home</a></li>
											<li><a href="#">About</a></li>
											<li><a href="#">Jurusan</a></li>
											<li><a href="#">Pendaftaran</a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col clearfix">
					
								<!-- Footer links -->
								<div class="footer_section footer_mobile">
									<div class="footer_title">Mobile</div>
									<div class="footer_mobile_content">
										<div class="footer_image"><a href="#"><img src="images/mobile_1.png" alt=""></a></div>
										<div class="footer_image"><a href="#"><img src="images/mobile_2.png" alt=""></a></div>
									</div>
								</div>
								
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="row copyright_row">
				<div class="col">
					<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
						<div class="cr_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						<div class="ml-lg-auto cr_links">
							<ul class="cr_list">
								<li><a href="#">Copyright notification</a></li>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/marker_with_label/marker_with_label.js"></script>
<script src="js/contact.js"></script>
</body>
</html>