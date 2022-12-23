<?php
     include '../connection.php';

     if (isset($_POST['signup'])){
          $sqlCheckUsername = "SELECT user_username FROM user WHERE user_username = '$input_username'";
          $checkUsername = mysqli_query($connection,$sqlCheckUsername);
          $sqlCheckEmail = "SELECT user_email FROM user WHERE user_username = '$input_username'";
          $checkEmail = mysqli_query($connection,$sqlCheckEmail);
          
          if (mysqli_num_rows($checkUsername) > 0 ){
               echo '<script>alert("Username Telah dipakai")</script>';
                echo "<script>window.location = 'signup.php'</script>";
          } 
          else{
               $sqlSignUp = "INSERT INTO user (user_email, user_username, user_password) 
                              VALUES ('$input_email', '$input_username', md5('$input_password'))";
               $adduser = mysqli_query($connection, $sqlSignUp);

               if($adduser){
                echo '<script>alert("Sign Up Berhasil")</script>';
                echo "<script>window.location = '../signin/signin.php'</script>";
               }               
          }
     }
     else{
          echo '<script>alert("Sign Up Gagal")</script>';
          echo "<script>window.location = '../index.php'</script>";
     }

?>