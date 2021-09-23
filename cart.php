<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include_once('includes/head.php')?>
    <title>Cart | RedStore</title>
  </head>
  <body>
  <?php include_once('includes/nav.php')?>

    <!-- CART ITEMS DETAIL -->

    <div class="small-container cart-page">
      <table>
       <tr>
         <th>Product</th>
         <th>Quantity</th>
         <th>Subtotal</th>
       </tr>
       <tr>
         <td>
           <div class="cart-info">
             <img src="images/buy-1.jpg" alt="cart-item">
             <div>
               <p>Red Printed T-Shirt</p>
               <small>Price: $50.00</small>
               <a href="">Remove</a>
             </div>
           </div>
         </td>
         <td> <input type="number" value="1" name="" id=""> </td>
         <td>$ 50.00</td>
       </tr>
      </table>

      <div class="total-price">
        <table>
          <tr>
            <td>Subtotal</td>
            <td>$200.00</td>
          </tr>
          <tr>
            <td>Tax</td>
            <td>$35.00</td>
          </tr>
          <tr>
            <td>Total</td>
            <td>$230.00</td>
          </tr>
        </table>
      </div>
    </div>

   

    <!-- FOOTER -->

    <?php include_once('includes/footer.php')?>
    
    <!-- SCRIPTS -->
    <?php include_once('includes/script.php')?>
  </body>
</html>
