<!DOCTYPE html>

<html>

<head>
    <title>Data Pelanggan</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>

<body>
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST">
                    <input type="text" name="query" placeholder="Cari Data" />
                    <input type="submit" name="cari" placeholder="Search" />
                </form>
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

                        $query = $_POST['query'];
                        if ($query != '') {
                            $select = mysqli_query($koneksi, "select * from data_pelanggan where nama like '" . $query . "' ");
                        } else {
                            $select = mysqli_query($koneksi, "select * from data_pelanggan");
                        }

                        $no = 0;
                        $ambildata = mysqli_query($koneksi, "select * from data_pelanggan");
                        while ($tampil = mysqli_fetch_array($ambildata)) {
                            $no++;
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
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


                                <td>
                                    <a href='?kode=$tampil[id_pelanggan]'>
                                        <input type='button' class='btn-delete'>
                                    </a>
                                </td>
                                <td>
                                    <a href='pelanggan-ubah.php?kode=$tampil[id_pelanggan]'>
                                        <input type='button' class='btn-edit'>
                                    </a>
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