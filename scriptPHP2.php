<?php
  // require("scriptPHP.php");
  $db = mysqli_connect("localhost", "root", "","cloneSecreto");
  $rows = [];
  $folder = dirname(__FILE__);
  $folder = str_replace("/storage/emulated/0/htdocs/anonymousMessage/", "", $folder);
  
  if (isset($_POST["kirim"])) {
    $pesan = $_POST["pesan"];
    $querynya = "INSERT INTO `$folder` (`Pesan`) VALUES ('$pesan')";

    mysqli_query($db, $querynya);
  }
  

    $querynya1 = "SELECT * FROM `$folder`";



    $result = mysqli_query($db, $querynya1);
  
  $row = mysqli_fetch_assoc($result);

do{
  $rows[] = $row;
}while($row = mysqli_fetch_assoc($result));

?>