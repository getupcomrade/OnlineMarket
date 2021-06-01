<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Online Market</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/c98d165499.js" crossorigin="anonymous"></script>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<style media="screen">
  #products {
    padding-top: 50px;
    text-align: center;
    padding-bottom: 50px;
  }

  h3{font-family: 'Poppins', sans-serif;
    color: black;
  }
  h1,
  p {font-family: 'Poppins', sans-serif;
    color: white;
  }

  p {
    font-size: 12px;
  }

  body {
    /*background-image:url(https://media.tenor.com/images/45c9d4c9e8d05cf1ea42e7f094e73627/tenor.gif) ;
    background-size:100%;*/
    font-family: 'Poppins', sans-serif;
    background-color: #1a1a1a;
  }

  .body-container{
    padding:10rem;
  }
  .scale {
    transition: 0.4s;
    /* Время эффекта */
  }

  .scale:hover {
    transform: scale(1.15);
    /* Увеличиваем масштаб */
  }

  .carousel-item {
    height: 24rem;
    background-color: #1a1a1a;
    color: #fff;
  }

  .line{
    background-color:white;
  }
  .grid-container {
    display: grid;
    grid-gap: 1rem;
    padding: 1rem;
  }

  .grid-item {
    color: rgba(255, 255, 255, 0.9);
    text-align: center;
    padding: 20px;
    font-size: 30px;
  }
.row {
  margin-top: 6rem;
}
  .item1 {
    grid-column: 1 / span 2;
    grid-row: 1;
  }

  .item2 {
    grid-column: 3;
    grid-row: 1 / span 2;
  }

  .item5 {
    grid-column: 1 / span 3;
    grid-row: 3;
  }

  .download-button {
    color: white;
  }

  .footer-text {
    font-size: 1rem;
    color: white;
  }

  .footer-link {
    color: white;
    opacity: 0.5;
    font-size: 1rem;
  }

  .footer-link:hover {
    color: white;
    opacity: 1.0;
  }
  .GPUheader-pos{
    color:#1a1a1a;
    position: relative;
    left:25rem; bottom:3rem;
  }
  .price-pos1{
    color:#1a1a1a;
    position: relative;
    left:34rem; top:1rem;
  }
  .price-pos2{
    color:#1a1a1a;
    position: relative;
    left:27rem; bottom:6rem;
  }

  .addToCar-btn1{
    position: relative;
    left:45rem; bottom:10rem;
  }
  .addToCar-btn2{
    position: relative;
    left:27rem; bottom:10rem;
.buybutton {
  margin-left: 40rem;
}
  }
  .addToCar-num{
    color:#1a1a1a;
    position: relative;
    left:38rem; bottom:10rem;
  }
  .addToCar-buy{
    color:#fff;
    background-color:#9c1616;
    position: relative;
    left:36.5rem;
  }
  .text {
    margin-right: 200px;
  }

  .nav-text {
    padding-left: 30px;
  }

  .navbar-brand {
    font-size: 2rem;
    padding-left: 20px;

  }

  .nav-item {
    text-align: center;
    padding: 3px;
    font-size: 20px;
  }

  .form-control {
    margin-left: 20px;
  }

  .fa {
    color: Black;
    font-size: 25px;
    text-align: center;
    padding-right: 10px;
  }

  .fa:hover {
    color: black;
    box-shadow: 0 5px 15px black;
  }

  .text {
    margin-right: 20px;
  }
  .body-container{
    border-radius: 25px;
  }
