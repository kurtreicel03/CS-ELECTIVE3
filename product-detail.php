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
    <title>All Products | RedStore</title>
  </head>
  <body>
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
    </div>

    <!-- SINGLE PRODUCT DETAIL -->
    <div class="small-container single-product">
      <div class="row">
        <div class="col-2">
          <img
            src="images/gallery-1.jpg"
            width="100%"
            id="product-img"
            alt="product-1"
          />

          <div class="small-img-row">
            <div class="small-img-col">
              <img
                src="images/gallery-1.jpg"
                class="small-img"
                width="100%"
                alt="product"
              />
            </div>
            <div class="small-img-col">
              <img
                src="images/gallery-2.jpg"
                class="small-img"
                width="100%"
                alt="product"
              />
            </div>
            <div class="small-img-col">
              <img
                src="images/gallery-3.jpg"
                class="small-img"
                width="100%"
                alt="product"
              />
            </div>
            <div class="small-img-col">
              <img
                src="images/gallery-4.jpg"
                class="small-img"
                width="100%"
                alt="product"
              />
            </div>
          </div>
        </div>
        <div class="col-2">
          <p>Home / T-shirt</p>
          <h1>Red Print T-Shirt by HRX</h1>
          <h4>$50.00</h4>
          <select name="" id="">
            <option value="">L</option>
            <option value="">M</option>
            <option value="">S</option>
          </select>
          <input type="number" value="1" name="" id="" />
          <a href="" class="btn">Add to Cart</a>
          <h3>Product Details <i class="fa fa-indent"></i></h3>
          <br />
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem
            sequi architecto quidem perspiciatis voluptas non consequuntur.
            Deleniti debitis quis ab officiis. Mollitia, molestias fugit!
            Reprehenderit error iure deleniti doloribus eaque!
          </p>
        </div>
      </div>
    </div>

    <div class="small-container">
      <div class="row row-2">
        <h2>Related Product</h2>
        <p>View more</p>
      </div>
    </div>

    <!-- FEATURED CONTAIER -->
    <div class="small-container">
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
      //   SINGLE PRODUCT IMG

      const ProductImg = document.getElementById("product-img");
      const SmallImg = document.getElementsByClassName("small-img");
      console.log(ProductImg.src);
      console.log(SmallImg[0].src);
      SmallImg[0].onclick = function () {
        ProductImg.src = SmallImg[0].src;
      };
      SmallImg[1].onclick = function () {
        ProductImg.src = SmallImg[1].src;
      };
      SmallImg[2].onclick = function () {
        ProductImg.src = SmallImg[2].src;
      };
      SmallImg[3].onclick = function () {
        ProductImg.src = SmallImg[3].src;
      };
    </script>
  </body>
</html>
