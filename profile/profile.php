<?php
    include '../connection.php';
     session_start();
    
     if(isset($_SESSION ['session_username'])){
          $username = $_SESSION ['session_username'];
     }

     $sqlDataUser = "SELECT user_email FROM user WHERE user_username = '$username'";
     $dataUser = mysqli_query($connection, $sqlDataUser);
     $tampilkanDataUser = mysqli_fetch_array($dataUser);  
     
     $sqlDataProfil = "SELECT * FROM profil WHERE email = '$tampilkanDataUser[user_email]'";
     $dataProfil = mysqli_query($connection, $sqlDataProfil);
     $tampilkanDataProfil = mysqli_fetch_assoc($dataProfil);  

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="profile.css" />
    <title>UangKu | User's Profile</title>
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
          <a href="../dashboard/home.php">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboard</span>
          </a>
          <span class="tooltip">Dashboard</span>
        </li>
        <li>
          <a href="profile.php" class="active">
            <i class="bx bx-user"></i>
            <span class="links_name">Profile</span>
          </a>
          <span class="tooltip">Profile</span>
        </li>
        <li>
          <a href="../add/spending.php">
            <i class='bx bx-money'></i>
            <span class="links_name">Add Spending</span>
          </a>
          <span class="tooltip">Add Spending</span>
        </li>
        <li>
          <a href="../add/income.php">
            <i class='bx bx-wallet'></i>
            <span class="links_name">Add Income</span>
          </a>
          <span class="tooltip">Add Income</span>
        </li>
        <li>
          <a href="../stats/stats.php">
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
      <!DOCTYPE html>
      <!--=== Coding by CodingLab | www.codinglabweb.com === -->
      <html lang="en">
        <head>
          <meta charset="UTF-8" />
          <meta http-equiv="X-UA-Compatible" content="IE=edge" />
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />

          <!----======== CSS ======== -->
          <link rel="stylesheet" href="style.css" />

          <!----===== Iconscout CSS ===== -->
          <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

          <!--<title>Responsive Regisration Form </title>-->
        </head>
        <body>
          <div class="container">
            <header>User's Profile Information</header>
            <form action="profile_editProcess.php" method="post">
              <div class="form first">
                <div class="details personal">
                  <span class="title">Personal Details</span>

                  <div class="fields">
                    <div class="input-field">
                      <label>Full Name</label>
                      <input type="text" placeholder="Enter your name" value="<?php echo $tampilkanDataProfil['nama_lengkap'];?>" name="nama_lengkap" required />
                    </div>

                    <div class="input-field">
                      <label>Date of Birth</label>
                      <input type="date" placeholder="Enter birth date" value="<?php echo $tampilkanDataProfil['tanggal_lahir'];?>" name="tgl_lahir" required />
                    </div>

                    <div class="input-field">
                      <label>Email</label>
                      <input type="text" placeholder="Enter your email" value="<?php echo $tampilkanDataUser['user_email'];?>" name="email" required />
                    </div>

                    <div class="input-field">
                      <label>Spending Limit</label>
                      <input type="number" placeholder="Enter Spending Limit" value="<?php echo $tampilkanDataProfil['batas_pengeluaran'];?>" name="batas_pengeluaran" required />
                    </div>

                    <div class="input-field">
                      <label>Gender</label>
                      <select name="gender" required>
                        <option disabled selected>Select gender</option>
                        <option value="Male" <?php if ($tampilkanDataProfil['jenis_kelamin'] == 'Male') {
                                    echo 'selected';
                                  } ?>>Male</option>


                        <option value="Female" <?php if ($tampilkanDataProfil['jenis_kelamin'] == 'Female') {
                                    echo 'selected';
                                  } ?>>Female</option>
                      </select>
                    </div>

                    <div class="input-field">
                      <label>Occupation</label>
                      <input type="text" placeholder="Enter your occupation" value="<?php echo $tampilkanDataProfil['pekerjaan'];?>" name="pekerjaan" required />
                    </div>
                  </div>
                </div>
              </button>
              <button type="submit" name="editProfil">
                  <span>Edit</span>
                  <div class="top"></div>
                  <div class="left"></div>
                  <div class="bottom"></div>
                  <div class="right"></div>
              </button>
                </div>
                </div>
              </div>
            </form>
          </div>
        </body>
      </html>
    </section>
    <script>
      let sidebar = document.querySelector(".sidebar");
      let closeBtn = document.querySelector("#btn");

      closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
      });

      searchBtn.addEventListener("click", () => {
        // Sidebar open when you click on the search iocn
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
      });

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
