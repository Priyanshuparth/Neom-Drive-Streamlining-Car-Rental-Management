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
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"> -->
    <link rel="stylesheet" href="./css/style.css">
    <?php 
    // insert values from registration 
$Name =$_POST['name'];
$Age =$_POST['age'];
$Add =$_POST['add'];
$Pas =$_POST['pwd'];
$EM =$_POST['email'];

$con = mysqli_connect("localhost","root","");
if (!$con)
{
��die('Could not connect: ' . mysqli_connect_error());
}
mysqli_select_db($con,"car-rental");
$result = mysqli_query($con,"SELECT count(name) FROM customer");
$c = mysqli_fetch_array($result);
$cus= $c[0]+1;

mysqli_query($con, "INSERT INTO customer VALUES ('$cus', '$Name','$EM','$Add','$Age','$Pas')") or die(mysqli_connect_error());

mysqli_close($con);


?> 
<?php 
// function for login check
function myphp(){
   $con = mysqli_connect("localhost","root","");
   if (!$con)
   {
   ��die('Could not connect: ' . mysqli_connect_error());
   }
   mysqli_select_db($con,"car-rental");
   $result = mysqli_query($con,"SELECT email,password from customer ");
  $arr="";
while($row = mysqli_fetch_array($result))
{
  $arr=$arr.$row['email'].$row['password']." ";
}
return $arr;
mysqli_close($con);
}
?>

<!-- javascriptModule -->
<!-- credentials checking block -->
<script typr="text/javascript">
        function chkPasswords() { 

  var sec = document.getElementById("em");
  var pas = document.getElementById("second");
  var con=sec.value.concat(pas.value);
 
  var i="<?php echo myphp()?>"
  
  var j=i.split(" ");
  
  var s=0;
  for(var k=0;k<((j.length)-1);k++)
  {
    if(j[k]==con)
    {
      s=1;
    }
  }
  if(s==0){
    alert("Invalid Login!!Please Check your Details");
  sec.style.backgroundColor="#f2b9c4"
  pas.style.backgroundColor="#f2b9c4"
  sec.focus();
  pas.focus();
  return false;
  }
  if(s==1)
  {
  alert("Login Successful- You may now Choose your car!!");
  return true;
  }
 

}
function check(){
  var x=document.getElementById("check");
  var y=document.getElementById("second");
  if(x.checked){
    y.type="text";
  }
  else{
    y.type="password";
  }
}
</script>


   
</head>
<body>
<header class="header">
        <section class="flex">
    <a href="about.html" class="logo"><img src="./image/NeomDrive.png" class="img-circle" alt="No image found" height="70px"  ></a>
    <div class="page-header">
        <nav class="nav-bar">
            <a href="index.php">Home</a>
            <a href="about.html">About</a>
            <a href="carlisting.php">Car Listing</a>
            <a href="faqs.html">FAQs</a>
            <a href="contact.html">Contact</a>
        </nav>
    </div>
    <form class="navbar-form navbar-right">
          
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        
      </form>


        </section>

    </header>

    <div class="container" >
        <div width="200" height="700">
            <h2>Login into your Account</h2>
            <form id = "myForm" action="carlisting.php" method="post" >
              <div class="form-group">
              
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="em" placeholder="Enter email" name="email" required autocomplete="off">
                

              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="second" placeholder="Enter password" name="pwd" required>
              
              </div>
              <div class="checkbox">
                <label><input type="checkbox" id="check"> Show Password</label>
              </div>
              <button type="submit" class="btn btn-success">Login</button>
              
            </form>
          </div>



          <script>
          document.getElementById("myForm").onsubmit = chkPasswords;
          document.getElementById("check").onclick=check;
          </script>

</body>
</html>