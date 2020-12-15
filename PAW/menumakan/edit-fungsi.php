<?php
include "../koneksi.php";
if (isset($_POST['update'])) {
    // print_r($_POST);
    $updateSql = mysqli_query($conf, "UPDATE menu_mknn SET
    nama_makanan ='$_POST[nama_makanan]',
    jenis_makanan ='$_POST[jenis_makanan]',
    WHERE id='$_POST[id]'
    ");
    if ($updateSql) {
        echo "<script type='text/javascript'>alert('Data Berhasil diedit...!'); location.href=\"home.php\";</script>";
    } else {
        echo "<script type='text/javascript'>alert('Data Gagal diedit...!'); location.href=\"home.php\";</script>";
    }
}