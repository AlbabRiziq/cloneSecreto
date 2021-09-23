<?php
  require("scriptPHP.php");

?>


<!doctype html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU' crossorigin='anonymous'>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='style.css'>
    <title>Hello, world!</title>
  </head>
  <body>
    <div class='container1'>
      <div class='box'>
        <p class='j'>Kirim Balasan Tak Dikenal</p>
        <p class='jk'>Bagikan ke teman-teman kalian dan suruh mereka untuk mengisinya!!</p>
        <form action='' method='post'>
          <div class='form-floating'>
            <textarea name='nama' class='form-control' placeholder='Masukan Nama kamau' id='floatingTextarea'></textarea>
            <label for='floatingTextarea'>Masukan Nama</label>
          </div>
          <br>
          <input name='kirim' class='btn btn-primary' type='submit' value='Masuk'>
        </form>
      </div>
    </div>
    


    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ' crossorigin='anonymous'></script>
  </body>
</html>