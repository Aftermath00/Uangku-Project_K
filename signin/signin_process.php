<?php
     include '../connection.php';   

     session_start();

     if (isset($_POST['signin'])){
          $input_username = $_POST['username'];
          $input_password = $_POST['password'];

          if ($username != '' || $password != ''){
               $sqlSignin = "SELECT * FROM user WHERE user_username = '$input_username'";
               $checkSignin = mysqli_query($connection, $sqlSignin);
               $loginFetch = mysqli_fetch_array($checkSignin);
               
               if($loginFetch['user_username'] == ''){
                   echo '<script>alert("username not found")</script>';
                   echo "<script>window.location = 'signin.php'</script>";
               } 
               else if ($loginFetch['user_password'] != md5($input_password)){
                    echo '<script>alert("Password is wrong")</script>';
                    echo "<script>window.location = 'signin.php'</script>";
               }
               else{
                echo '<script>alert("Signin Succeed")</script>';

                $_SESSION['session_username'] = $input_username; //server
                $_SESSION['session_password'] = md5($input_password);

                $cookie_name = "cookie_username";
                $cookie_value = $input_username;
                $cookie_time = time() + (60 * 60 * 24 * 10);
                setcookie($cookie_name, $cookie_value, $cookie_time, "/");
                
                $cookie_name = "cookie_password";
                $cookie_value = md5($input_password);
                $cookie_time = time() + (60 * 60 * 24 * 10);
                setcookie($cookie_name, $cookie_value, $cookie_time, "/");

                echo "<script>window.location = '../dashboard/home.php'</script>";
               }

          }
     }

          // ambil data dari cookie; 
          if(isset($_COOKIE['cookie_username'])){
               $cookieUsername = $_COOKIE['cookie_username'];
               $cookiePassword = $_COOKIE['cookie_password'];
               $sqlCheckCookie = "SELECT * FROM user WHERE user_username = '$cookieUsername'";
               $checkCookie = mysqli_query($connection, $sqlCheckCookie);
               $CookieFetch = mysqli_fetch_array($checkCookie);
     
               if ($CookieFetch['user_password'] == $cookiePassword){
                    $_SESSION['session_username'] = $cookieUsername;
                    $_SESSION['session_password'] = $cookiePassword;               
               }    
          }
     
          if(isset($_SESSION['session_username'])){
               echo "<script>window.location = '../dashboard/home_dashboard.php'</script>";
               exit();
          }
     
?>