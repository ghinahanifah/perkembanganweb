<?php
$conf=mysqli_connect("localhost","root","","crud");
// if($conf){
// echo "koneksi Sukses";
// }else{
    // echo "koneksi Gagal";
// }
function query($query){
    global $conf;
    $result = mysqli_query($conf, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function hapus($id)
{
    global $conf;
    mysqli_query($conf, "DELETE FROM menu_minuman WHERE id= $id");
    return mysqli_affected_rows($conf);
}

function edit($data)
{
    global $conf;
    $id = $data["id"];
    $nama_minuman = ($data["nama_minuman"]);
    $jenis_minuman = ($data["jenis_minuman"]);

    $query = "UPDATE menu_minuman SET
    nama_minuman='$nama_minuman',
    jenis_minuman='$jenis_minuman'
    WHERE id=$id ";

    mysqli_query($conf, $query);
    return mysqli_affected_rows($conf);
}
?>