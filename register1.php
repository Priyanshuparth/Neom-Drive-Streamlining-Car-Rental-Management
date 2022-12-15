<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"> -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
    
    <script type="text/javascript">
      function CheckAge(){
        var i=document.getElementById("n1");
        if(i.value<18)
        {
          i.style.backgroundColor="#f2b9c4"
          alert("Please Enter valid age");
          i.focus();
          
          return false;

        }
        else
        return true;
      }
      function check(){
  var x=document.getElementById("check");
  var y=document.getElementById("pas");
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
          <!-- <input type="text" class="input-md form-control" placeholder="Search">
          <div class="input-group">
            <button class="btn btn-default btn-xs " type="submit">
              <i class="glyphicon glyphicon-search " ></i>
            </button> -->
          </div>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="plainlogin.php"><span class="glyphicon glyphicon-user"></span> User Login</a></li>
            <li><a href="adminlogin.php"><span class="glyphicon glyphicon-log-in"></span> Vendor Login</a></li>
          </ul>
        
      </form>


        </section>

    </header>
    <main>
        
      <div class="container" >
        <div width="200" height="700">
            <h2>Create your Account</h2>
            <form action="login1.php" method="post" id="myForm">
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required>
                <label for="add">Address</label>
                <input type="text" name="add" placeholder="Enter your address" class="form-control">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email" name="email" required autocomplete="off">
                <label for="age">AGE</label>
                 <input type="text" class="form-control" placeholder="Enter your age(18+)" id="n1" name="age" required >

              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" name="pwd" placeholder="Enter password" id="pas" required >
              
              </div>
              <div class="checkbox">
                <label><input type="checkbox" id="check" name="remember"> Show Password</label>
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
              
            </form>
          </div>
         
          <script>
            document.getElementById("n1").onblur = CheckAge;
          document.getElementById("check").onclick=check;
          document.getElementById("myForm").onsubmit = CheckAge;
          </script>
        
    </main>
    <h3 style="text-align:center">or</h3>
     <h4 style="text-align:center; color:grey;">Already a user??</h4>
     <p style="text-align:center">
 <a  href="plainlogin.php">Login here!!</a>
 </p>
    
</body>
</html>