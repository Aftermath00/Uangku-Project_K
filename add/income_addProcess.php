<?php 
  
  session_start();
    
  if(isset($_SESSION ['session_username'])){
     $input_username_pemasukan = $_SESSION ['session_username'];
  } 

  if(isset($_POST['edit'])) { 
     include_once '../connection.php';
    $input_tgl_pemasukan = $_POST['tgl_pemasukan'];
    $input_ket_pemasukan = $_POST['ket_pemasukan'];
    $input_kategori_pemasukan = $_POST['kategori_pemasukan'];
    $input_nominal_pemasukan = $_POST['nominal_pemasukan'];

    $sqlTambahPemasukan = "INSERT INTO pemasukan (tgl_pemasukan, ket_pemasukan, kategori_pemasukan, nominal_pemasukan, username_pemasukan) 
                              VALUES ('$input_tgl_pemasukan', '$input_ket_pemasukan', '$input_kategori_pemasukan', '$input_nominal_pemasukan', '$input_username_pemasukan')";
    $tambah_pemasukan = mysqli_query($connection, $sqlTambahPemasukan);

    if ($tambah_pemasukan) {
      echo '<script>alert("Data berhasil ditambah")</script>';
      echo "<script>window.location = 'income.php'</script>";
    }
    else  {
      echo "Gagal menambahkan data";
      echo "<script>window.location = 'income.php'</script>";
    }
  }
  else {
    echo "<script>window.history.back()</script>";
  }

?>