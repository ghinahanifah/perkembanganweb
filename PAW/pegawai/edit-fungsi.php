<?php
include "koneksi1.php";
if (isset($_POST['update'])) {
    // print_r($_POST);
    $updateSql = mysqli_query($conf, "UPDATE menu_minuman SET
    nama_minuman ='$_POST[nama_minuman]'
    jenis_minuman ='$_POST[jenis_minuman]'
    WHERE id='$_POST[id]'
    ");
    if ($updateSql) {
        echo "<script type='text/javascript'>alert('Data Berhasil diedit...!'); location.href=\"index.php\";</script>";
    } else {
        echo "<script type='text/javascript'>alert('Data Gagal diedit...!'); location.href=\"index.php\";</script>";
    }
}