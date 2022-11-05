<?php

require 'koneksi.php';


$username = $_POST["username"];
$nama_lengkap= $_POST["nama_lengkap"];
$kelas= $_POST["kelas"];
$password= $_POST["password"];
$roles= $_POST["roles"];


$query = mysqli_query($conn, "INSERT INTO resepsionis VALUES(NULL , '$username', '$nama_lengkap','$kelas','$password','$roles')");

 if(query){
 echo'
 <script type="text/javascript">
 alert("Data berhasil di tambah!");
 window.location ="resepsionis.php";
 </script>
 ';
 }else{
    echo'
    <script type="text/javascript">
    alert("Data gagal di tambah!");
    window.location ="tambah_resep.php";
    </script>
    ';
 }