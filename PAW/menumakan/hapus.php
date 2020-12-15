<?php
include '../koneksi.php';
$id = $_GET["id"];
if (hapus($id)) {
    echo "
    <script>
        alert('data berhasil di hapus');
        document.location.href= 'home.php';
    </script>
    ";
}else {
    echo "
    <script>
        alert('data tidak berhasil di hapus');
        document.location.href= 'home.php';
    </script>
";
}
