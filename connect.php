<?php 
 
$server = "localhost";
$user = "azwerty";
$pass = "palaotakkau";
$database = "db_hosting";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
function dd($v){
    var_dump($v);
    die;
  }
?>