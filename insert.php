<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
    <link rel="stylesheet" href="./css/style.css">
    
</head>
<body>
<?php
// inserting new carlistings in db 
$v1=$_POST["a1"];
$v2=$_POST["a2"];
$v3=$_POST["a3"];
$v4=$_POST["a4"];
$v5=$_POST["a5"];
$v6=$_POST["a6"];


$con = mysqli_connect("localhost","root","");
if (!$con)
{
��die('Could not connect: ' . mysqli_connect_error());
}
mysqli_select_db($con,"car-rental");
$result1 = mysqli_query($con,"SELECT count(car_id) FROM cars");
$c = mysqli_fetch_array($result1);
$cus= $c[0]+1;


$res=mysqli_query($con,"SELECT city,location from center where center_id='$v6'");
$d = mysqli_fetch_array($res);
$v7=$d['city'];
$v8=$d['location'];

mysqli_query($con,"INSERT into cars values('$cus','$v1','$v2','$v3','$cus')")or die(mysqli_connect_error());
mysqli_query($con,"INSERT into payment values('$cus','$v4','$v5','$v6')")or die(mysqli_connect_error());


$result =mysqli_query($con,"SELECT * from cars,payment,center where cars.pid=payment.pid and payment.center_id=center.center_id order by cars.car_id" );


 ?> 
 <!-- header starts  -->

<header class="header">
        <section class="flex">
    <a href="about.html" class="logo"><img src="./image/NeomDrive.png" class="img-circle" alt="No image found" height="70px"  ></a>
    <div class="page-header">
        <nav class="nav-bar">
            <a href="index.php">Home</a>
            <a href="about.html">About</a>
            <a href="carlisting.php">Car Listing</a>
            <a href="faqs.html">FAQs</a>
            
        </nav>
    </div>
     </section>

    </header>


    <div class="container">
    <div style="margin: 50px; border: solid black; width: 580px; height:auto; margin-left:auto; margin-right:auto;">
     <h4 style="text-align:center">CAR DETAILS(NEW STATE)</h4>
    <table class="table table-striped">
        <!-- <caption>Car Details</caption> -->
        <tr>
            <th>CAR ID</th>
            <th>CAR MODEL</th>
            <th>CAR TYPE</th>
            <th>PRICE</th>
            <th>PAYMENT ID</th>
            <th>CENTER ID</th>
           
        </tr>
        <?php
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['car_id']."</td>";
            echo "<td>".$row['car_model']."</td>";
            echo "<td>".$row['car_type']."</td>";
            echo "<td>".$row['payment']."</td>";
            echo "<td>".$row['pid']."</td>";
            echo "<td>".$row['center_id']."</td>";
            echo "</tr>";

        }
        ?>
        
    </table>
    </div>
    </div>
    <p style="text-align:center">
 <a  href="admin.php">Go back Vendor Page</a>
 </p>
</body>
</html>