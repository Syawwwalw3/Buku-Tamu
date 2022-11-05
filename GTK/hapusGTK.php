<?php
require '../koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($conn,"DELETE FROM gtk WHERE id_gtk= $id");

if(query){
    echo'
    <script type="text/javascript">
    alert("Data berhasil di dihapus!");
    window.location ="gtk.php";
    </script>
    ';
    }else{
       echo'
       <script type="text/javascript">
       alert("Data gagal di hapus!");
       window.location ="gtk.php";
       </script>
       ';
    }
   