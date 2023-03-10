<!DOCTYPE html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="index.css" />
        <title>UangKu | Your Personal Financial Management</title>
        
        <!-- Ikon website -->
        <link rel="icon" href="img/uangku.jpeg" type="image/x-icon" />
        <script src="https://kit.fontawesome.com/9b189efa70.js" crossorigin="anonymous"></script>
        <!-- Ikon bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <!-- package AOS -->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
      </head>
      <body id="home">
        
        <!-- Preloader -->
        <div class="loader-wrapper">
          <div class="loader">
              <svg viewBox="0 0 80 80">
                  <circle id="test" cx="40" cy="40" r="32"></circle>
              </svg>
          </div>
          
          <div class="loader triangle">
              <svg viewBox="0 0 86 80">
                  <polygon points="43 8 79 72 7 72"></polygon>
              </svg>
          </div>
          
          <div class="loader">
              <svg viewBox="0 0 80 80">
                  <rect x="8" y="8" width="64" height="64"></rect>
              </svg>
          </div>
        </div>
        <!-- Preloader End -->
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg fixed-top" style="background:transparent;">
          <div class="container">
            <a class="navbar-brand" href="#home">
              <img src="img/uangku.jpeg" alt="navbar icon"  class="uangku d-inline-block align-text-top"/>   UangKu
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#feature">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#founder">Founders</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="signin/signin.php">Sign In</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- Navbar End -->

        <!-- First container -->
        <div id="hero">
            <div class="hero-left">
                <img src="img/uangku.jpeg" alt="">
            </div>
            <div class="hero-right">
                <div>
                    <h1>UangKu</h1>
                    <h4>Your Personal Financial Management</h4>
                    <br>
                    <p>
                      Our website is designed to help you track your spending and make smarter financial decisions. With our easy-to-use features, you can quickly and easily view your current and past spending, analyze your budget and expenses, and set realistic financial goals. We believe that managing your finances should be easy and stress-free.
                    </p>
                    <br>
                    <h5>Sign up today and start taking control of your financial future!</h5>
                  </div>
            </div>
        </div>
        <!-- About -->
        
          <!-- Features -->
        <div id="feature">
          <div class="container-feature">
            <div id="marketing" class="section">
              <div class="content">
                <h1>Personal Tracking Data</h1>
              </div>
              <div class="overlay"></div>
            </div>
            <div id="technology" class="section">
              <div class="content">
                <h1>Our Features</h1>
              </div>
              <div class="overlay"></div>
            </div>
            <div id="advertising" class="section">
              <div class="content">
                <h1>Spending/Income Update</h1>
              </div>
              <div class="overlay"></div>
            </div>
          </div>
        </div>

        <!-- founder -->
        <div id="founder">
                <div class="founder-left">
                    <div class="founder-card">
                        <div class="cards-lines"></div>
                        <div class="imgBox">
                          <img src="img/rafly.jpeg" alt="rafly tolol">
                        </div>
                        <div class="content">
                          <div class="details">
                            <h2>Muhammad Rafly Ritonga<br><span>Undergraduate Computer Science Student</span></h2>
                            <div class="data">
                              <h3>211401003 <br> <span>Student ID</span></h3>
                              <h3>5<br> <span>Laboratory</span></h3>
                            </div>
                            <div class="actionBtn">
                              <a href="https://github.com/raflyritonga" target="_blank"><button><i class="bi bi-github"></i> Github</button></a>
                              <a href="https://www.linkedin.com/in/raflyritonga/" target="_blank"><button><i class="bi bi-linkedin"></i> LinkedIn</button></a>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="founder-right">
                  <h1>Our Founders</h1>
                  <div class="line"></div>
                  <div class="founder-card">
                    <div class="cards-lines"></div>
                    <div class="imgBox">
                      <img src="img/azmi.jpg" alt="azmi">
                    </div>
                    <div class="content">
                      <div class="details">
                        <h2>Rizky Azmi Swandy<br><span>Undergraduate Computer Science Student</span></h2>
                        <div class="data">
                          <h3>211401051 <br> <span>Student ID</span></h3>
                          <h3>5<br> <span>Laboratory</span></h3>
                        </div>
                        <div class="actionBtn">
                          <a href="https://github.com/Aftermath00" target="_blank"><button><i class="bi bi-github"></i> Github</button></a>
                          <a href="https://www.linkedin.com/in/rizky-azmi-swandy-170540228/" target="_blank"><button><i class="bi bi-linkedin"></i> LinkedIn</button></a>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
        </div>

        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>
      <!-- transparent navbar  -->
      <script type="text/javascript">
        $(window).on('load', function(){
          //Show loader wrapper
          $('nav').hide();
          $('.loader-wrapper').show();
        
          //Hide navbar and disable scrolling
          $('body').css('overflow', 'hidden');
        
          // After 2 seconds, hide loader wrapper and re-enable scrolling
          setTimeout(function(){
            $('.loader-wrapper').fadeOut();
            $('nav').show();
            $('body').css('overflow', 'visible');
          }, 2000);
        });
        
        // Show navbar and change color/box shadow when page is scrolled
        $(window).on('scroll', function(){
          if ($('.loader-wrapper').css('display') === 'none') {
            if (window.pageYOffset > 100) {
              $('nav').show();
              $('nav').css('background-color', '#143642');
              $('nav').css('box-shadow', '2px 2px 5px #000');
            } else {
              $('nav').show();
              $('nav').css('background-color', 'transparent');
              $('nav').css('box-shadow', 'none');
            }
          }
        });
      </script>
      <!-- end -->
      <!-- Prelooader Ends -->
        <!-- Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      </body>
    </html>
  </body>
</html>
