<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include_once('includes/head.php')?>
  <title>RedStore | Ecomerce Website</title>
  </head>
  <body>
    <div class="header">
    <?php include_once('includes/main-header.php')?>
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
          <a href="product-detail.php"><img src="images/product-1.jpg" alt="product" /></a>
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
    <?php include_once('includes/footer.php')?>
   
   <!-- SCRIPTS -->
   <?php include_once('includes/script.php')?>
  </body>
</html>
