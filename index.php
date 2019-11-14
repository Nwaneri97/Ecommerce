<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>



<?php
include 'header.php';
?>





<div class="search-body">
    <div class="search-box">
        <input class="search-text" type="text" name="" placeholder="Search">
        <a class="search-button" href="#">
            <i class="fa fa-search"></i> 
        </a>
    </div>
    
</div>


<div class="container" style="width:70%">
  <div class="row mb-3 justify-content-around">
    <a href="#" class="product">
        <div class="product-image">
        <div class="card-image"><img src="image/nike-joyride-optik-coral-stardust-6.jpg"></div>
        <hr style="border: 0.3px solid #d32f2f;width:10%;">
        <div class="title text-uppercase text-center">Women</div> 
        </div>
    </a>

    <a href="#" class="product">
        <div class="product-image">
        <div class="card-image"><img src="image/nike-air-max-97-copper-6.jpg"></div>
        <hr style="border: 0.3px solid #d32f2f;width:10%;">
        <div class="title text-uppercase text-center">Men</div> 
        </div> 
    </a>
  </div>
</div>






<hr class="line mt-5" style="width:75%">

<div class="container" style="width:80%">
  
  <div class="text-center text-uppercase">Popular Products</div>

  <div class="row mb-5 justify-content-center">
      <a href="#" class="product col-sm p-3">
        <div class="product-image-small">
        <div class="card-image"><img src="image/ajuse.png"></div>
        <hr style="border: 0.3px solid #d32f2f;width:10%;">
        <div class="title text-uppercase text-center">Air Jordan 1 Fearless</div> 
        </div>
    </a>

    <a href="#" class="product col-sm p-3">
        <div class="product-image-small">
        <div class="card-image"><img src="image/use2.png"></div>
        <hr style="border: 0.3px solid #d32f2f;width:10%;">
        <div class="title text-uppercase text-center">Sacai X Nike Idwaffle Pine Green </div> 
        </div> 
    </a>

    <a href="#" class="product col-sm p-3">
        <div class="product-image-small">
        <div class="card-image"><img src="image/use1.png"></div>
        <hr style="border: 0.3px solid #d32f2f;width:10%;">
        <div class="title text-uppercase text-center">Nike Airmax Plus 1</div> 
        </div>
    </a>

    <a href="#" class="product col-sm p-3">
        <div class="product-image-small">
        <div class="card-image"><img src="image/use5.png"></div>
        <hr style="border: 0.3px solid #d32f2f;width:10%;">
        <div class="title text-uppercase text-center">Nike ISPA Airmax 270 Black & Orange</div> 
        </div>
    </a>

    <a href="product.php" class="product col-sm p-3">
        <div class="product-image-small">
        <div class="card-image"><img src="image/react.png"></div>
        <hr style="border: 0.3px solid #d32f2f;width:10%;">
        <div class="title text-uppercase text-center">Nike Airforce 1 Trip</div> 
        </div>
    </a>

   </div>
<hr class="line" style="width:80%">
</div>



<?php
include 'footer.php';
?>