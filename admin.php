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
    <?php 
    // php function for if check
function myphp(){
   $con = mysqli_connect("localhost","root","");
   if (!$con)
   {
   ��die('Could not connect: ' . mysqli_connect_error());
   }
   mysqli_select_db($con,"car-rental");
   $result1 = mysqli_query($con,"SELECT pid from payment ");
  $arr="";
while($row = mysqli_fetch_array($result1))
{
  $arr=$arr.$row['pid']." ";
}
return $arr;
mysqli_close($con);
}

?>   
<script typr="text/javascript">
    // javascript function to implement Ids check
        function chkPasswords() { 

  var sec = document.getElementById("vals");
  var i="<?php echo myphp()?>"
  var j=i.split(" ");
  var s=0;
  for(var k=0;k<((j.length)-1);k++)
  {
    if(j[k]==sec.value)
    {
      s=1;
    }
    
  }
  if(s==0){
    alert("Please Enter Correct Id");
  

  
  return false;
  }
  return true;
 

}

</script>

</head>
<body>
<?php
  $con = mysqli_connect("localhost","root","");
    if (!$con)
    {
    ��die('Could not connect: ' . mysqli_connect_error());
    }
    mysqli_select_db($con,"car-rental");
    $result =mysqli_query($con,"SELECT * from cars,payment,center where cars.pid=payment.pid and payment.center_id=center.center_id order by cars.car_id" );
    
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
     <h4 style="text-align:center">CAR DETAILS(ORIGINAL STATE)</h4>
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
        // table display
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

    <div class="container" >
       <!-- forms for update delete and insert -->
            <form id = "myForm" action="update.php" method="post" >
              <div class="form-group">
              
                <label for="email">Do you wish to update the Price??</label>
                <div class="col-sm-6" id="em">
                <input type="text" class="form-control"  placeholder="Enter New Price" name="PRICE" required >
                <input type="text" class="form-control"  placeholder="Enter Payment id of Car" name="pid" id="vals" required >
                <button type="submit" class="btn btn-success">Submit Request</button>
                </div>
                </div>
            </form>
            </div>

            <div class="container" >
            <form id = "myForm1" action="delete.php" method="post" >
              <div class="form-group">
                <label for="second">Remove a Car from Listing?</label>
                <div class="col-sm-5" id="second">
                <input type="text" class="form-control" id="val" placeholder="Enter Car ID" name="pwd" required>
                <button type="submit" class="btn btn-success ">Submit Request</button>
                </div>
              
              </div>
              </form>
          </div>

          <div class="container" >
            <form id = "myForm2" action="insert.php" method="post" >
              <div class="form-group">
                <label for="second">Name a new Car in Listing?</label>
                <div class="col-sm-6" id="second">
                <input type="text" class="form-control" id="vals" placeholder="Enter Your Car Model" name="a1" required>
                <input type="text" class="form-control" id="vals" placeholder="Enter the type of Car" name="a2" required>
                <input type="text" class="form-control" id="vals" placeholder="Enter the capacity" name="a3" required>
                
                </div>
                <div class="col-sm-4" id="second">
                    
                    <input type="text" class="form-control" id="vals" placeholder="Enter the price of Car" name="a4" required>
                    <input type="text" class="form-control" id="vals" placeholder="Enter the Associated GST" name="a5" required>
                    <input type="text" class="form-control" id="val" placeholder="Enter the Center ID for Car(1,2 or 3)" name="a6" required>
                    
                    

                
            </div>
            <div class="col-sm-4">
            <button type="submit" class="btn btn-success ">Submit Request</button>
            </div>
              
              </div>
              </form>
          </div>

          <script>
          document.getElementById("myForm").onsubmit = chkPasswords;
          
      
          </script>


          

</body>
</html>