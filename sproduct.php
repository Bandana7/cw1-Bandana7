<!DOCTYPE html>
<html>
<head>
  <title>Cosplay Workshop</title>
  <link rel="stylesheet" type="text/css" href="style.css">
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
 
</head>
<body>
  <section id="header">
    <a href="#"><img src="images/logo.png" height="75px" width="75px" alt="logo" class="logo"></a>
    <h5></h5>
    <a href="#"><img src="images/nam.png" height="75px" width="250px" alt="logo" class="name"></a>
    <div>
      <ul id="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a class="active" href="shop.php">Shop</a></li>
        <li><a href="about.php">About</a></li>
      
      </ul>
    </div>
  </section>

  <section id="prodetails" class="section-p1">
    <div class="single-pro-image">
        <img src="images/chamber.png" width="100%" id="MainImg" alt="">
        
        <div class="small-img-group">
            <div class="small-img-col">
                <img src="images/chamber.png" width="100%" class="small-img"  alt="">
            </div>

            <div class="small-img-col">
                <img src="images/loid.png" width="100%" class="small-img"  alt="">
            </div>

            <div class="small-img-col">
                <img src="images/lols.png" width="100%" class="small-img"  alt="">
            </div>

            <div class="small-img-col">
                <img src="images/maid.png" width="100%" class="small-img"  alt="">
            </div>
        </div>
    </div>
    <div class="single-pro-details">
        <h6>Home /Cosplay Set</h6>
        <h4> Anya Cosplay Set</h4>
        <h2>Rs6000 </h2>
        <select>
            <option>Select Size</option>
            <option>XL</option>
            <option>XXL</option>
            <option>Small</option>
            <option>Large</option>
        </select>
        <input type="number" value="1">
        <button class="normal">Add to cart</button>
        <h4>Product Detail</h4>
        <span>A very unique product never launched before is now available in different sizes.</span>
    </div>
  </section>

  <section id="product1" class="section-p1">
    <h2> Featured Products</h2>
    <p>Special Occassion Set Featured</p>
    <div class="pro-container">
      <div class="pro">
        <img src="images/toga.jpg" alt="">
        <div class="des">
          <span>ani-fit</span>
          <h5>Toga Cosplay Set</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>Rs5000</h4>
        </div>
        <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
      </div>

      <div class="pro">
        <img src="images/victorizue.jpg" alt="">
        <div class="des">
          <span>ani-fit</span>
          <h5>Victorique Cosplay Set</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>Rs6000</h4>
        </div>
        <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
      </div>

      <div class="pro">
        <img src="images/yor.png" alt="">
        <div class="des">
          <span>ani-fit</span>
          <h5>Yor Cosplay Set</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>Rs7000</h4>
        </div>
        <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
      </div>
      

      <div class="pro">
        <img src="images/seraph.jpg" alt="">
        <div class="des">
          <span>ani-fit</span>
          <h5>Seraph Cosplay Set</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>Rs3000</h4>
        </div>
        <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
      </div>
    </div>
  </section>

  <footer class="section-p1">
    <div class="col">
      <h4> Contact</h4>
      <p><strong>Phone: </strong>+9770000000000 </p>
      <p><strong>Address: </strong> Thamel, Kathmandu</p>
      <p><strong>Hours: </strong>10:00-18:00, Sun-Fri</p>
      
      <div class="follow">
        <h4>Follow Us</h4>
        <div class="icon">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-instagram"></i>
        </div>

      </div>
    </div>
    
    <div class="col">
      <h4> About</h4>
      <a href="#">About Us</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Contact Us</a>
      <a href="#">Delivery Information </a>
    </div>

    <div class="col">
      <h4> My Account</h4>
      <a href="#">Sign In</a>
      <a href="#">View Cart</a>
      <a href="#">Wish List</a>
      <a href="#">Track My Order </a>
      <a href="#">Help</a>
    </div>

    <div class="col install">
      <h4>Install App</h4>
      <p>From App Store or Google Play</p>
      
      <div class="row">
        <img src="images/appstore.png" width="45%" height="35%" alt="">
        <img src="images/google.png" width="45%" height="35%" alt="">
      </div>
      <p>Secured Payment Gateways</p>
      <img src="images/pay.png" width="45%" height="35%" alt="">
    </div>

    <div class="copyright">
      <p>&copy; 2023 My Website. All rights reserved.</p>
    </div>
    
  </footer>
<script>
    var MainImg = document.getElementById("MainImg");
    var smallimg = document.getElementsByClassName("small-img");

    smallimg[0].onclick = function(){
        MainImg.src = smallimg[0].src;
    }
    smallimg[1].onclick = function(){
        MainImg.src = smallimg[1].src;
    }
    smallimg[2].onclick = function(){
        MainImg.src = smallimg[2].src;
    }
    smallimg[3].onclick = function(){
        MainImg.src = smallimg[3].src;
    }
</script>
</body>
</html>