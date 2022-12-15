<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarListing</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
   <script src="js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
  
<?php
  // php function to set prices of car 
   $con = mysqli_connect("localhost","root","");
   if (!$con)
   {
   ��die('Could not connect: ' . mysqli_connect_error());
   }
   mysqli_select_db($con,"car-rental");
   $result =mysqli_query($con,"SELECT payment from payment ");
   $result1 =mysqli_query($con,"SELECT count(payment) from payment ");
   $n = mysqli_fetch_array($result1);
   $num=$n[0];

    
  $arr="";
  
while($row = mysqli_fetch_array($result) )
{
	$arr=$arr.$row['payment']." ";
}

mysqli_close($con);

$words=explode(" ",$arr);

?>

<!-- header starts  -->
  <header class="header">
    <section class="flex">
  <a href="about.html" class="logo"><img src="./image/NeomDrive.png" class="img-circle" alt="No image found" height="70px"  ></a>
  <div class="page-header">
    <nav class="nav-bar">
        <a href="index.php">Home</a>
        <a href="">    </a>
        <a href="about.html">About</a>
        <a href="">    </a>
        <a href="carlisting.php">Car Listing</a>
        <a href="">    </a>
        <a href="faqs.html">FAQs</a>
       
    </nav>
  </div>
  <form class="navbar-form navbar-right">
      
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="register1.php"><span class="glyphicon glyphicon-user"></span> User SignUp</a></li>
        <li><a href="adminlogin.php"><span class="glyphicon glyphicon-log-in"></span> Vendor Login</a></li>
      </ul>
    
  </form>
  
  
    </section>
  
  </header>




<div class="cs2">






<!-- Car section starts-->

