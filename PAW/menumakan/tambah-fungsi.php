<?php
include "../koneksi.php";
if(isset($_POST ['tambah'])){
    $insertSql = mysqli_query($conf, "INSERT into menu_mknn (nama_makanan,jenis_makanan)
    values
    ('$_POST[nama_makanan]', '$_POST[jenis_makanan]')");
    if($insertSql){
        echo "<script type='text/javascript'>
                    alert('Data Berhasil disimpan...!'); 
                    location.href=\"home.php\";
              </script>";
    }
}
?>