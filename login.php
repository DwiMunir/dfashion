<?php
  require_once "atom/init.php";

  if (isset($_POST['login'])) {
    $email  = $_POST['email'];
    $pass   = $_POST['password'];

      if (login($email, $pass)) {

        $alert  = "Selamat Datang Kuy!!";
      }else {
        $alert  = "YAHH GAGAL!!";
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

     <div class="log">

       <form class="login" action="login.php" method="post">
         <img src="source/logo.png" alt="" disabled><br>
         <h2><?=@$alert;?></h2>
         <input type="email" name="email" placeholder="Email" required><br>
         <input type="password" name="password" placeholder="Password" required><br>
         <input type="submit" name="login" value="Login">
         <p>Belum Punya Akun? Daftar di <a href="">sini</a></p>
       </form>
     </div>

<?php
  require_once 'views/footer.php';
 ?>
