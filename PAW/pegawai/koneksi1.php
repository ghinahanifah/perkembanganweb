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
    mysqli_query($conf, "DELETE FROM data_pegawai WHERE id= $id");
    return mysqli_affected_rows($conf);
}

function edit($data)
{
    global $conf;
    $id = $data["id"];
    $nama_pegawai = ($data["nama_pegawai"]);
    $no_hp = ($data["no_hp"]);
    $alamat = ($data["alamat"]);

    $query = "UPDATE data_pegawai SET
    nama_pegawai='$nama_minuman',
    no_hp='$no_hp',
    alamat='$alamat'
    WHERE id=$id ";

    mysqli_query($conf, $query);
    return mysqli_affected_rows($conf);
}
?>