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
            <!-- /.Ubah data-->
            <?php
            if (isset($_GET['kode'])) {

                include "koneksi_db.php";
                $sql = mysqli_query($koneksi_db_paket, "select * from data_paket where id_paket='$_GET[kode]'");
                $data = mysqli_fetch_array($sql);
            }
            ?>
            <!-- /.Peringatan-->
            <h5><i class="fas fa-info pb-3"></i> Ubah Data Paket</h5>

            <form action="" method="post">
                <table style="font-size: 14px;">
                    <tr>
                        <td width="130">ID</td>
                        <td class="pt-2"><input type="text" name="id_paket" value="<?php echo $data['id_paket']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td class="pt-2"><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Bandwith</td>
                        <td class="pt-2"><input type="text" name="kecepatan" value="<?php echo $data['kecepatan']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td class="pt-2"><input type="text" name="harga" value="<?php echo $data['harga']; ?>"></td>
                    </tr>
                    <tr>
                        <td class="pt-3"><input type="submit" value="Ubah" name="proses"></td>
                    </tr>
                </table>
            </form>

            <?php
            include "koneksi_db.php";

            if (isset($_POST['proses'])) {
                mysqli_query($koneksi_db_paket, "update data_paket set  
                        nama = '$_POST[nama]',
                        kecepatan = '$_POST[kecepatan]',
                        harga = '$_POST[harga]',
                        where id_paket = '$_GET[kode]'");

                echo "Data barang telah diubah";
                echo "<meta http-equiv=refresh content=1;URL='paket_data'>";
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