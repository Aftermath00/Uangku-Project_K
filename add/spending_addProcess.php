<?php 
  session_start();
    
  if(isset($_SESSION ['session_username'])){
     $input_username_pengeluaran = $_SESSION ['session_username'];
  } 

  if(isset($_POST['tambah'])) { 
     include_once '../connection.php';
    $input_tgl_pengeluaran = $_POST['tgl_pengeluaran'];
    $input_ket_pengeluaran = $_POST['ket_pengeluaran'];
    $input_kategori_pengeluaran = $_POST['kategori_pengeluaran'];
    $input_nominal_pengeluaran = $_POST['nominal_pengeluaran'];

    $sqlTambahPengeluaran = "INSERT INTO pengeluaran (tgl_pengeluaran, ket_pengeluaran, kategori_pengeluaran,  nominal_pengeluaran, username_pengeluaran) 
                              VALUES ('$input_tgl_pengeluaran', '$input_ket_pengeluaran', '$input_kategori_pengeluaran', '$input_nominal_pengeluaran', '$input_username_pengeluaran')";
    $tambah_pengeluaran = mysqli_query($connection, $sqlTambahPengeluaran);

    if ($tambah_pengeluaran) {
      echo '<script>alert("Data berhasil ditambah")</script>';
      echo "<script>window.location = 'spending.php'</script>";
    }
    else  {
      echo "Gagal menambahkan data";
      echo "<script>window.location = 'spending.php'</script>";
    }
  }
  else {
    echo "<script>window.history.back()</script>";
  }

?>