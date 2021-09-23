<?php
  $nama = $_POST["nama"];
  $db = mysqli_connect("localhost", "root", "","cloneSecreto");
  
  
  if (isset($_POST["kirim"])) {
    $ha = uniqid();
    $haa = mkdir($ha);
    copy("scriptPHP.php", "$ha/scriptPHP.php");
    copy("scriptPHP2.php", "$ha/scriptPHP2.php");
    copy("style2.css", "$ha/style2.css");
    copy("script.js", "$ha/script.js");
    $query = "CREATE TABLE `cloneSecreto`.`$ha` ( `id` INT NOT NULL AUTO_INCREMENT , `Pesan` TEXT NOT NULL , PRIMARY KEY (`id`))";
    mysqli_query($db, $query);
    mysqli_query($db, "INSERT INTO `namaUser` (`id`, `namanya`) VALUES (NULL, '$nama')");
    fclose($pesan);
   //////////////////////

   header("Location:/anonymousMessage/$ha");


   $he = '$rows';
   $hi = '$data';
   $hu = '$data["Pesan"]';


   $url = "Menjejel";
   /////////////////////////////
    
    $pesan = fopen("$ha/index.php","w");
    fwrite($pesan,"
<?php
  require('scriptPHP2.php');
?>


<!doctype html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU' crossorigin='anonymous'>
    <link rel='stylesheet' href='style2.css'>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
    <title>Hello, world!</title>
  </head>
  <body>
    
    <div class='container1'>
      <div class='box'>
        <p class='j'>Berikan Pesan Rahasia ke $nama</p>
        <form action='' method='post'>
          <div class='form-floating'>
            <textarea name='pesan' class='form-control' placeholder='Masukan Pesan Rahasiamu' id='floatingTextarea2' style='height: 100px'></textarea>
            <label for='floatingTextarea2'>Masukan Pesan Rahasiamu</label>
          </div>
          <br>
          <input name='kirim' class='btn btn-primary' type='submit' value='Kirim'>
        </form>
        
        
        <br><br><br>
        <p class='ha'>Pesan yang sudah dikirimkan ke $nama</p>
        
        <?php foreach ($he as $hi): ?>
        <div class='pesannya'>
          <p>'<?= $hu ?>'</p>
        </div>
        <?php endforeach; ?>
        
        <br><br><br><br><br><br>
        <form>
          <p>Bagikan link ini ke temanmu!!</p>
          <textarea type='text' id='url' class='form-control'>$url</textarea>
          <input class='btn btn-primary' type='button' value='Salin' onclick='salin()'>
        </form>
      </div>
    </div>

<button type='button' class='btn btn-primary bug' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>
  Bug?
</button>

<div class='modal fade modal-dialog modal-dialog-centered' id='staticBackdrop' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='staticBackdropLabel'>Modal title</h5>
        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
      </div>
      <div class='modal-body'>
        
        <div class='medsos'>
          <h1>Ada bug? Atau mau menghubungi saya? Klik Logo WhatsApp</h1>
          <a href='https://wa.me/message/KJL5XZYGFLQDG1'><img src='https://1.bp.blogspot.com/-61DwDuEBrSg/YUr1THoghuI/AAAAAAAACjU/hIwFLyezXH8YSs-Ne1qFzoPZTewY9ciBQCLcBGAsYHQ/s320/whatsapp.png' alt=''></a>
        </div>
        
        
      </div>
    </div>
  </div>
</div>

    
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ' crossorigin='anonymous'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
    <script src='script.js'></script>
  </body>
</html>");
    

  }






?>
