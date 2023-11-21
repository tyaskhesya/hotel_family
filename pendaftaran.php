<!DOCTYPE html>
<html>
<head>
    <title>Tugas CRUD Kelompok 6</title>
    <link rel="stylesheet" type="text/css" href="hotelfamily.css">
</head>
<body>
    <ul>
        <li><a href="index.php">Halaman Utama</a></li>
        <li><a href="databooking.php">Data Booking</a></li>
        <li><a href="pendaftaran.php">Pendaftaran</a></li>
        <li><a href="tentanghotel.php">Tentang Hotel</a></li>
    </ul>
    <center> 
    <h3 align="center">INPUT DATA BOOKING</h3>
    <form action="prosesinput.php" method="post">
        <table >
            <tr >
                <td >ID BOOKING</td>
                <td >:</td>
                <td ><input type="number" name="Id_booking"></td>
            </tr>
            <tr>
                <td >Nama</td>
                <td >:</td>
                <td ><input type="text" name="Nama"></td>
            </tr>
            <tr>
                <td >No Telp</td>
                <td >:</td>
                <td ><input type="text" name="NoTelp"></td>
            </tr>
            <tr>
                <td >Jenis Kelamin</td>
                <td >:</td>
                <td ><input type="radio" name="Jk" value="Laki-Laki">Laki-laki
                <td ><input type="radio" name="Jk" value="Perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <td >No Kamar</td>
                <td >:</td>
                <td ><input type="number" name="NoKamar"></td>
            </tr>
            <tr>
                <td >Grade</td>
                <td >:</td>
                <td style="text-align: center;">
                    <select name="grade">
                        <?php
                            include "koneksi.php";
                            $jurusan="select * from tb_jurusan";
                            $query=mysqli_query($koneksi,$jurusan);
                            while ($data_jurusan=mysqli_fetch_array($query)){
                                $i++;
                            ?>
                            <option value="<?php echo $data_jurusan['kd_jurusan'];?>">
                            <?php echo $data_jurusan['nm_jurusan'] ?>
                            </option>
                            <?php
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td >Tipe Kamar</td>
                <td >:</td>
                <td style="text-align: center;">
                    <select name="tipekamar">
                        <?php
                            include "koneksi.php";
                            $jurusan="select * from tb_jurusan";
                            $query=mysqli_query($koneksi,$jurusan);
                            while ($data_jurusan=mysqli_fetch_array($query)){
                                $i++;
                            ?>
                            <option value="<?php echo $data_jurusan['kd_jurusan'];?>">
                            <?php echo $data_jurusan['nm_jurusan'] ?>
                            </option>
                            <?php
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td >Hari Booking</td>
                <td >:</td>
                <td ><input type="number" name="haribooking"></td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="SIMPAN">
                    <input type="reset" value="HAPUS">
                </td>
            </tr>
        </table>
</body>
</html>