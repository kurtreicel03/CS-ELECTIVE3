<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <script src="https://use.fontawesome.com/17c66b745d.js" defer></script>

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <title>RedStore | Ecomerce Website</title>
  </head>
  <body>
    <div class="header">
      <div class="container">
        <div class="navbar">
          <div class="logo">
            <img src="images/logo.png" width="125px" alt="web-logo" />
          </div>
          <nav>
            <ul id="Menuitems">
              <li><a href="/index.php">Home</a></li>
              <li><a href="/product.php">Products</a></li>
              <li><a href="">About</a></li>
              <li><a href="">Contact</a></li>
              <li><a href="">Account</a></li>
            </ul>
          </nav>
          <img
            src="images/cart.png"
            alt="cart-image"
            width="30px"
            height="30px"
          />
          <img
            src="images/menu.png"
            alt="menu"
            class="menu-icon"
            onclick="menutoggle()"
          />
        </div>
        <div class="row">
          <div class="col-2">
            <h1>
              Give Your Workout<br />
              A new style!
            </h1>
            <p>
              Success isn't always about greatness. It's about consistent.
              Consistent<br />
              hard work gains success. Greatness will comme.
            </p>
            <a href="" class="btn">Explore Now &#8594;</a>
          </div>
          <div class="col-2">
            <img src="images/image1.png" alt="header-img" />
          </div>
        </div>
      </div>
    </div>

    <!-- FEATURED CATEGORIES -->

    <div class="categories">
      <div class="small-container">
        <div class="row">
          <div class="col-3">
            <img src="images/category-1.jpg" alt="category-1" />
          </div>
          <div class="col-3">
            <img src="images/category-2.jpg" alt="category-2" />
          </div>
          <div class="col-3">
            <img src="images/category-3.jpg" alt="category3s" />
          </div>
        </div>
      </div>
    </div>

    <!-- FEATURED CONTAIER -->
    <div class="small-container">
      <h2 class="title">Featured Product</h2>
      <div class="row">
        <div class="col-4">
          <img src="images/product-1.jpg" alt="product" />
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
          </div>
          <p>50$</p>
        </div>
      </div>
      <h2 class="title">Latest Product</h2>
      <div class="row">
        <div class="col-4">
          <img src="images/product-2.jpg" alt="product" />
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
          </div>
          <p>50$</p>
        </div>
      </div>
    </div>
    <!-- OFFER -->
    <div class="offer">
      <div class="small-container">
        <div class="row">
          <div class="col-2">
            <img
              src="images/exclusive.png"
              class="offer-img"
              alt="exclusive-img"
            />
          </div>
          <div class="col-2">
            <p>Exclusively Available on RedStore</p>
            <h1>Smart Band 4</h1>
            <small
              >The Mi smart band 4 features a 39.9% larger (than Mi band 3)
              AMOLED color full-touch display with adjustable brightness, so
              everything is clear as can be.</small
            >
            <a href="" class="btn">Buy Now &#8594;</a>
          </div>
        </div>
      </div>
    </div>

    <!-- TESTIMONIAL -->

    <div class="testimonial">
      <div class="small-container">
        <div class="row">
          <div class="col-3">
            <i class="fa fa-quote-left"></i>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore
              laboriosam possimus dolor nam rerum obcaecati aperiam corrupti
              nesciunt quaerat harum, recusandae, voluptate repellendus pariatur
              porro ad nemo, saepe at quis.
            </p>
            <div class="rating">
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star-o" aria-hidden="true"></i>
            </div>
            <img src="images/user-1.png" alt="user" />
            <h3>Sean Parker</h3>
          </div>
        </div>
      </div>
    </div>

    <!-- BRANDS -->
    <div class="brands">
      <div class="small-container">
        <div class="row">
          <div class="col-5">
            <img src="images/logo-godrej.png" alt="brand-logo" />
          </div>
          <div class="col-5">
            <img src="images/logo-oppo.png" alt="brand-logo" />
          </div>
          <div class="col-5">
            <img src="images/logo-coca-cola.png" alt="brand-logo" />
          </div>
          <div class="col-5">
            <img src="images/logo-paypal.png" alt="brand-logo" />
          </div>
          <div class="col-5">
            <img src="images/logo-philips.png" alt="brand-logo" />
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
  </body>
</html>