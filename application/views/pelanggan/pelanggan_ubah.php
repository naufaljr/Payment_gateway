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
            <!-- /.Ubah data-->
            <?php
            if (isset($_GET['kode'])) {

                include "koneksi_db.php";
                $sql = mysqli_query($koneksi, "select * from data_pelanggan where id_pelanggan='$_GET[kode]'");
                $data = mysqli_fetch_array($sql);
            }
            ?>
            <!-- /.Peringatan-->
            <h5><i class="fas fa-info pb-3"></i> Ubah Data Pelanggan</h5>

            <form action="" method="post">
                <table style="font-size: 14px;">
                    <tr>
                        <td width="130">ID</td>
                        <td class="pt-2"><input type="text" name="id_pelanggan" value="<?php echo $data['id_pelanggan']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td class="pt-2"><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td class="pt-2"><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
                    </tr>
                    <tr>
                        <td>No. Hp</td>
                        <td class="pt-2"><input type="text" name="no_hp" value="<?php echo $data['no_hp']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td class="pt-2"><input type="text" name="email" value="<?php echo $data['email']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Paket</td>
                        <td class="pt-2"><input type="text" name="paket" value="<?php echo $data['paket']; ?>"></td>
                    </tr>
                    <tr>
                        <td class="pt-3"><input type="submit" value="Ubah" name="proses"></td>
                    </tr>
                </table>
            </form>

            <?php
            include "koneksi_db.php";

            if (isset($_POST['proses'])) {
                mysqli_query($koneksi, "update data_pelanggan set  
                        nama = '$_POST[nama]',
                        no_hp = '$_POST[no_hp]',
                        alamat = '$_POST[alamat]',
                        email = '$_POST[email]',
                        paket = '$_POST[paket]'
                        where id_pelanggan = '$_GET[kode]'");

                echo "Data barang telah diubah";
                echo "<meta http-equiv=refresh content=1;URL='pelanggan_data'>";
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
<!-- ./wrapper -->