<?php

include '../connection.php';

session_start();
if(isset($_SESSION ['session_username'])){
     $username = $_SESSION ['session_username'];
}

$id_edit_process = $_GET['id'];

if(isset($_POST['editSpending'])) {
     $input_tgl_pengeluaran = $_POST['tgl_pengeluaran'];
     $input_ket_pengeluaran = $_POST['ket_pengeluaran'];
     $input_kategori_pengeluaran = $_POST['kategori_pengeluaran'];
     $input_nominal_pengeluaran = $_POST['nominal_pengeluaran'];

    $sqlEditPengeluaran = "UPDATE pengeluaran SET
     tgl_pengeluaran = '$input_tgl_pengeluaran',
     ket_pengeluaran = '$input_ket_pengeluaran',
     kategori_pengeluaran = '$input_kategori_pengeluaran',
     nominal_pengeluaran = ' $input_nominal_pengeluaran'
     WHERE username_pengeluaran = '$username' AND id_pengeluaran = '$id_edit_process'";

    $update_pengeluaran = mysqli_query($connection, $sqlEditPengeluaran);
    if (isset($update_pengeluaran)) {
      echo '<script>alert("Data berhasil diedit")</script>';
      echo "<script>window.location = '../stats/stats.php'</script>";
     // var_dump($update_pemasukan);
    }
    else  {
      echo '<script>alert("Data gagal diedit")</script>';
      echo "<script>window.location = '../stats/stats.phps'</script>";
    }
  }
  else {
    echo "<script>window.history.back()</script>";
  }
