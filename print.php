<?php
include 'config.php';
$id = $_GET['ID'];
$karyawan = mysqli_query($koneksi, "select * from karyawan where ID='$id'");
while ($data = mysqli_fetch_assoc($karyawan)){
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
        <title><?php echo $data['nama'] ?></title>
    </head>
    <body onload="window.print();">
        <div class="container mt-5">
            <p class="fw-bold">Profil Karywan</p>
            <p>Nama : <?php echo $data['nama']?></p>
            <p>KTP : <?php echo $data['KTP']?></p>
            <p>Nomor Telpon : <?php echo $data['no.telp']?></p>
            <p>Tahun Masuk : <?php echo $data['tahun masuk']?></p>
            <p>Masa Kerja : <?php echo $data['masa kerja']?></p>
        </div>
    <?php
}
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
    </html>