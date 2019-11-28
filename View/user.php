
<!DOCTYPE html>
<?php

include '../Controller/config.php';
 session_start();
   $userid=$_SESSION['name'];
//echo $userid;

$bitch = "SELECT * 
		FROM user where Userid='$userid'";
 
		
$ass = mysqli_query($dbcon, $bitch);

if (!$ass) {
	die ('SQL Error: ' . mysqli_error($dbcon));
}

	while ($row = mysqli_fetch_array($ass))
		{
         $uname=$row['username'];
        $fname=$row['FirstName'];
$lname=$row['LastName'];
$address=$row['Address'];
$productid=$row['ProductID'];
$email=$row['EmailID'];
$gender=$row['Gender'];
$dob=$row['DOB'];
        
    }

?>


<html>
<head>
    <title>User profile</title>
    <meta charset="UTF-8">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet"> 
    
    <link rel="shortcut icon" href="../View/Pictures/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
     
     <link rel="stylesheet" href="../View/css/side.css">
    <link rel="stylesheet" href="../View/css/profile.css">
    <link rel="stylesheet" href="../View/css/style.css">
    <script src="../View/css/coustom.js"></script>
</head>
<body>
<nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand" href="../View/home2.html">
    <img src="../View/pictures/icon.png" width="50" height="50" class="icon" alt=""><Strong style="color: black">Smart Home</Strong>
   </a>
 
  <form class="form-inline">
       
   <span style="font-size:30px;cursor:pointer" onclick="openNav()" >&#x02261;&nbsp;Menu</span>
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
   <div class="outer-div">
    <div class="card">
  <div class="header">
    <h1>Its you</h1>
  </div>

  <div class="container">
    <h5><?php echo $uname ?></h5>
      <a  href="../View/edit.php" class="btn btn-outline-danger " type="submit" style="margin-right: 16px">Edit profile</a>
  </div> 
</div>
<div class="card1">
     <center>
<h2 style="margin-bottom: 5px">
                 Hey you all this is:    <?php  echo $uname ?>
                      </h2>  
                    <hr>
                 </center>
    
                   
                   

         <center>
                  <div>
                     
                      <address style="margin-bottom: 9px;">
                          <strong>User Name:&nbsp;</strong><?php echo $uname ?><br>
                           <strong>First Name:&nbsp;</strong><?php echo $fname ?><br>   
<strong>Last Name:&nbsp;</strong><?php echo $lname ?><br>
<strong>Gender: &nbsp;</strong><?php echo $gender ?><br>
<strong>Birth day:&nbsp;</strong><?php echo  $dob ?><br>
<strong>Address:&nbsp;</strong><?php echo $address ?><br>

<strong>E-mail:&nbsp;</strong><?php echo $email ?><br>
<strong>Product_id:&nbsp;</strong><?php echo $productid ?><br>
</address>
     </div>     
     </center>
                   

<hr>
       </div>
    
    
    </div>
    
    <hr class="style18">

   <footer>    
  
    <div class="copyright">
  
    <div class="col-md-6">
      <p>© 2017 - All Rights with Smart Home</p>
    </div>
    <div class="col-md-6">
      <ul class="bottom_ul">
        
      
       
        
      </ul>
    </div>
  </div>

  
        </footer>
</body>
</html>