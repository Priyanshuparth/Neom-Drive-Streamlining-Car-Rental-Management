<?php
session_start();
?>
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
    <script>
        function loads(){
        if(window.confirm("Proceed with payment??")==false)
        {
            window.location.href=("carlisting.php");
        }
    }
        
    </script>
</head>
<body onload="loads()">
    <table style="table: border 5%;">
    <?php
    $n=$_POST["email"];
    $p=$_POST["pwd"];
//   fetch details from db using session variables
    $con = mysqli_connect("localhost","root","");
    if (!$con)
    {
    ��die('Could not connect: ' . mysqli_connect_error());
    }
    mysqli_select_db($con,"car-rental");
    $result =mysqli_query($con,"SELECT name,email,address,age from customer where email='$n' and password='$p' ");
    $row = mysqli_fetch_array($result);
    $total =$_SESSION["pay"]+$_SESSION["gst"];
    

    ?>
    </table>

    <div class="container">
    <div style="margin: 150px; border: solid black; width: 580px; height:auto; margin-left:auto; margin-right:auto;">
     <h2 style="text-align:center"> Details of Car Booking</h2>
     <!-- tabular display  -->
    <table class="table table-striped">
        <tr>
            <th>Name of Customer: </th>
            <td><?php echo $row['name']?></td>
        </tr>
        <tr>
            <th>Age:</th>
            <td><?php echo $row['age']?></td></td>
        </tr>
        <tr>
            <th>Email Address:</th>
            <td><?php echo $row['email']?></td></td>
        </tr>
        <tr>
            <th>Address of Customer:</th>
            <td><?php echo $row['address']?></td></td>
        </tr>
        <tr>
            <th>Model of Car:</th>
            <td><?php echo $_SESSION["model"]?></td>
        </tr>
        <tr>
            <th>Type of Car:</th>
            <td><?php echo $_SESSION["type"]?></td>
        </tr>
        <tr>
            <th>Capacity of Car:</th>
            <td><?php echo $_SESSION["cap"]?></td>
        </tr>
        <tr>
            <th>City of service:</th>
            <td><?php echo $_SESSION["city"]?></td>
        </tr>
        <tr>
            <th>Location of hub:</th>
            <td><?php echo $_SESSION["loc"]?></td>
        </tr>
        <tr>
            <th>Down Payment:</th>
            <td><?php echo $_SESSION["pay"]?></td>
        </tr>
        <tr>
            <th>GST applicable:</th>
            <td><?php echo $_SESSION["gst"]?></td>
        </tr>
        <tr>
            <th>Total Amount Paid:</th>
            <td><?php echo $total?></td>
        </tr>

        
    </table>
    <p style="text-align:center">
 <a  href="index.php">Go back to home page</a>
 </p>
</div>
</div>
</body>
</html>