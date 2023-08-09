<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, intial-scale=1.0">
	<title>A Single Product-Classy Fashion</title>
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
  		 <li><a href="first.php"> Home </a></li>
  		 <li><a href="products.php"> Products </a></li>
  		 <li><a href=""> About </a></li>
  		 <li><a href=""> Contact </a></li>
  		 <li><a href="logout.php">Log Out</a></li>
  		</ul>
  	</nav>
  	<a href="cart.php"><img src="b.jpg" width="30px" height="30px" class="m"></a>
    <img src="new-add-lists-list-item-512.png" class="menu" onclick="menutoggle()">
  </div>     
</div>


<!------single product details------->
<div class="small-container single-product">
  <div class="row">
    <div class="col-2">
       <form action="manage_cart.php" method="post">
        <div class="cart">
      <img src="91.png" width="350px" id="ProductImg">
    </div>
    <div class="col-2">
      <p>Indoor Game</p>
      <h1> Bowling Set </h1>
      <h4><i class="fa fa-inr">342.00</i></h4>
       <div class="rating">
        <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star-half-o"></i> 
     </div>
       Quantity<input type="number" value="1" name="Quantity">
      <button type="submit" class="bdn" name="add_to_cart">Add to cart</button>
       <button type="submit" class="bdn">Buy Now</button>
       <input type="hidden" name="item_name" value="Bowling Set">
      <input type="hidden" name="price" value="342.00">
    </div>
  </form>
    </div>
  </div>
</div>
<!----title------>
<div class="small-container">
  <div class="row row-2">
    <h2>Related Products</h2>
    <a href="products.php"><p>View More</p></a>
  </div>
</div>

<!------product----->
<div class="small-container">
         <div class="row">
      <div class="col-4">
      <a href="productdetails14.php"></ABBR><img src="11.png"></a>
      <h4> Wrist Watch</h4>
      <div class="rating">
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>       
     </div>
      <p><i class="fa fa-inr">1800.00</i></p>
    </div>
     <div class="col-4">
      <a href="productdetails34.php"><img src="d.jpg"></a>
      <h4> Shoes For Men</h4>
      <div class="rating">
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star-o"></i>       
     </div>
      <p><i class="fa fa-inr">460.00</i></p>
    </div>
     <div class="col-4">
      <a href="productdetails35.php"><img src="16.png"></a>
      <h4>Smart Watch</h4>
      <div class="rating">
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>       
     </div>
      <p><i class="fa fa-inr">9000.00</i></p>
    </div>
     <div class="col-4">
      <a href="productdetails24.php"><img src="63.png"></a>
      <h4> Shirt For Men</h4>
      <div class="rating">
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star-half-o"></i>     
     </div>
      <p><i class="fa fa-inr">499.00</i></p>
    </div>
    </div>
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
<!---------js for product gallery------>
<script>
  var ProductImg = document.getElementById("ProductImg");
  var smallimg = document.getElementByClassName("smallimg");
  smallimg[0].onclick=function()
  {
    ProductImg.src=smallimg[0].src;
  }
   smallimg[1].onclick=function()
  {
    ProductImg.src=smallimg[1].src;
  }
   smallimg[2].onclick=function()
  {
   ProductImg.src=smallimg[2].src;
  }
   smallimg[3].onclick=function()
  {
    ProductImg.src=smallimg[3].src;
  }
</script>
</body>
</html>