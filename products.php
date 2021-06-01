<?php
session_start();
 ?>
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

.navbar{
font-family: 'Poppins', sans-serif;
  border-radius:0px 0px 20px 20px;
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
  transition: 0.5s;
}

.fa:hover {
  color: black;
  transform: scale(1.17);
}

.text {
  margin-right: 20px;
}
.just {

    padding-top: 30px;
    text-align: center;
    padding-bottom:30px;
}
  #products {
    padding-top: 50px;
    text-align: center;
    padding-bottom:50px;
  }
  h2,h3,h1,p {
    color: white;
    font-family: 'Poppins', sans-serif;
  }
  p {
    font-size: 12px;
  }
  body{
    /*background-image:url(https://media.tenor.com/images/45c9d4c9e8d05cf1ea42e7f094e73627/tenor.gif) ;
    background-size:100%;*/
    background-color: #1a1a1a;
  }
  .scale {
    transition: 0.4s; /* Время эффекта */
   }
   .scale:hover {
    transform: scale(1.10); /* Увеличиваем масштаб */
   }
</style>
<body>
  <style>
  .carousel-item {
    height: 24rem;
    background-color:#1a1a1a;
    color: #fff;
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

.download-button{
  color: white;
}

.footer-text{
  font-size: 1rem;
  color: white;
}
.footer-link{
  color: white;
  opacity: 0.5;
  font-size: 1rem;
}
.footer-link:hover{
  color: white;
  opacity: 1.0;

}
.top3 {
  padding: 50px;
  text-align: center;
  background-color: white;
  color:black;
  border-radius: 20px;
}
.photo {
  border-radius: 15px;
}
.p-2 {
  border-radius: 10px;
margin: 5px;
  text-align: center;
}
.btn-category{
  background-color:#9c1616;
  color:white;
  margin:15px;
border-radius: 13px;
}
.card{
  border-radius: 25px;
}
.d-block{
    border-radius: 25px;
}
.btn-category:hover{

  transform: scale(1.15);
}
</style>
<?php
if($_SESSION['customer'] == ''):
?>
<header>
  <nav class="navbar navbar-expand-md navbar-dark justify-content-between" style="background-color: #9c1616;">
    <a class="navbar-brand" href="index.php"><strong>EDA</strong></a>
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
          <a class="nav-link active" href="products.php">Products</a>
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
            <a class="nav-link" href="signup.php" title="Sign up"><i class="fa fa-user-plus" aria-hidden="true"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php" title="Log in"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<?php else: ?>
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
            <a class="nav-link active" href="index.php">Home</a>
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
              <a class="nav-link" href="profile.php" title="Name">
                <?= $_SESSION['customer']['fname']?>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="vendor/logout.php" title="Exit">
                Exit
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
<?php endif;?>
<section class="Categories">
  <p>

  <button class="btn btn-category" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  <i class="fas fa-bars"></i>  Categories
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    <div class="accordion" id="accordionExample">
      <?php
    include 'categories/config.php';
    include 'categories/functions.php';
include 'categories/category.php';
       ?>
       <div class="wrapper">
         <div class="content">
             <?=$breadcrumbs;?>
           <hr>
         </div>
         <div class="sidebar">
           <ul class="menu">
             <?php echo $categories_menu; ?>
           </ul>
         </div>
       </div>
    </div>
  </div>
</div>

</section>
<section  id="products">
  <div class="row">
  <?php foreach ($products as $product):  ?>
    <a href="?product=<?=$product['product_id']?>">
    <div class="feature-box col-lg-2 scale">
      <img src="<?=$product['image1']?>" class="photo" height="150">
      <h3><?=$product['product_price']?> ₸</h3>
      <p><?=$product['product_name']?></p>
      </a>
    </div>
  <?php endforeach;?>

  </div >
</section>
<section id="products">
<h2>Products <br><br></h2>
<div class="row">
<?php
$mysqli =new mysqli('localhost','root','root','online_market');
$query="set names utf8";
$mysqli->query($query);
$query="SELECT * FROM product";
$results=$mysqli->query($query);
while($row=$results->fetch_assoc()){


echo '<a href="jacket.php">
<div class="feature-box col-lg-2 scale">
  <img src="'.$row["image1"].'" alt="Sneaker" class="photo" height="150">
  <h3>'.$row["product_price"].'₸</h3>
  <p>'.$row["product_name"].'</p>
  </a>
</div>';
}
 ?>
  <!--<a href="jacket.php">
  <div class="feature-box col-lg-2 scale">
    <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/ad21939d-edd3-4bfd-9406-cbfff4368bb9/%D0%BA%D1%80%D0%BE%D1%81%D1%81%D0%BE%D0%B2%D0%BA%D0%B8-air-force-1-07-se-q39X8M.png" alt="Sneaker" class="photo" height="150">
    <h3>28.990₸</h3>
    <p>Nike Air Force 1</p>
    </a>
</div>
<a href="jacket.php">
<div class="feature-box col-lg-2  scale">
<img src="https://cdn.shopify.com/s/files/1/1202/6102/products/nike-sb-duck-t-shirt-black-1_400x464_crop_center.progressive.jpg?v=1609423603" alt="tshirt" class="photo" height="150">
<h3>8.990₸</h3>
</a>
</div>
<a href="jacket.php">
<div class="feature-box col-lg-2  scale">
<img src="https://cdn.shopify.com/s/files/1/1202/6102/products/nike-sb-pocket-overdye-t-shirt-mystic-navy-birch-heather-white-1.jpg?v=1595432244" class="photo" alt="tshirt" height="150">
<h3>5.990₸</h3>
</a>
</div>
<a href="jacket.php">
<div class="feature-box col-lg-2  scale" >
<img src="https://cdn.shopify.com/s/files/1/1202/6102/products/nike-sb-orange-label-crewneck-sweatshirt-dark-smoke-grey-smoke-grey-1.jpg?v=1616516117" class="photo" alt="sweatshirt" height="150">
<h3>10.990₸</h3>
</a>
</div>
<a href="jacket.php">
<div class="feature-box col-lg-2  scale">
<img src="https://cdn.shopify.com/s/files/1/1202/6102/products/nike-sb-corduroy-bomber-jacket-black-black-university-red-black-1.jpg?v=1603280969" class="photo" alt="jacket" height="150">
<h3>25.990₸</h3>
</a>
</div>
<a href="jacket.php">
<div class="feature-box col-lg-2  scale">
<img src="https://cdn.shopify.com/s/files/1/1202/6102/products/nike-sb-heritage86-flatbill-cap-black-black-1.jpg?v=1608723309" alt="cap" class="photo" height="150">
<h3>5.990₸</h3>
</a>
</div>
<a href="jacket.php">
<div class="feature-box col-lg-2  scale">
  <img src="https://cdn.shopify.com/s/files/1/1202/6102/products/nike-sb-essentials-jacket-cargo-khaki-black-1.jpg?v=1608642851" alt="jacket" class="photo" height="150">
  <h3>25.990₸</h3>
  </a>
</div>
<a href="jacket.php">
<div class="feature-box col-lg-2  scale">
<img src="https://cdn.shopify.com/s/files/1/1202/6102/products/nike-sb-bruin-react-shoes-dark-obsidian-white-hyper-jade-1_400x464_crop_center.progressive.jpg?v=1598631028" alt="shoe" class="photo" height="150">
<h3>23.990₸</h3>
</a>
</div>
<a href="jacket.php">
<div class="feature-box col-lg-2  scale">
<img src="https://cdn.shopify.com/s/files/1/1202/6102/products/nike-sb-orange-label-hoodie-dark-smoke-grey-smoke-grey-1.jpg?v=1616601788" class="photo" alt="hoodie" height="150">
<h3>18.990₸</h3>
</a>
</div>
<a href="jacket.php">
<div class="feature-box col-lg-2  scale">
<img src="https://d1bwyguot0k3jj.cloudfront.net/yadt/inventory.ItemColourImage/image_new/original/145846728.jpeg" class="photo" alt="hoodie" height="150">
<h3>10.990₸</h3>
</a>
</div>
<a href="jacket.php">
<div class="feature-box col-lg-2  scale">
<img src="https://cdn.shopify.com/s/files/1/1202/6102/products/nike-sb-blzr-court-shoes-gym-red-white-gym-red-gum-light-brown-2_400x464_crop_center.progressive.jpg?v=1612544873" alt="shoes" height="150" class="photo">
<h3>27.990₸</h3>
<p>Nike SB BLZR Court</p>
</a>
</div>
<a href="jacket.php">
<div class="feature-box col-lg-2  scale">
<img src="https://cdn.shopify.com/s/files/1/1202/6102/products/nike-sb-yd-striped-t-shirt-black-cargo-khaki-1.jpg?v=1608723257" class="photo" alt="tshirt" height="150">
<h3>18.990₸</h3>
<p>
  Nike SB YD Striped T-Shirt
</p>
</a>
</div>
<a href="jacket.php">
<div class="feature-box col-lg-2  scale">
<img src="https://cdn.shopify.com/s/files/1/1202/6102/products/nike-sb-blzr-court-shoes-gym-red-white-gym-red-gum-light-brown-2_400x464_crop_center.progressive.jpg?v=1612544873" alt="shoes" height="150" class="photo">
<h3>27.990₸</h3>
<p>Nike SB BLZR Court</p>
</a>
</div>-->
</div>
</section>

<footer>
      <div class="grid-container" style="height:36xrem;background-image:linear-gradient(#9c1616,#813131)">

  <div class="grid-item item1">
      <p class="footer-text">For Client</p>
      <div class="container">
        <a href="#" class="footer-link">Order</a><br>
        <a href="#" class="footer-link">Shipping</a><br>
        <a href="payment_methods.php" class="footer-link">Payment Method</a>
      </div>
    </div>

  <div class="grid-item item2">
    <p>Download App</p>
    <div class="container">
    <button type="button" name="button" class="btn btn-lg download-button"><i class="fab fa-google-play"></i><p style="padding:10px 10px">Google Play</p></button><br>
    <button type="button" name="button" class="btn btn-lg download-button"><i class="fab fa-apple"></i><p style="padding:10px 10px">App Store</p></button>
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
      <a href="https://www.facebook.com" class="footer-link">Facebook</a><br>
      <a href="https://www.instagram.com" class="footer-link">Instagram</a><br>
      <a href="https://www.whatsapp.com" class="footer-link">Whatsapp</a>
    </div>
  </div>
  <div class="grid-item item5"><i class="fab fa-cc-visa" style="padding:100px 5px 0 0"></i><i class="fab fa-cc-mastercard" style="padding:100px 0 0 5px"></i></div>
      </div>

    </footer>


</body>
<script src="javascript/jquery-1.9.0.min.js"></script>
<script src="javascript/jquery.accordion.js"></script>
<script src="javascript/jquery.cookie.js"></script>
<script>
  $(document).ready(function(){
    $(".menu").dcAccordion();
  });
</script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
