<?php
    include "koneksi_db.php";
    $ambildata = mysqli_query($koneksi, "select * from data_pelanggan");

    if (isset($_POST['cari'])) {
    $ambildata = cari($_POST["keyword"]);
        

        echo "Data berhasil dihapus";

    }

?>

<!DOCTYPE html>

<html>

<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>

<body>
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-12">
                <h2 style="text-align: center;margin-bottom: 30px">Data Buku Dengan CodeIgniter & DataTables</h2>

<form action="" method="post">
    <input type="text" name="keyword" size="30" autofocus
    placeholder="masukkan keyword" autocomplete="off">
    <button type="submit" name="cari">Cari!</button>
</form>
<br>

                <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No. Hp</th>
                            <th>Email</th>
                            <th>Paket</th>
                            <th colspan="2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "koneksi_db.php";
                        $no = 1;
                        $ambildata = mysqli_query($koneksi, "select * from data_pelanggan");
                        while($tampil = mysqli_fetch_array($ambildata)) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $tampil[0]; ?></td>
                                <td><?php echo $tampil[1]; ?></td>
                                <td><?php echo $tampil[2]; ?></td>
                                <td><?php echo $tampil[3]; ?></td>
                                <td><?php echo $tampil[4]; ?></td>
                                <td><?php echo $tampil[5]; ?></td>

                                <td style="text-align: center;">
                                    <button class="btn btn-sm btn-primary" onclick="edit_book(<?php echo $tampil[0]; ?>)"><i class="glyphicon glyphicon-pencil"></i></button>
                                    <button class="btn btn-sm btn-danger" onclick="delete_book(<?php echo $tampil[0]; ?>)"><i class="glyphicon glyphicon-trash"></i></button>
                                


                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>
</body>

</html>