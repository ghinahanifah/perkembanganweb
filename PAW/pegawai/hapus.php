<?php
include 'koneksi1.php';
$id = $_GET["id"];
if (hapus($id)) {
    echo "
    <script>
        alert('data berhasil di hapus');
        document.location.href= 'index.php';
    </script>
    ";
}else {
    echo "
    <script>
        alert('data tidak berhasil di hapus');
        document.location.href= 'index.php';
    </script>
";
}
