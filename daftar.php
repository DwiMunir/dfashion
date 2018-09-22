<?php
  require_once 'atom/init.php';

if (isset($_POST['daftar'])) {
  $nama   = $_POST['nama'];
  $email  = $_POST['email'];
  $pass   = $_POST['password'];

  if (!empty(trim($nama)) && !empty(trim($email)) && !empty(trim($pass))) {
    if (cekemail($email)) {
      if (daftar($nama, $email, $pass)) {
        $alert = "Akun Berhasil Di buat, Silahkan Login!!";
      }else {
        $alert = "gagal";
      }
    }
    else {
      $alert = "email udah ada abang";
        }
  }else {
    $alert  ="gagal";
  }
}
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Login</title>
     <style media="screen">
       @import url('style.css');
     </style>
   </head>
   <body>

     <?php require_once 'views/header.php'; ?>

     <div class="daf">

       <form class="daftar" action="daftar.php" method="post">
         <img src="source/logo.png" alt=""><br>
         <h2><?=@$alert;?></h2>
         <input type="text" name="nama" placeholder="Nama Lengkap">
         <input type="email" name="email" placeholder="Email" required><br>
         <input type="password" name="password" placeholder="Password" required><br>
         <input type="submit" name="daftar" value="Daftar">
         <p>Sudah Punya Akun? Login di <a href="">sini</a></p>
       </form>
     </div>

<?php
  require_once 'views/footer.php';
 ?>
