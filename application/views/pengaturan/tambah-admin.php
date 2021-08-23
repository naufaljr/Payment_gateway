
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper pl-3">
			<!-- Page header (Data Pelanggan) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0">Profil Admin| <small>Administrator</small></h1>
						</div>
					</div>
				</div>
			</div>

			<!-- Main content -->

			<div class="card">
				<!-- card-header -->
				<div class="card-body">
					<!-- /.Peringatan-->
					<h5><i class="fas fa-info pb-3"></i> Tambah Admin</h5>

					<form action="" method="post">
						<table style="font-size: 14px;">
							<tr>
								<td>username</td>
								<td class="pt-2"><input type="text" name="nama"></td>
							</tr>
							<tr>
								<td>Nama</td>
								<td class="pt-2"><input type="text" name="nama"></td>
							</tr>
							<tr>
								<td>Email</td>
								<td class="pt-2"><input type="text" name="email"></td>
							</tr>
							<tr>
								<td>Jabatan</td>
								<td class="pt-2"><input type="text" name="jabatan"></td>
							</tr>
							<tr>
								<td>Status</td>
								<td class="pt-2"><input type="text" name="status"></td>
							</tr>
							<tr>
								<td>Tanggal Dibuat</td>
								<td class="pt-2"><input type="text" name="tgl_dibuat"></td>
							</tr>
							<tr>
								<td class="pt-3"><input type="submit" value="simpan" name="proses"></td>
							</tr>
						</table>
					</form>

					<?php
					include "koneksi_db.php";

					if (isset($_POST['proses'])) {
						mysqli_query($koneksi, "insert into data_admin set
						username = '$_POST[username]',
						nama = '$_POST[nama]',
						email = '$_POST[email]',
						jabatan = '$_POST[jabatan]',
						status = '$_POST[status]',
						tgl_dibuat = '$_POST[tgl_dibuat]'");

						echo "berhasil tersimpan";
						echo "<meta http-equiv=refresh content=2;URL='profil-admin'>";
					}

					?>
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