<section class="section featured-car" id="featured-car">
  <div class="container">

    <div class="title-wrapper">
      <h2 style="color: aliceblue;"class="h2 section-title">Featured cars</h2>

      <a href="#" class="featured-car-link">
        <span>View more</span>

        <ion-icon name="arrow-forward-outline"></ion-icon>
      </a>
    </div>

    <ul class="featured-car-list">
      <form action="register.php" method="post">

      <li>
        <div class="featured-car-card">

          <figure class="card-banner">
            <img src="./assets/images/car-1.jpg" alt="Toyota RAV4 2021" loading="lazy" width="440" height="300"
              class="w-100">
          </figure>

          <div class="card-content">

            <div class="card-title-wrapper">
              <h3 class="h3 card-title">
                <a href="#">Toyota RAV4</a>
              </h3>

              <data class="year" value="2021">2021</data>
            </div>
            <ul class="card-list">

              <li class="card-list-item">
                <ion-icon name="people-outline"></ion-icon>

                <span class="card-item-text">4 People</span>
              </li>

              <li class="card-list-item">
                <ion-icon name="flash-outline"></ion-icon>

                <span class="card-item-text">Hybrid</span>
              </li>

              <li class="card-list-item">
                <ion-icon name="speedometer-outline"></ion-icon>

                <span class="card-item-text">6.1km / 1-litre</span>
              </li>

              <li class="card-list-item">
                <ion-icon name="hardware-chip-outline"></ion-icon>

                <span class="card-item-text">Automatic</span>
              </li>

            </ul>

            <div class="card-price-wrapper">

              <p class="card-price">
                <strong>Rs.<?php echo $words[0]?></strong> / month
              </p>

              

              <button type="submit"  value="1" name="bt1" class="btn">Rent now</button>

            </div>

          </div>

        </div>
      </li>
    </form>
    <form action="register.php" method="post">
      <li>
        <div class="featured-car-card">

          <figure class="card-banner">
            <img src="./assets/images/car-2.jpg" alt="BMW 3 Series 2019" loading="lazy" width="440" height="300"
              class="w-100">
          </figure>

          <div class="card-content">

            <div class="card-title-wrapper">
              <h3 class="h3 card-title">
                <a href="#">BMW 3 Series</a>
              </h3>

              <data class="year" value="2019">2019</data>
            </div>

            <ul class="card-list">

              <li class="card-list-item">
                <ion-icon name="people-outline"></ion-icon>

                <span class="card-item-text">4 People</span>
              </li>

              <li class="card-list-item">
                <ion-icon name="flash-outline"></ion-icon>

                <span class="card-item-text">Gasoline</span>
              </li>

              <li class="card-list-item">
                <ion-icon name="speedometer-outline"></ion-icon>

                <span class="card-item-text">8.2km / 1-litre</span>
              </li>

              <li class="card-list-item">
                <ion-icon name="hardware-chip-outline"></ion-icon>

                <span class="card-item-text">Automatic</span>
              </li>

            </ul>

            <div class="card-price-wrapper">

              <p class="card-price">
                <strong>Rs.<?php echo $words[1]?></strong> / month
              </p>

           

              <button type="submit"  value="2" name="bt1" class="btn">Rent now</button>

            </div>

          </div>

        </div>
      </li>
    </form>
    <form action="register.php" method="post">
      <li>
        <div class="featured-car-card">

          <figure class="card-banner">
            <img src="./assets/images/car-3.jpg" alt="Volkswagen T-Cross 2020" loading="lazy" width="440" height="300"
              class="w-100">
          </figure>

          <div class="card-content">

            <div class="card-title-wrapper">
              <h3 class="h3 card-title">
                <a href="#">Volkswagen T-Cross</a>
              </h3>

              <data class="year" value="2020">2020</data>
            </div>

            <ul class="card-list">

              <li class="card-list-item">
                <ion-icon name="people-outline"></ion-icon>

                <span class="card-item-text">4 People</span>
              </li>

              <li class="card-list-item">
                <ion-icon name="flash-outline"></ion-icon>

                <span class="card-item-text">Gasoline</span>
              </li>

              <li class="card-list-item">
                <ion-icon name="speedometer-outline"></ion-icon>

                <span class="card-item-text">5.3km / 1-litre</span>
              </li>

              <li class="card-list-item">
                <ion-icon name="hardware-chip-outline"></ion-icon>

                <span class="card-item-text">Automatic</span>
              </li>

            </ul>

            <div class="card-price-wrapper">

              <p class="card-price">
                <strong>Rs.<?php echo $words[2]?></strong> / month
              </p>

             

              <button type="submit"  value="3" name="bt1"  class="btn">Rent now</button>

            </div>

          </div>

        </div>
      </li>
    </form>
    <form action="register.php" method="post">
      <li>
        <div class="featured-car-card">

          <figure class="card-banner">
            <img src="./assets/images/car-4.jpg" alt="Cadillac Escalade 2020" loading="lazy" width="440" height="300"
              class="w-100">
          </figure>

          <div class="card-content">

            <div class="card-title-wrapper">
              <h3 class="h3 card-title">
                <a href="#">Cadillac Escalade</a>
              </h3>

              <data class="year" value="2020">2020</data>
            </div>

            <ul class="card-list">

              <li class="card-list-item">
                <ion-icon name="people-outline"></ion-icon>

                <span class="card-item-text">4 People</span>
              </li>

              <li class="card-list-item">
                <ion-icon name="flash-outline"></ion-icon>

                <span class="card-item-text">Gasoline</span>
              </li>

              <li class="card-list-item">
                <ion-icon name="speedometer-outline"></ion-icon>

                <span class="card-item-text">7.7km / 1-litre</span>
              </li>

              <li class="card-list-item">
                <ion-icon name="hardware-chip-outline"></ion-icon>

                <span class="card-item-text">Automatic</span>
              </li>

            </ul>

            <div class="card-price-wrapper">

              <p class="card-price">
                <strong>Rs.<?php echo $words[3]?></strong> / month
              </p>

              

              <button type="submit"  value="4" name="bt1" class="btn">Rent now</button>

            </div>

          </div>

        </div>
      </li>
    </form>
    <form action="register.php" method="post">
      <li>
        <div class="featured-car-card">

          <figure class="card-banner">
            <img src="./assets/images/car-5.jpg" alt="BMW 4 Series GTI 2021" loading="lazy" width="440" height="300"
              class="w-100">
          </figure>

          <div class="card-content">

            <div class="card-title-wrapper">
              <h3 class="h3 card-title">
                <a href="#">BMW 4 Series GTI</a>
              </h3>

              <data class="year" value="2021">2021</data>
            </div>

            <ul class="card-list">

              <li class="card-list-item">
                <ion-icon name="people-outline"></ion-icon>

                <span class="card-item-text">4 People</span>
              </li>

              <li class="card-list-item">
                <ion-icon name="flash-outline"></ion-icon>

                <span class="card-item-text">Gasoline</span>
              </li>

              <li class="card-list-item">
                <ion-icon name="speedometer-outline"></ion-icon>

                <span class="card-item-text">7.6km / 1-litre</span>
              </li>

              <li class="card-list-item">
                <ion-icon name="hardware-chip-outline"></ion-icon>

                <span class="card-item-text">Automatic</span>
              </li>

            </ul>

            <div class="card-price-wrapper">

              <p class="card-price">
                <strong>Rs.<?php echo $words[4]?></strong> / month
              </p>

             
              <button type="submit"  value="5" name="bt1" class="btn">Rent now</button>

            </div>

          </div>

        </div>
      </li>
    </form>
    <form action="register.php" method="post">
      <li>
        <div class="featured-car-card">

          <figure class="card-banner">
            <img src="./assets/images/car-6.jpg" alt="BMW 4 Series 2019" loading="lazy" width="440" height="300"
              class="w-100">
          </figure>

          <div class="card-content">

            <div class="card-title-wrapper">
              <h3 class="h3 card-title">
                <a href="#">BMW 4 Series</a>
              </h3>

              <data class="year" value="2019">2019</data>
            </div>

            <ul class="card-list">

              <li class="card-list-item">
                <ion-icon name="people-outline"></ion-icon>

                <span class="card-item-text">4 People</span>
              </li>

              <li class="card-list-item">
                <ion-icon name="flash-outline"></ion-icon>

                <span class="card-item-text">Gasoline</span>
              </li>

              <li class="card-list-item">
                <ion-icon name="speedometer-outline"></ion-icon>

                <span class="card-item-text">7.2km / 1-litre</span>
              </li>

              <li class="card-list-item">
                <ion-icon name="hardware-chip-outline"></ion-icon>

                <span class="card-item-text">Automatic</span>
              </li>

            </ul>

            <div class="card-price-wrapper">

              <p class="card-price">
                <strong>Rs.<?php echo $words[5]?></strong> / month
              </p>

             

              <button type="submit"  value="6" name="bt1" class="btn">Rent now</button>

            </div>

          </div>

        </div>
      </li>
    </form>
    </ul>
   
  </div>
