<?php 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$par1_ip = "127.0.0.1";
$par2_name = "Dieev";
$par3_p = "123DEas321";
$par4_db="database";

$connect = mysqli_connect($par1_ip, $par2_name, $par3_p, $par4_db);

if($connect == false){
    echo "Помилка підключення";
}

?>
