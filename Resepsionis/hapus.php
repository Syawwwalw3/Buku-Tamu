<?php
require 'koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($conn,"DELETE FROM resepsionis WHERE id_resepsionis= $id");

if(query){
    echo'
    <script type="text/javascript">
    alert("Data berhasil di dihapus!");
    window.location ="resepsionis.php";
    </script>
    ';
    }else{
       echo'
       <script type="text/javascript">
       alert("Data gagal di hapus!");
       window.location ="resepsionis.php";
       </script>
       ';
    }
   