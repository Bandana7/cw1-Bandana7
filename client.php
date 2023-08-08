<?php
session_start();
if (isset($_SESSION["users"])) {
   header("Location: client.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Cosplay Workshop</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  //Fontawesome icon
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
        <li><a class="active" href="client.php">Shop</a></li>
        <li><a href="logout.php">Logout</a></li> 
      </ul>
    </div>
  </section>
//feature box created
  <section id="features" class="section-p1">
    <div class="f-box">
      <img src="images/delivery.jpg" height="100px" width="100px">
      <h6>24/7 Delivery</h6>
    </div>

    <div class="f-box">
      <img src="images/cou.png" height="100px" width="500px">
      <h6> Discount Coupons</h6>
    </div>

    <div class="f-box">
      <img src="images/online.png" height="100px" width="100px">
      <h6>Online Order</h6>
    </div>

    <div class="f-box">
      <img src="images/tutorials.jpg" height="100px" width="100px">
      <h6>Tutorials</h6>
    </div>

    <div class="f-box">
      <img src="images/custom.png" height="100px" width="100px">
      <h6>Self-Customize</h6>
    </div>
  </section>

  <section id="product1" class="section-p1">
    <h2> Featured Products</h2>
    <p>Special Occassion Set</p>
    <div class="pro-container">
      <div class="pro">
        <img src="images/chamber.png" alt="">
        <div class="des">
          <span>ani-fit</span>
          <h5>Chamber Cosplay Set</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>Rs8000</h4>
        </div>
        <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
      </div>

      <div class="pro">
        <img src="images/loid.png" alt="">
        <div class="des">
          <span>ani-fit</span>
          <h5>Loid Cosplay Set</h5>
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
        <img src="images/maid.png" alt="">
        <div class="des">
          <span>ani-fit</span>
          <h5>Maid Cosplay Set</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>Rs3700</h4>
        </div>
        <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
      </div>
      

      <div class="pro">
        <img src="images/lolita.png" alt="">
        <div class="des">
          <span>ani-fit</span>
          <h5>Lolita Cosplay Set</h5>
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
        <img src="images/kimono.png" alt="">
        <div class="des">
          <span>ani-fit</span>
          <h5> Kimono Cosplay Set</h5>
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

      <div class="pro">
        <img src="images/jinx.jpg" alt="">
        <div class="des">
          <span>ani-fit</span>
          <h5>Jinx Cosplay Set</h5>
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
        <img src="images/nezuko.jpg" alt="">
        <div class="des">
          <span>ani-fit</span>
          <h5>Nezuko Cosplay Set</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>Rs12000</h4>
        </div>
        <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
      </div>

      <div class="pro">
        <img src="images/naruto.png" alt="">
        <div class="des">
          <span>ani-fit</span>
          <h5>Naruto Cosplay Set</h5>
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
    </div>
  </section>


  <section id="product1" class="section-p1">
    <h2> New Arrivals </h2>
    <p>Special Occassion Set</p>
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

      <div class="pro">
        <img src="images/ml.jpg" alt="">
        <div class="des">
          <span>ani-fit</span>
          <h5> Mobile Legend Cosplay Set</h5>
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

      <div class="pro">
        <img src="images/lols.png" alt="">
        <div class="des">
          <span>ani-fit</span>
          <h5>Lolita White Cosplay Set</h5>
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
        <img src="images/presu1.png" alt="">
        <div class="des">
          <span>ani-fit</span>
          <h5>Mobile Legend Cosplay Set</h5>
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

      <div class="pro">
        <img src="images/anya.jpg" alt="">
        <div class="des">
          <span>ani-fit</span>
          <h5>Anya Cosplay Set</h5>
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
<script src="script.js"></script>
</body>
</html>
