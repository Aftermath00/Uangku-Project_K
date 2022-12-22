<?php

include '../connection.php';

session_start();
if(isset($_SESSION ['session_username'])){
     $username = $_SESSION ['session_username'];
}

if(isset($_POST['editProfil'])) {
    $input_nama_lengkap = $_POST['nama_lengkap'];
    $input_tgl_lahir = $_POST['tgl_lahir'];
    $input_email = $_POST['email'];
    $input_batas_pengeluaran = $_POST['batas_pengeluaran'];
    $input_gender = $_POST['gender'];
    $input_pekerjaan = $_POST['pekerjaan'];

    $sqlEditProfil = "UPDATE profil SET
     nama_lengkap = '$input_nama_lengkap',
     tanggal_lahir = '$input_tgl_lahir',
     jenis_kelamin = '$input_gender',
     pekerjaan = '$input_pekerjaan',
     batas_pengeluaran = '$input_batas_pengeluaran',
     email = '$input_email' WHERE email = '$input_email'";

    $update_profil = mysqli_query($connection, $sqlEditProfil);
    if ($update_profil) {
      echo '<script>alert("Data berhasil diedit")</script>';
      echo "<script>window.location = 'profile.php'</script>";
    }
    else  {
      echo '<script>alert("Data gagal diedit")</script>';
      echo "<script>window.location = 'profile.php'</script>";
    }
  }
  else {
    echo "<script>window.history.back()</script>";
  }
