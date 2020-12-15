<?php
include '../koneksi.php';
$id = $_GET["id"];
$tampilkan = query ("SELECT * FROM menu_mknn WHERE id = $id ")[0];
if (isset($_POST["update"])) {
  if(edit($_POST) > 0) {
    echo " 
                    <script>
                            alert('Data Berhasil Di Edit !' );
                            document.location.href = 'home.php';
                    </script>
            ";
  } else {
    echo " 
            <script>
                    alert('Data Gagal Di Edit !' );
                    document.location.href = 'home.php';
            </script>
            ";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>

<body>

  <div class="container">
    <h2>Edit data</h2>
    <p>Silakan mengedit data makanan pada form dibawah ini.....!</p>
    <form action="" method="POST" class="needs-validation" novalidate>
      <input type="hidden" name="id" value="<?= $tampilkan["id"]; ?>">
      <div class="form-group">
        <label for="nama_makanan">Nama makanan :</label>
        <input type="text" class="form-control" id="nama_makanan" placeholder="Masukkan nama makanan" name="nama_makanan" required value="<?= $tampilkan["nama_makanan"]; ?>">
        <div class="invalid-feedback">Nama makanan harus diisi......!</div>
      </div>
      <div class="form-group">
        <label for="jenis_makanan">jenis makanan :</label>
        <input type="text" class="form-control" id="jenis_makanan" placeholder="Masukkan jenis makanan" name="jenis_makanan" required value="<?= $tampilkan["jenis_makanan"]; ?>" >
        <div class="invalid-feedback">jenis makanan harus diisi.......!</div>
      </div>
        <button type="submit" class="btn btn-primary" name="update">Simpan</button>
      <button type="button" class="btn btn-secondary"onclick="self.history.back()">Cancel</button>
  </form>
</div>
    </form>
  </div>

  <script>
    // Disable form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Get the forms we want to add validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>

</body>

</html>