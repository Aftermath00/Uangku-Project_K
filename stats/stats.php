<?php
    include '../connection.php';
     session_start();
    
     if(isset($_SESSION ['session_username'])){
          $username = $_SESSION ['session_username'];
     }

     $no_pemasukan = 1;
     $no_pengeluaran = 1;

     $sqlDataPemasukan = "SELECT id_pemasukan, tgl_pemasukan, ket_pemasukan, kategori_pemasukan, nominal_pemasukan FROM pemasukan WHERE username_pemasukan = '$username' ORDER BY tgl_pemasukan ASC";
     $dataPemasukan = mysqli_query($connection, $sqlDataPemasukan);

     $sqlDataPengeluaran = "SELECT id_pengeluaran, tgl_pengeluaran, ket_pengeluaran, kategori_pengeluaran, nominal_pengeluaran FROM pengeluaran WHERE username_pengeluaran = '$username' ORDER BY tgl_pengeluaran ASC";
     $dataPengeluaran = mysqli_query($connection, $sqlDataPengeluaran);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="statistics.css" />
    <title>UangKu | My Statistic</title>
    <link rel="icon" href="../img/uangku.jpeg" type="image/x-icon" />
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <div class="logo_name"><img src="../img/uangku.jpeg" class="uangku" />UangKu</div>
        <i class="bx bx-menu" id="btn"></i>
      </div>
      <ul class="nav-list">
        <li>
          <a href="../dashboard/home.php">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboard</span>
          </a>
          <span class="tooltip">Dashboard</span>
        </li>
        <li>
          <a href="../profile/profile.php">
            <i class="bx bx-user"></i>
            <span class="links_name">Profile</span>
          </a>
          <span class="tooltip">Profile</span>
        </li>
        <li>
          <a href="../add/spending.php">
            <i class="bx bx-money"></i>
            <span class="links_name">Add Spending</span>
          </a>
          <span class="tooltip">Add Spending</span>
        </li>
        <li>
          <a href="../add/income.php">
            <i class="bx bx-wallet"></i>
            <span class="links_name">Add Income</span>
          </a>
          <span class="tooltip">Add Income</span>
        </li>
        <li>
          <a href="../edit/edit.php" class="active">
            <i class="bx bx-bar-chart-alt-2"></i>
            <span class="links_name">My Stats</span>
          </a>
          <span class="tooltip">My Stats</span>
        </li>
        <li>
          <a href="../logout/logout_process.php">
            <i class="bx bx-log-out" id="log_out"></i>
            <span class="links_name">Log Out</span>
          </a>
          <span class="tooltip">Log Out</span>
        </li>
        <li class="profile">
          <div class="profile-details">
            <div class="name_job">
              <div class="name">Hello, <?php echo $username ?>!</div>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <br>
      <br>
      <br>
      <div class="container-xl">
                <div class="table-responsive">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h2>Income Stats</h2>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Date</th>
                                        <th>Description
                                        <th>Category</th>
                                        <th>Amount</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                <?php

                    while ($tampilkanPemasukan = mysqli_fetch_array($dataPemasukan)) { 

                ?>
                <tr>
                    <td><?php echo $no_pemasukan++; ?></td>
                    <td><?php echo $tampilkanPemasukan['tgl_pemasukan']; ?></td>
                    <td><?php echo $tampilkanPemasukan['ket_pemasukan']; ?></td>
                    <td><?php echo $tampilkanPemasukan['kategori_pemasukan']; ?></td>
                    <td><?php echo number_format($tampilkanPemasukan['nominal_pemasukan'], 0,",", "."); ?></td>
                    <td>
                        <?php $id_row_pemasukan = $tampilkanPemasukan['id_pemasukan'];?>
                        <a href="../edit/edit_income.php?id=<?php echo $id_row_pemasukan;?>"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                        <a href="../delete/deleteIncome_process.php?id=<?php echo $id_row_pemasukan;?>"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
                  </div>
                  </div>
                  <br>
                  <br>
                    <div class="table-responsive">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h2>Spending Stats</b></h2>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Date</th>
                                        <th>Description
                                        <th>Category</th>
                                        <th>Amount</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                <?php

                    while ($tampilkanPengeluaran = mysqli_fetch_array($dataPengeluaran)) { 

                ?>
                <tr>
                    <td><?php echo $no_pengeluaran++; ?></td>
                    <td><?php echo $tampilkanPengeluaran['tgl_pengeluaran']; ?></td>
                    <td><?php echo $tampilkanPengeluaran['ket_pengeluaran']; ?></td>
                    <td><?php echo $tampilkanPengeluaran['kategori_pengeluaran']; ?></td>
                    <td><?php echo number_format($tampilkanPengeluaran['nominal_pengeluaran'], 0,",", ".")?></td>
                    <td>
                        <?php $id_row_pengeluaran = $tampilkanPengeluaran['id_pengeluaran'];?>
                        <a href="../edit/edit_spending.php?id=<?php echo $id_row_pengeluaran;?>"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                        <a href="../delete/deleteSpending_process.php?id=<?php echo $id_row_pengeluaran;?>"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>

        </div>
      </div>
      </div>
    </section>
    <script>
      let sidebar = document.querySelector(".sidebar");
      let closeBtn = document.querySelector("#btn");
      let profile = document.querySelector(".profile");

      closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
      });

      searchBtn.addEventListener("click", () => {
        // Sidebar open when you click on the search iocn
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
      });

      // following are the code to change sidebar button(optional)
      function menuBtnChange() {
        if (sidebar.classList.contains("open")) {
          closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
        } else {
          closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
        }
      }
    </script>
  <!-- Bootstrap Bundle with Popper -->
  
</body>  
</html>
