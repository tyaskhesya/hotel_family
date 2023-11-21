<?php
include "koneksi.php";
$nis=$_POST['nis'];
$nama=$_POST['Nama'];
$JK=$_POST['Jk'];
$TTL=$_POST['TempatLahir'];
$TGL=$_POST['TanggalLahir'];
$NoHP=$_POST['NoHP'];
$Jurusan=$_POST['jurusan'];
$tambah="insert into tb_siswa values('$nis','$nama','$JK','$TTL','$TGL','$NoHP','$Jurusan')";

$hasil=mysqli_query($koneksi,$tambah);
if($hasil === false):
    echo "<script>alert('Pendaftaran Gagal Tersimpan!!');location.href='pendaftaran.php';</script>";
    else :
    echo "<script>alert('Pendaftaran Berhasil Tersimpan!!');location.href='datasiswa.php';</script>";
    endif;
    ?>


    