</style>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark justify-content-between" style="background-color: #9c1616;">
      <a class="navbar-brand" href="index.php">EDA</a>
      <div>
        <form class="form-inline justify-content-center" style="text-align: center;">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" style="width: 300px; height:25px;">
          <button class="btn btn-inline my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true" title="Search"></i></button>
        </form>

        <ul class="navbar-nav ml-auto text">
          <li class="nav-text">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-text">
            <a class="nav-link" href="products.php">Products</a>
          </li>
          <li class="nav-text">
            <a class="nav-link" href="Contacts.php">Contacts</a>
          </li>
        </ul>

      </div>

      <div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto ">
            <li class="nav-item">
              <a class="nav-link" href="" title="Shopping cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signup.php" title="Sign in"><i class="fa fa-user-plus" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php" title="Log in"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  </header>

  <section>
    <div class="container body-container" style="background-color:#fff">
    <h1 class="GPUheader-pos">Nike SB Pocket Hoodie</h1>
    <h2 class="price-pos1">24 990 ₸</h2>
    <img src="https://cdn.shopify.com/s/files/1/1202/6102/products/nike-sb-orange-label-hoodie-dark-smoke-grey-smoke-grey-1.jpg?v=1616601788" alt="hoodie" style="height:25rem;">
    <p style="color:#1a1a1a ;font-size:1rem">Lorem Ipsum is simply dummy text.</p>

    <button class="btn addToCar-btn1 btn-light" type="button" name="button1">+</button>
    <button class="btn addToCar-btn2 btn-light" type="button" name="button2">-</button>
    <h3 class="addToCar-num"> 0 </h3>
    <h3 class="price-pos2"> Total Price: 0 ₸</h3>
    <button class="btn addToCar-buy btn-lg buybutton" type="button" name="button">Buy</button>
    <button class="btn addToCar-buy btn-lg" type="button" name="button">Add to cart</button>
    <h3 class="row">You can also look at: <br><br></h3>
    <div class="row">
      <a href="jacket.php">
      <div class="feature-box col-lg-3 scale">
        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/ad21939d-edd3-4bfd-9406-cbfff4368bb9/%D0%BA%D1%80%D0%BE%D1%81%D1%81%D0%BE%D0%B2%D0%BA%D0%B8-air-force-1-07-se-q39X8M.png" alt="Sneaker" class="photo" height="150">
        <h3>28.990₸</h3>
        <p>Nike Air Force 1</p>
        </a>
    </div>
    <a href="jacket.php">
    <div class="feature-box col-lg-3  scale">
    <img src="https://cdn.shopify.com/s/files/1/1202/6102/products/nike-sb-duck-t-shirt-black-1_400x464_crop_center.progressive.jpg?v=1609423603" alt="tshirt" class="photo" height="150">
    <h3>8.990₸</h3>
    </a>
    </div>
    <a href="jacket.php">
    <div class="feature-box col-lg-3  scale">
    <img src="https://cdn.shopify.com/s/files/1/1202/6102/products/nike-sb-pocket-overdye-t-shirt-mystic-navy-birch-heather-white-1.jpg?v=1595432244" class="photo" alt="tshirt" height="150">
    <h3>5.990₸</h3>
    </a>
    </div>
    <a href="jacket.php">
    <div class="feature-box col-lg-3  scale" >
    <img src="https://cdn.shopify.com/s/files/1/1202/6102/products/nike-sb-orange-label-crewneck-sweatshirt-dark-smoke-grey-smoke-grey-1.jpg?v=1616516117" class="photo" alt="sweatshirt" height="150">
    <h3>10.990₸</h3>
    </a>
    </div>

    </div>
    </div>
  </section>

  <section id="products">

  </section>

  <footer>
    <div class="grid-container" style="height:35rem;background-image:linear-gradient(#9c1616,#813131)">

      <div class="grid-item item1">
        <p class="footer-text">For Client</p>
        <div class="container">
          <a href="#" class="footer-link">Order</a><br>
          <a href="#" class="footer-link">Shipping</a><br>
          <a href="#" class="footer-link">Payment Method</a>
        </div>
      </div>

      <div class="grid-item item2">
        <h4>Downloade App</h4>
        <div class="container">
          <button type="button" name="button" class="btn btn-lg download-button"><i class="fab fa-google-play"></i>
            <p style="padding:10px 10px">Google Play</p>
          </button><br>
          <button type="button" name="button" class="btn btn-lg download-button"><i class="fab fa-apple"></i>
            <p style="padding:10px 10px">App Store</p>
          </button>
        </div>
      </div>

      <div class="grid-item item3">
        <p class="footer-text">Company</p>
        <div class="container">
          <a href="#" class="footer-link">About us</a><br>
          <a href="#" class="footer-link">News</a><br>
          <a href="#" class="footer-link">Manager</a>
        </div>
      </div>
      <div class="grid-item item4">
        <p class="footer-text">Our social net</p>
        <div class="container">
          <a href="#" class="footer-link">Facebook</a><br>
          <a href="#" class="footer-link">Instagram</a><br>
          <a href="#" class="footer-link">Whatsapp</a>
        </div>
      </div>
      <div class="grid-item item5"><i class="fab fa-cc-visa" style="padding:100px 5px 0 0"></i><i class="fab fa-cc-mastercard" style="padding:100px 0 0 5px"></i></div>
    </div>

  </footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="index.js" charset="utf-8"></script>
</body>

</html>
