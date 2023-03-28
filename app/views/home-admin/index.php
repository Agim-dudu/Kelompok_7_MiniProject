<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- CSS -->
	<link rel="stylesheet" href="<?= BASEURL ?>/css/ha.css" />

	<title>Tapasan</title>
</head>

<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-t-shirt'></i>
			<span class="text">Pilkom Laundry</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="#">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="active">
				<a href="#transaksi">
					<i class='bx bxs-shopping-bag-alt'></i>
					<span class="text">Data Transaksi</span>
				</a>
			</li>
			<li>
				<a href="#petugas">
					<i class='bx bxs-group'></i>
					<span class="text">Data Petugas</span>
				</a>
			</li>
			<li>
				<a href="#paket">
					<i class='bx bxs-message-dots'></i>
					<span class="text">Data Paket</span>
				</a>
			</li>
			<li>
				<a href="#akun">
					<i class='bx bxs-doughnut-chart'></i>
					<span class="text">Akun Manajemen</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog'></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle'></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu'></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell'></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="<?= BASEURL ?>/img/admin.jpg">
			</a>
		</nav>
		<main>
			<div class="head-title">
				<div class="left">
					<h1 id="transaksi">Data Penjualan Laundry</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Data</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Transaksi</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="table-data">
				<div class="tambah-datapenju">
					<button class="btn" id="btnTambahpenju">Tambah Data</button>

					<div id="myModal1" class="modal">
						<div class="modal-content">
							<span class="close">&times;</span>

							<div class="inputModal">
								<h3 id="judulModal">Tambah Data</h3>
								<table>
									<tr>
										<td><label for="nama">Kode Paket</label></td>
										<td><input type="text" name="kode" id="kode"></td>
									</tr>
									<tr>
										<td><label for="nim">Nama Pelanggan</label></td>
										<td><input type="text" name="nama" id="nama"></td>
									</tr>
									<tr>
										<td><label for="nim">Deskripsi</label></td>
										<td><input type="text" name="des" id="des"></td>
									</tr>
									<tr>
										<td><label for="email">Harga</label></td>
										<td><input type="text" name="harga" id="harga"></td>
									</tr>
									<tr>
										<td><label for="email">Jumlah</label></td>
										<td><input type="text" name="jumlah" id="jumlah"></td>
									</tr>
									<tr>
										<td></td>
										<td><input type="button" value="Submit" name="submit" id="submit" class="btn">
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>

				<div class="order">
					<table>
						<thead>
							<tr>
								<th>No</th>
								<th>Kode Paket</th>
								<th>Nama Pelanggan</th>
								<th>Deskripsi</th>
								<th>Harga</th>
								<th>Jumlah</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
		</main>
		<main>
			<div class="head-title">
				<div class="left">
					<h1 id="petugas">Data Petugas</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Data</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Data Petugas</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="table-data">
				<div class="tambah-datapetu">
					<button class="btn" id="btnTambahpetu">Tambah Data</button>

					<div id="myModal2" class="modal">
						<div class="modal-content">
							<span class="close">&times;</span>

							<div class="inputModal">
								<h3 id="judulModal">Tambah Data</h3>
								<form action="home_admin/tambahpetugas" method="post">
									<table>
										<tr>
											<td><label for="id">Id Petugas</label></td>
											<td><input type="text" name="id" id="id"></td>
										</tr>
										<tr>
											<td><label for="nama">nama</label></td>
											<td><input type="text" name="nama" id="nama"></td>
										</tr>
										<tr>
											<td><label for="nomer">nomor</label></td>
											<td><input type="number" name="nomer" id="nomer"></td>
										</tr>
										<tr>
											<td></td>
											<td><input type="submit" class="btn"></td>
										</tr>
									</table>
								</form>
							</div>
						</div>
					</div>
				</div>

				<div class="order">
					<table>
						<thead>
							<tr>
								<th>No</th>
								<th>Id Petugas</th>
								<th>Nama Petugas</th>
								<th>No Hp</th>
								<th>Action</th>

							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($data['petugas'] as $petugas) : ?>
							<tr>
								<td><?php $i = 0;
										$i + 1 ?></td>
								<td><?= $petugas['id']; ?></td>
								<td><?= $petugas['nama']; ?></td>
								<td>+62<?= $petugas['nomer']; ?></td>
								<td class="edit">
									<a style="background-color: #3C91E6; padding:5px; color:beige; border-radius:4px; width:60px;"
										onclick="return confirm('Yakin Ingin Penghapus Data Tersebut')"
										href="editpetugas/<?= $petugas['id'] ?>">Edit</a>
									<a style="background-color: #3C91E6; padding:5px; color:beige; border-radius:4px; width:60px;"
										onclick="return confirm('Yakin Ingin Penghapus Data Tersebut')"
										href="<?= BASEURL ?>/home_admin/hapuspetugas/<?= $petugas['id'] ?>">Hapus</a>
								</td>
							</tr>
							<?php
							endforeach ?>
						</tbody>
					</table>
				</div>
		</main>
		<main>
			<div class="head-title">
				<div class="left">
					<h1 id="paket">Data Paketan</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Data</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Data Paketan</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="table-data">
				<div class="tambah-datapaket">
					<button class="btn" id="btnTambahpaket">Tambah Data</button>

					<div id="myModal3" class="modal">
						<div class="modal-content">
							<span class="close">&times;</span>

							<div class="inputModal">
								<h3 id="judulModal">Tambah Data</h3>
								<form action="home_admin/tambahpaket" method="post"">
											<table>
												<tr>
                                                    <td><label for=" id">Id Paket</label></td>
									<td><input type="text" name="id" id="id"></td>
									</tr>
									<tr>
										<td><label for="jenis_laundry">Nama Paket</label></td>
										<td><input type="text" name="jenis_paket" id="jenis_paket"></td>
									</tr>
									<tr>
										<td><label for="harga">Harga</label></td>
										<td><input type="number" name="harga" id="harga"></td>
									</tr>
									<tr>
										<td></td>
										<td><input type="submit" class="btn"></td>
									</tr>
									</table>
								</form>
							</div>
						</div>
					</div>
				</div>

				<div class="order">
					<table>
						<thead>
							<tr>
								<th>No</th>
								<th>Id Paket</th>
								<th>Jenis Laundry</th>
								<th>Harga</th>
								<th>Action</th>

							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($data['paket'] as $paket) : ?>
							<tr>
								<td></td>
								<td><?= $paket['id']; ?></td>
								<td><?= $paket['jenis_paket']; ?></td>
								<td>Rp.<?= $paket['harga']; ?></td>
								<td class="edit">
									<a style="background-color: #3C91E6; padding:5px; color:beige; border-radius:4px; width:60px;"
										onclick="return confirm('Yakin Ingin Penghapus Data Tersebut')"
										href="editpaketan/<?= $paket['id'] ?>">Edit</a>
									<a style="background-color: #3C91E6; padding:5px; color:beige; border-radius:4px; width:60px;"
										onclick="return confirm('Yakin Ingin Penghapus Data Tersebut')"
										href="<?= BASEURL ?>/home_admin/hapuspaketan/<?= $paket['id'] ?>">Hapus</a>
								</td>
							</tr>
							<?php
							endforeach ?>
						</tbody>
					</table>
				</div>
		</main>
		<main>
			<div class="head-title">
				<div class="left">
					<h1 id="akun">Akun Manajemen</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Data</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Akun Manajemen</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="table-data">
				<div class="tambah-datamaje">
					<button class="btn" id="btnTambahmaje">Tambah Data</button>

					<div id="myModal4" class="modal">
						<div class="modal-content">
							<span class="close">&times;</span>

							<div class="inputModal">
								<h3 id="judulModal">Tambah Data</h3>
								<form action="home_admin/tambahakun" method="post">
									<table>
										<tr>
											<td><label for="username">Username</label></td>
											<td><input type="text" name="username" id="username"></td>
										</tr>
										<tr>
											<td><label for="password">Password</label></td>
											<td><input type="text" name="password" id="password"></td>
										</tr>
										<tr>
											<td></td>
											<td><input type="submit" 
													class="btn"></td>
										</tr>
									</table>
								</form>
							</div>
						</div>
					</div>
				</div>

				<div class="order">
					<tbody>
						<table>
							<thead>
								<tr>
									<th>No</th>
									<th>Username</th>
									<th>Password</th>
									<th>Action</th>


								</tr>
							</thead>
							<tbody>
								<?php
								foreach ($data['akun_petugas'] as $akun_petugas) : ?>
								<tr>
									<td></td>
									<td><?= $akun_petugas['username']; ?></td>
									<td><?= $akun_petugas['password']; ?></td>
									<td class="edit">
										<a style="background-color: #3C91E6; padding:5px; color:beige; border-radius:4px; width:60px;"
											onclick="return confirm('Yakin Ingin Mengedit Data Tersebut')"
											href="editakun/<?= $akun_petugas['id'] ?>">Edit</a>
										<a style="background-color: #3C91E6; padding:5px; color:beige; border-radius:4px; width:60px;"
											onclick="return confirm('Yakin Ingin Penghapus Data Tersebut')"
											href="<?= BASEURL ?>/home_admin/hapusakun/<?= $akun_petugas['id'] ?>">Hapus</a>
									</td>
								</tr>
								<?php
								endforeach ?>
							</tbody>
						</table>
					</tbody>
				</div>
		</main>

	</section>
	<!-- CONTENT -->


	<script src="<?=BASEURL?>/js/ha.js"></script>
</body>

</html>