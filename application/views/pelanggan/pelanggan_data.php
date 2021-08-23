<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper pl-3">
	<!-- Page header (Data Pelanggan) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Data Pelanggan | <small>Administrator</small></h1>
				</div>
			</div>
		</div>
	</div>

	<!-- Main content -->

	<div class="card">
		<!-- card-header -->
		<div class="card-body">
			<!-- button tambah pelanggan -->
			<a href="pelanggan_tambah">
				<button type="button" class="btn btn-primary btn-success mb-3" style="width:200px;height:44px">
					<i class="far fa-plus-square mr-2"></i>Tambah Pelanggan
				</button>

			</a>

			<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
				<div class="row">
					<!-- Showing 3 entries -->
					<div class="col-sm-12 col-md-6 ">
						<div class="dataTables_info" id="example1_info" role="status" aria-live="polite" style="font-size: 14px;">
							Showing 3 entries
						</div>
					</div>
					<!-- Search -->
					<div class="col-sm-12 col-md-6 mb-2">
						<div id="example1_filter" class="dataTables_filter">
							<span style="float: right">
								<div class="input-group input-group-sm" style="width: 150px;">
									<input type="text" name="table_search" class="form-control float-right" placeholder="Search">

									<div class="input-group-append">
										<button type="submit" class="btn btn-default">
											<i class="fas fa-search"></i>
										</button>
									</div>
								</div>
							</span>
						</div>
					</div>


				</div>
				<!-- Table -->
				<table class="table" border="";>
				<thead>
					<tr>
						<th width="30">No</th>
						<th width="50">Id</th>
						<th width="200">Nama</th>
						<th width="340">Alamat</th>
						<th width="120">No. Hp</th>
						<th width="300">Email</th>
						<th width="100">Paket</th>
						<th colspan="2" width="100">Aksi</th>
					</tr>
					<?php
					include "koneksi_db.php";

					$no = 1;
					$ambildata = mysqli_query($koneksi, "select * from data_pelanggan");
					while ($tampil = mysqli_fetch_array($ambildata)) {
						$warna = ($no % 2 == 1) ? "white" : "#eee";
						echo "
									<tr bgcolor='$warna'>
										<td>$no</td>
										<td>$tampil[id_pelanggan]</td>
										<td>$tampil[nama]</td>
										<td>$tampil[alamat]</td>
										<td>$tampil[no_hp]</td>
										<td>$tampil[email]</td>
										<td>$tampil[paket]</td>
										<td>
											<a href='?kode=$tampil[id_pelanggan]'>
												<input type='button' class='btn-delete'></input>
											</a>
										</td>
											<td>
											<a href='pelanggan_ubah?kode=$tampil[id_pelanggan]'>
												<input type='button' class='btn-edit'></input>
											</a>
										</td>
									<tr>";
						$no++;
					}
					?>
					</thead>
				</table>
				<?php
				include "koneksi_db.php";


				if (isset($_GET['kode'])) {
					mysqli_query($koneksi, "delete from data_pelanggan where id_pelanggan='$_GET[kode]'");

					echo "Data berhasil dihapus";
					echo "<meta http-equiv=refresh content=2;URL='pelanggan_data'>";
				}
				?>
				<div class="row">
					<div class="col-sm-12 col-md-5">
						<div class="dataTables_info" id="example1_info" role="status" aria-live="polite" style="font-size: 14px;">
							Showing
							1 to 10 of 30 entries</div>
					</div>
					<div class="col-sm-12 col-md-7">
						<div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
							<ul class="pagination pagination-sm m-0 float-right">
								<li class="page-item"><a class="page-link" href="#">«</a></li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">»</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.card-body -->
	</div>
	<!-- /.content-wrapper -->

	<!-- Control Sidebar -->
	<aside class="control-sidebar control-sidebar-dark">
		<!-- Control sidebar content goes here -->
	</aside>
	<!-- /.control-sidebar -->
</div>
