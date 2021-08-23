
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper pl-3">
			<!-- Page header (Data Pelanggan) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0">Data Paket | <small>Administrator</small></h1>
						</div>
					</div>
				</div>
			</div>

			<!-- Main content -->

			<div class="card">
				<!-- card-header -->
				<div class="card-body">
					<!-- /.Peringatan-->
					<h5><i class="fas fa-info pb-3"></i> Tambah Paket</h5>

					<form action="" method="post">
						<table style="font-size: 14px;">
							<tr>
								<td>Id</td>
								<td class="pt-2"><input type="text" name="id_paket"></td>
							</tr>
							<tr>
								<td>Nama</td>
								<td class="pt-2"><input type="text" name="nama"></td>
							</tr>
							<tr>
								<td>Bandwith</td>
								<td class="pt-2"><input type="text" name="kecepatan"></td>
							</tr>
							<tr>
								<td>Harga</td>
								<td class="pt-2"><input type="text" name="harga"></td>
							</tr>
							<tr>
								<td class="pt-3"><input type="submit" value="simpan" name="proses"></td>
							</tr>
						</table>
					</form>

					<?php
					include "koneksi_db.php";

					if (isset($_POST['proses'])) {
						mysqli_query($koneksi_db_paket, "insert into data_paket set
						id_paket = '$_POST[id_paket]',
						nama = '$_POST[nama]',
						kecepatan = '$_POST[kecepatan]',
						harga = '$_POST[harga]'");

						echo "berhasil tersimpan";
						echo "<meta http-equiv=refresh content=2;URL='paket_data'>";
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
