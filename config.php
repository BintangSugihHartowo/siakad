<?php
$db=new mysqli("localhost", "root", "1234", "siakaddb");
if($db){
    //echo "koneksi berhasil";
}else {
    echo "koneksi gagal";
}
?>
