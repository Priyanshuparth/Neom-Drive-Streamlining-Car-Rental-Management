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

$i=$_POST["pwd"];
// fetching db and performing query 

$con = mysqli_connect("localhost","root","");
if (!$con)
{
��die('Could not connect: ' . mysqli_connect_error());
}
mysqli_select_db($con,"car-rental");

mysqli_query($con, "DELETE FROM cars where car_id='$i'") or die(mysqli_connect_error());
mysqli_query($con, "DELETE FROM payment where pid='$i'") or die(mysqli_connect_error());
$result =mysqli_query($con,"SELECT * from cars,payment,center where cars.pid=payment.pid and payment.center_id=center.center_id order by cars.car_id");

?> 

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