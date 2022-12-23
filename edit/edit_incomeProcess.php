<?php

include '../connection.php';

session_start();
if(isset($_SESSION ['session_username'])){
     $username = $_SESSION ['session_username'];
}

$id_edit_process = $_GET['id'];

if(isset($_POST['editIncome'])) {
     $input_tgl_pemasukan = $_POST['tgl_pemasukan'];
     $input_ket_pemasukan = $_POST['ket_pemasukan'];
     $input_kategori_pemasukan = $_POST['kategori_pemasukan'];
     $input_nominal_pemasukan = $_POST['nominal_pemasukan'];

    $sqlEditPemasukan = "UPDATE pemasukan SET
     tgl_pemasukan = '$input_tgl_pemasukan',
     ket_pemasukan = '$input_ket_pemasukan',
     kategori_pemasukan = ' $input_kategori_pemasukan',
     nominal_pemasukan = ' $input_nominal_pemasukan'
     WHERE username_pemasukan = '$username' AND id_pemasukan = '$id_edit_process'";

    $update_pemasukan = mysqli_query($connection, $sqlEditPemasukan);
    if (isset($update_pemasukan)) {
      echo '<script>alert("Data berhasil diedit")</script>';
      echo "<script>window.location = '../stats/stats.php'</script>";
     // var_dump($update_pemasukan);
    }
    else  {
      echo '<script>alert("Data gagal diedit")</script>';
      echo "<script>window.location = '../stats/stats.php'</script>";
    }
  }
  else {
    echo "<script>window.history.back()</script>";
  }
