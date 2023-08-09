<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, intial-scale=1.0">
	<title>Add To Cart-Classy Fashion</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https;//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>	
<div class="container">
  <div class="navbar">
  	<div class="logo">
  		<img src="logo.jpg" width="90px">
  	</div>
  	<nav>
  		<ul id="menuitems">
  		 <li><a href="part1.html"> Home </a></li>
  		 <li><a href="products.html"> Products </a></li>
  		 <li><a href=""> About </a></li>
  		 <li><a href=""> Contact </a></li>
  		 <li><a href="accountt.html"> Account </a></li>
  		</ul>
  	</nav>
  	<img src="b.jpg" width="30px" height="30px" class="m">
    <img src="new-add-lists-list-item-512.png" class="menu" onclick="menutoggle()">
  </div>     
</div>
<!-----cart items details------->
<div class="small-container cart-page">
  <table>
    <tr>
     <th>Serial NO.</th>
      <th>Item Name</th>
      <th>Item Price</th>
      <th>Quantity</th>
      <th></th>
    </tr>
    <tr>
      <td>
        <div class="cart-info">
            <?php
            $total=0;
             if(isset($_SESSION['cart']))
             {
              foreach($_SESSION['cart'] as $key=>$value)
              {
                $sr=$key+1;
                $total=$total+$value['price'];
                echo "
                      <tr>
                      <td>$sr</td>
                      <td>$value[item_name]</td>
                      <td>$value[price]</td>
                      <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'></td>
                      <form action='manage_cart.php' method='post'>
                      <td><button name='remove_item' class='bdn'>Remove</button></td>
                      <input type='hidden' name='item_name' value='$value[item_name]'>
                      </form>
                      </tr>

                      ";
              }
             }
            ?>



        </div>
      </td>
    </tr>
        </table>
    



    <div class="total-price">
          <h3>Total :-</h3>
              <h3><?php echo $total ?></h3>
              <form><br><br><br>
                <input type="radio" name="cash">Cash On Delivery<br>
                <a href="place.html"><button class="bdn">Buy Now</button></a>
              </form>
    </div>
</div>



<!-------footer------>
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="footer-col-1">
        <h3>Download Our App</h3>
        <p>Download App For Android And IOS Mobile Phone</p>
        <div class="app-logo">
          <img src="appp.png" width="90px">
          <img src="app.png" width="90px">
        </div>
      </div>
       <div class="footer-col-2">
        <img src="logo.jpg" width="90px">
        <p>Our Purpose Is To Sustainably Make <br>The Pleasure And Benefits Of Sports Accessible <br>To The Many.</p>
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
        <h3>Follow Us</h3>
        <ul>
          <li>Facebook</li>
          <li>Twitter</li>
          <li>Instragram</li>
          <li>YouTube</li>
        </ul>
      </div>
    </div>
    <hr>
    <p class="Copyright">More Information Contact - Deepika Gupta</p>
  </div>
</div>
<!--------js for toggle menu------->
<script>
  var menuitems = document.getElementById("menuitems");
  menuitems.style.maxHeight ="0px";
  function menutoggle(){
    if(menuitems.style.maxHeight == "0px")
    {
      menuitems.style.maxHeight = "200px";
    }
    else{
      menuitems.style.maxHeight = "0px";
    }
  }
</script>


</body>
</html>