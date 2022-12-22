<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UangKu | Signin Page</title>
    <link rel="icon" href="../img/uangku.jpeg" type="image/x-icon" />
    <link rel="stylesheet" href="signin.css" />
  </head>
  <body>
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
    <div class="container">
      <div class="drop">
        <div class="content">
          <h2>Sign In</h2>
          <form action="signin_process.php" method="post">
            <div class="inputBox">
              <input type="text" placeholder="username" name="username" required/>
            </div>
            <div class="inputBox">
              <input type="password" placeholder="password" name="password" required/>
            </div>
            <div class="inputBox">
              <input type="submit" value="Sign in" name="signin" />
            </div>
          </form>
        </div>
      </div>
      <a href="../signup/signup.php" class="buttons">Sign Up</a>
      <a href="../index.php" class="home-buttons">Home</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>
    <!-- transparent navbar  -->
    <script type="text/javascript">
      $(window).on("load", function () {
        //Show loader wrapper
        $("nav").hide();
        $(".loader-wrapper").show();

        //Hide navbar and disable scrolling
        $("body").css("overflow", "hidden");

        // After 2 seconds, hide loader wrapper and re-enable scrolling
        setTimeout(function () {
          $(".loader-wrapper").hide();
          $("nav").show();
          $("body").css("overflow", "visible");
        }, 2000);
      });
    </script>
    <script>
      let images = ["🤑", "💰", "💸", "💲", "💷", "💶", "💴", "💵", "🧧", "💹", "💳"];
      document.addEventListener("mousemove", function (e) {
        let body = document.querySelector("body");
        let emoji = document.createElement("span");
        let x = e.offsetX;
        let y = e.offsetY;

        emoji.style.left = x + "px";
        emoji.style.top = y + "px";

        let icon = images[Math.floor(Math.random() * images.length)];
        emoji.innerText = icon;

        let size = Math.random() * 20;
        emoji.style.fontSize = 5 + size + "px";

        // get random value for transform
        let max = 0;
        let min = 100;
        let randomValue = Math.floor(Math.random());
        emoji.style.transform = "translateX(" + randomValue + "px";

        body.appendChild(emoji);

        setTimeout(function () {
          emoji.remove();
        }, 1000);
      });
    </script>
  </body>
</html>
