<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include_once('includes/head.php')?>
    <title>Product | RedStore</title>
  </head>
  <body>
  <?php include_once('includes/nav.php')?>

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

    <?php include_once('includes/footer.php')?>
    

  <!-- SCRIPTS -->
  <?php include_once('includes/script.php')?>

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
