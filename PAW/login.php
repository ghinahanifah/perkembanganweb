<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<h1>Harap Isi Terlebih Dahulu</h1>

<div class="kotak_login">
    <p class="tulisan_login">Silahkan login</p>
    <form action="login-proses.php" method="POST">
        <label for="username"> Username </label>
        <input type="username" name="username" class="form_login"  id="username" placeholder="Username atau email ..">

        <label for="password"> Password </label>
        <input type="password" name="password" class="form_login"  id="password" placeholder="Password ..">
        
       <input type="submit" name= "login" class="tombol_login" value="LOGIN">
        <br/>
        <br/>
        <center>
            <a class="link" href="login.php">kembali</a>
        </center>
    </form>
</body>
</html>