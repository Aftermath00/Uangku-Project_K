<?php
     include '../connection.php';

    session_start();
    if(isset($_SESSION ['session_username'])){
     $username = $_SESSION ['session_username'];
    }

     $id = $_GET['id'];
     
     $sqlHapusData = "DELETE FROM pengeluaran WHERE username_pengeluaran = '$username' AND id_pengeluaran = '$id'";
     $hapusData = mysqli_query($connection, $sqlHapusData);
         if ($hapusData) {
              echo '<script>alert("Data berhasil dihapus")</script>';
              echo "<script>window.location = '../stats/stats.php'</script>";
            }
        else{
              echo "Gagal menghapus data";
              echo "<a href='../stats/stats.php'>Kembali</a>";
            }   

?>