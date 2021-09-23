<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include_once('includes/head.php')?>
    <title>All Products | RedStore</title>
  </head>
  <body>
    <!-- NAV -->
  <?php include_once('includes/nav.php')?>

    <!-- FEATURED CONTAIER -->
    <div class="small-container">
      <div class="row row-2">
        <h2>All Products</h2>
        <select>
          <option value="">Default Sorting</option>
          <option value="">Sort By Price</option>
          <option value="">Sort By Popularity</option>
          <option value="">Sort By Rating</option>
          <option value="">Sort By Sale</option>
        </select>
      </div>
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
      <div class="page-btn">
        <span>1</span>
        <span>&#8594;</span>
      </div>
    </div>

    <!-- FOOTER -->

    <?php include_once('includes/footer.php')?>
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
