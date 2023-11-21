<?php
include "koneksi.php";
$nis=$_POST['nis'];
$nama= $_POST['Nama'];
$JK=$_POST['Jk'];
$TTL=$_POST['TempatLahir'];
$TGL=$_POST['TanggalLahir'];
$NoHP=$_POST['NoHP'];
$Jurusan=$_POST['jurusan'];
$edit= mysqli_query($koneksi, "UPDATE tb_siswa set nama='$nama', jk='$JK', tempatlahir=`'$TTL', tgllahir='$TGL', nohp='$NoHP', kd_jurusan='$Jurusan' where nis='$nis'");
$hasil=mysqli_query($koneksi,$edit);
if($hasil === true):
    echo "<script>alert('Pendaftaran Gagal Tersimpan!!');location.href='edit.php';</script>";
    else :
    echo "<script>alert('Pendaftaran Berhasil Tersimpan!!');location.href='tampil.php';</script>";
    endif;
    ?>