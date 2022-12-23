<?php
    include '../connection.php';
     session_start();
    
     if(isset($_SESSION ['session_username'])){
          $username = $_SESSION ['session_username'];
     }

     $sqlTotalPengeluaran = "SELECT nominal_pengeluaran FROM pengeluaran WHERE username_pengeluaran = '$username'";
     $totalPengeluaran = mysqli_query($connection, $sqlTotalPengeluaran);
     
     $sqlTotalPemasukan = "SELECT nominal_pemasukan FROM pemasukan WHERE username_pemasukan = '$username'";
     $totalPemasukan = mysqli_query($connection, $sqlTotalPemasukan);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="home.css" />
    <title>UangKu | Dashboard</title>
    <link rel="icon" href="../img/uangku.jpeg" type="image/x-icon" />
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
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
          <a href="home.php" class="active">
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
          <a href="../stats/stat.php">
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
              <div class="name"><?php echo $username ?></div>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <div class="text">Welcome to Uangku, <?php echo $username ?>.</div>
      <div class="insights">
        <div class="sales">
        <div class="row">
        <div class="card card-1">
                <div class="card-header">
                  <h3><i class="bx bx-money"></i> Total Spending</h3>
                </div>
                <div class="card-body">
                  <h1><?php 
                    $totalFix_pengeluaran = 0;
                    while ($tampilkanTotalPengeluaran = mysqli_fetch_array($totalPengeluaran)) { 
                         $total_pengeluaran[] = $tampilkanTotalPengeluaran; 
                    } 

                    for($i=0; $i < sizeof($total_pengeluaran); $i++) { 
                         $totalFix_pengeluaran += $total_pengeluaran[$i]['nominal_pengeluaran'];
                    }   
                    echo 'Rp ', $totalFix_pengeluaran;                                        
               ;?></h1>
                </div>
              </div>
              <div class="card card-2">
                <div class="card-header">
                  <h3><i class="bx bx-wallet"></i> Total Income</h3>
                </div>
                <div class="card-body">
                  <h1><?php 
                    $totalFix_pemasukan = 0;
                    while ($tampilkanTotalPemasukan = mysqli_fetch_array($totalPemasukan)) { 
                         $total_pemasukan[] = $tampilkanTotalPemasukan; 
                    } 

                    for($i=0; $i < sizeof($total_pemasukan); $i++) { 
                         $totalFix_pemasukan += $total_pemasukan[$i]['nominal_pemasukan'];
                    }   
                    echo 'Rp ', $totalFix_pemasukan;                                        
               ;?></h1>
                </div>
                  </div>
                </div>
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
      // following are the code to change sidebar button(optional)
      function menuBtnChange() {
        if (sidebar.classList.contains("open")) {
          closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
        } else {
          closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
        }
      }
    </script>
  </body>
</html>
