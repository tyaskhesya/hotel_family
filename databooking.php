<!DOCTYPE html>
<html>
<head>
    <title>Hotel Family</title>
    <link rel="stylesheet" type="text/css" href="hotelfamily.css">
</head>
<body>
    <ul>
        <li><a href="index.php">Halaman Utama</a></li>
        <li><a href="databooking.php">Data Booking</a></li>
        <li><a href="pendaftaran.php">Pendaftaran</a></li>
        <li><a href="tentanghotel.php">Tentang Hotel</a></li>
    </ul>
    <center>Data Booking<br></center>
    <br>
    <table border="1" align="center">
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>NO.TELEPON</th>
            <th>JENIS KELAMIN</th>
            <th>NO KAMAR</th>
            <th>GRADE</th>
            <th>TIPE KAMAR</th>
            <th>HARI BOOKING</th>
            <th>OPSI</th>

        </tr>
        <?php
        include "koneksi.php";
        $siswa="select * from tb_siswa inner join tb_jurusan on tb_siswa.kd_jurusan=tb_jurusan.kd_jurusan";
        $query=mysqli_query($koneksi,$siswa);
        $no=1;
            while ($data=mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $no++?></td>
                    <td><?php echo $data['nis']?></td>
                    <td><?php echo $data['nama']?></td>
                    <td><?php echo $data['jk']?></td>
                    <td><?php echo $data['tempatlahir']?></td>
                    <td><?php echo $data['tgllahir']?></td>
                    <td><?php echo $data['nohp']?></td>
                    <td><?php echo $data['nm_jurusan']?></td>

                <td>
                    <a href="edit.php?nis=<?php echo $data['nis']; ?>">
                    UBAH</a>|
                    <a href="hapus.php?nis=<?php echo $data['nis']; ?>">
                    HAPUS</a>
                </td>
                </tr>
                <?php
            }
                ?>
    </table>
</body>
</html>