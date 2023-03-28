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
				<a href="#member">
					<i class='bx bxs-group'></i>
					<span class="text">Data Member</span>
				</a>
			</li>
			<li>
				<a href="#paket">
					<i class='bx bxs-message-dots'></i>
					<span class="text">Data Paket</span>
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
										<td><label for="nama">Nama</label></td>
										<td><input type="text" name="kode" id="kode"></td>
									</tr>
									<tr>
										<td><label for="nomer">Nomor</label></td>
										<td><input type="text" name="nomer" id="nomer"></td>
									</tr>
									<tr>
										<td><label for="jenis_pelaundry">Kode Paket</label></td>
										<td><input type="text" name="jenis_pelaundry" id="jenis_pelaundry"></td>
									</tr>
									<tr>
										<td><label for="deskripsi">Deskripsi</label></td>
										<td><input type="text" name="deskripsi" id="deskripsi"></td>
									</tr>
									<tr>
										<td><label for="jumlah">Jumlah</label></td>
										<td><input type="number" name="jumlah" id="jumlah"></td>
									</tr>
									<tr>
										<td><label for="keterangan">Keterangan</label></td>
										<td><input type="text" name="keterangan" id="keterangan"></td>
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
								<th>Nama Pelanggan</th>
								<th>No Hp</th>
								<th>Paket</th>
								<th>Deskripsi</th>
								<th>Harga</th>
								<th>Jumlah</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
										foreach($data['pelaundry_biasa'] as $detail_laundry):?>
							<tr>
								<td><?=$detail_laundry['nama'];?></td>
								<td><?=$detail_laundry['nomer'];?></td>
								<td><?=$detail_laundry['jenis_paket'];?></td>
								<td><?=$detail_laundry['deskripsi'];?></td>
								<td>Rp.<?=$detail_laundry['harga'];?></td>
								<td><?=$detail_laundry['jumlah'];?>Kg</td>
								<td style="color:red;"><?=$detail_laundry['keterangan'];?></td>
								<td class="edit">
									<a style="background-color: #3C91E6; padding:5px; color:beige; border-radius:4px;"
										href="<?=BASEURL?>/home_petugas/ubahstatusmember/<?$detail_laundry['id']?>">Done</a>
								</td>
							</tr>
							<?php
										endforeach?>

							<?php
										foreach($data['order_member'] as $order_member):?>
							<tr>
								<td><?=$order_member['nama'];?></td>
								<td><?=$order_member['nomer'];?></td>
								<td><?=$order_member['jenis_paket'];?></td>
								<td><?=$order_member['deskripsi'];?></td>
								<td>Rp.<?=$order_member['harga'];?></td>
								<td><?=$order_member['jumlah'];?>Kg</td>
								<td style="color:red;"><?=$order_member['keterangan'];?></td>
								<td class="edit">
									<a style="background-color: #3C91E6; padding:5px; color:beige; border-radius:4px;"
										href="<?=BASEURL?>/home_petugas/ubahstatusmember/<?$order_member['id']?>">Done</a>
								</td>
							</tr>
							<?php
										endforeach?>
						</tbody>
					</table>
				</div>
		</main>
		<main>
			<div class="head-title">
				<div class="left">
					<h1 id="member">Data Member</h1>
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
								<form action="ha/tambahpetugas" method="post">
									<table>
										<tr>
											<td><label for="id">Id Member</label></td>
											<td><input type="text" name="id" id="id"></td>
										</tr>
										<tr>
											<td><label for="nama">nama</label></td>
											<td><input type="text" name="nama" id="nama"></td>
										</tr>
										<tr>
											<td><label for="nomer">No HP</label></td>
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
								<th>Id Member</th>
								<th>Nama</th>
								<th>No Hp</th>

							</tr>
						</thead>
						<tbody>
							<?php
								foreach($data['member'] as $member):?>
							<tr>
								<td><?=$member['id'];?></td>
								<td><?=$member['nama'];?></td>
								<td>+62<?=$member['nomer'];?></td>
							</tr>
							<?php
								endforeach?>
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
					<div id="myModal3" class="modal">
						<div class="modal-content">
						</div>
					</div>
				</div>

				<div class="order">
					<table>
						<thead>
							<tr>
								<th>Id Paket</th>
								<th>Jenis Laundry</th>
								<th>Harga</th>

							</tr>
						</thead>
						<tbody>
							<?php
								foreach($data['paket'] as $paket):?>
							<tr>
								<td><?=$paket['id'];?></td>
								<td><?=$paket['jenis_paket'];?></td>
								<td>Rp.<?=$paket['harga'];?></td>
							</tr>
							<?php
								endforeach?>
						</tbody>
					</table>
				</div>
		</main>


	</section>
	<!-- CONTENT -->


	<script src="<?BASEURL?>/js/ha.js"></script>
</body>

</html>