<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
	<link rel="stylesheet" href="t.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
</head>

<body>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th width="30">Id</th>
                <th width="80">Nama</th>
                <th width="100">Alamat</th>
                <th width="80">No. Hp</th>
                <th width="80">Paket</th>
                <th width="100">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi_db.php";
            $no = 1;
            $ambildata = mysqli_query($koneksi, "select * from data_pelanggan");
            while ($tampil = mysqli_fetch_array($ambildata)) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $tampil[0]; ?></td>

                    <td><?php echo $tampil[3]; ?></td>
                    <td><?php echo $tampil[4]; ?></td>
                    <td><?php echo $tampil[5]; ?></td>
                    
                    <td>
                        <span class="pr-3">
                        <a href='?kode=$tampil[id_pelanggan]'>
                            <input type='button' class='btn-delete pr-5'></input>
                        </a>
                        </span>
                        <span>
                        <a href='pelanggan_ubah?kode=$tampil[id_pelanggan]'>
                            <input type='button' class='btn-edit'></input>
                        </a>
                        </span>
                    </td>

                    </td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
        </tfoot>
    </table>


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>