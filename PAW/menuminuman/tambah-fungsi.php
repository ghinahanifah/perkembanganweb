<?php
include "koneksi1.php";
if(isset($_POST ['tambah'])){
    $insertSql = mysqli_query($conf, "INSERT into menu_minuman (nama_minuman,jenis_minuman)
    values
    ('$_POST[nama_minuman]', '$_POST[jenis_minuman]')");
    if($insertSql){
        echo "<script type='text/javascript'>
                    alert('Data Berhasil disimpan...!'); 
                    location.href=\"index.php\";
              </script>";
    }
}
?>