</section>
      
      

<!-- Car section ends -->






<!-- Footer starts -->

<footer class="footer">
    <div class="container">

        <div class="footer-top">

            <div class="footer-brand">
                <h2>Neom Drive</h2>

                <p class="footer-text">
                    Search for cheap rental cars in India. With a diverse fleet of 19,000 vehicles, Waydex offers its
                    consumers an
                    attractive and fun selection.
                </p>
            </div>

            <ul class="footer-list">

                <li>
                    <p class="footer-list-title">Company</p>
                </li>

                <li>
                    <a href="#" class="footer-link">About us</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Pricing plans</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Our blog</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Contacts</a>
                </li>

            </ul>

            <ul class="footer-list">

                <li>
                    <p class="footer-list-title">Support</p>
                </li>

                <li>
                    <a href="#" class="footer-link">Help center</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Ask a question</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Privacy policy</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Terms & conditions</a>
                </li>

            </ul>

            <ul class="footer-list">

                <li>
                    <p class="footer-list-title">Neighborhoods in India</p>
                </li>

                <li>
                    <a href="#" class="footer-link">Delhi</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Mumbai</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Bangalore</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Hyderabad</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Ahmedabad</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Chennai</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Kolkata</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Pune</a>
                </li>

            </ul>

        </div>

        <div class="footer-bottom">

            <ul class="social-list">

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                </li>


                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="mail-outline"></ion-icon>
                    </a>
                </li>

            </ul>

            <p class="copyright">
                &copy; 2022 <a href="#">Neom Drive</a>. All Rights Reserved
            </p>

        </div>

    </div>
</footer>
<!-- Footer ends -->

<div class="loader">
   <img src="images/loader.gif" alt="">
</div>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="./js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor:true,
            spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
   },
   breakpoints: {
      550: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>

<!-- ionicon link -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</div>

</body>

</html>