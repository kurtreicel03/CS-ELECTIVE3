<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include_once('includes/head.php')?>
    <title>Accounts | RedStore</title>
  </head>
  <body>
  <?php include_once('includes/nav.php')?>

    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="images/image1.png" width="100%" alt="image">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="indicator"> 
                        </div>
                        <form  id="LoginForm">
                            <input type="text" name="username" placeholder="username">
                            <input type="password" name="password" placeholder="password" >
                            <button type="submit" class="btn">Login</button>
                            <a href="">Forgot Password</a>
                        </form>

                        <form  id="RegForm">
                            <input type="text" name="username" placeholder="username">
                            <input type="email" name="email" placeholder="email">
                            <input type="password" name="password" placeholder="password" >
                            <button type="submit" class="btn">Register</button> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

   

    <!-- FOOTER -->

    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Download Our App</h3>
            <p>Download App for Android and ios mobile phone.</p>
            <div class="app-logo">
              <img src="images/play-store.png" alt="play-store" />
              <img src="images/app-store.png" alt="app-store" />
            </div>
          </div>
          <div class="footer-col-2">
            <img src="images/logo-white.png" alt="white-logo" />
            <p>
              Our Purpose Is To Sustainably Make The Pleasure and Benefits of
              Sports Accessible to the Many.
            </p>
          </div>
          <div class="footer-col-3">
            <h3>Useful Links</h3>
            <ul>
              <li>Coupons</li>
              <li>Blog Post</li>
              <li>Return Policy</li>
              <li>Join Affiliate</li>
            </ul>
          </div>
          <div class="footer-col-4">
            <h3>Follow us</h3>
            <ul>
              <li>Facebook</li>
              <li>Twitter</li>
              <li>Instagram</li>
              <li>YouTube</li>
            </ul>
          </div>
        </div>
        <hr />
        <p class="copyright">&copy; 2021 Red Store. All Rights Reserved</p>
      </div>
    </div>

    <script>
      // MENU ITEMS
      const MenuItems = document.getElementById("Menuitems");
      console.log(MenuItems);
      MenuItems.style.maxHeight = "0px";

      function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
          MenuItems.style.maxHeight = "200px";
        } else {
          MenuItems.style.maxHeight = "0px";
        }
      }
    </script>

      <script>
        //   TOGGLE FORM
        const LoginForm = document.getElementById("LoginForm");
        const RegForm = document.getElementById("RegForm");
        const Indicator = document.getElementById("indicator");

        function register(){
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(100px)"
        }

        function login(){
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(0px)"
        }

      </script>


  </body>
</html>
