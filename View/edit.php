<!DOCTYPE html>
<html lang="">
<head>
    <title>View Your apartment</title>
    <meta charset="UTF-8">
     <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet"> 
    
    <link rel="shortcut icon" href="../View/Pictures/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    
     <link rel="stylesheet" href="../View/css/side.css">
    <link rel="stylesheet" href="../View/css/style.css">
    <script src="../Model/js/coustom.js"></script>
    <meta charset="UTF-8">
    
</head>
<body>
<nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand" href="home2.html">
    <img src="../View/pictures/icon.png" width="50" height="50" class="icon" alt=""><Strong style="color: black">Smart Home</Strong>
   </a>
 
  <form class="form-inline">
       
   <span style="font-size:30px;cursor:pointer" onclick="openNav()" >&#x02261; &nbsp;Menu</span>
  </form>
</nav>
    
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="../View/home2.html">Home</a>
     <a href="../View/user.php"> Profile</a>
     <a href="../View/dashboard.html">Dashboard</a>
  <a href="../View/view.php">View appartment</a>
  <a href="../View/manage.html">Manage appartment</a>
    <a href="../Controller/logout.php">Logout</a>
<a href="../View/contactlog.html">Contact us</a>

</div>
   

    <script>
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

/* Close/hide the sidenav */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
} 
    </script>
    <?php
      
include '../Controller/config.php';
 session_start();
  $userid=$_SESSION['name'];
 $sql = "SELECT * FROM user WHERE userid='$userid' ";
    $ass = mysqli_query($dbcon, $sql);

while($row = mysqli_fetch_array($ass)){
    $uname = $row['username'];
    $fname = $row['FirstName'];
    $lname = $row['LastName'];
    $pass = $row['Password'];
    $email = $row['EmailID'];
        $dob = $row['DOB'];
     $gender = $row['Gender'];
    $address = $row['Address'];
    $prod = $row['ProductID'];
    
    }
    ?>
<body>
    <br>
<div class="container">
    <h1>Edit Profile Details:</h1>
  	<hr>
	<div class="row">
      
      <div class="col-md-9 personal-info">
        
        
        <form class="form-horizontal" action="../Controller/edit_yo.php" role="form" method="POST">
          <div class="row" style="margin-left:190px;">
    <div class="col">
       
      username: <input type="text" name="username" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $uname;?>" required>
         First Name: <input type="text" name="FirstName" id="FirstName" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $fname;?>" required>
         last Name: <input type="text" name="LastName" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $lname;?>" required>
       Password: <input type="password" name="Password" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"value="<?php echo $pass;?>" required>
        Conform password: <input type="password" name="cpass" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"  required>
        
    </div>
      <div class="vl"></div>
    <div class="col">
      Birthday: <input type="Date" name="DOB" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php echo $dob ;?>" readonly>
        
         Email: <input type="email" name="EmailID" value="<?php echo $email;?>" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" readonly>
        Address:<input type="text" name="Address" value="<?php echo $address;?>" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" readonly>
        Product.id:<input type="text" value="<?php echo $prod;?>" name="ProductID" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" readonly>
    </div>
  </div>
            
         

    

<hr>
    
 <div class="form-group" style="margin-left:350px;" >
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8" >
                <a href="../View/user.php" class="btn btn-outline-danger my-2 my-sm-0" type="submit">cancel</a>
              
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin-right: 16px">Save changes</button>
    
            </div>
          </div>
   
        </form>
          
        </div>
    </div>
    </div>
  
        
    
<hr class="style18">
    
 
       
        <footer style="width: auto">    
  
    <div class="copyright">
  <div class="container">
    <div class="col-md-6">
      <p>© 2017 - All Rights with Smart Home</p>
    </div>
    <div class="col-md-6">
      <ul class="bottom_ul">
        
        
      </ul>
    </div>
  </div>
</div>

        
        </footer>
   
</body>
</html>
