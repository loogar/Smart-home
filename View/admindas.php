<!DOCTYPE html>
<html>
<head>
    <?php
//i might say i am working on it but i wont so y dont you be a sweet heart and complete this
include("../Controller/config.php");
$bitch = "SELECT * 
		FROM user where UserStatusActive='1' and Userid<>'admin'";
 
$rowcount= " UPDATE user SET UserStatusActive='1';"; 
    
    $rowcount= mysqli_query($dbcon,$rowcount);
$ass = mysqli_query($dbcon, $bitch);

if (!$ass) {
	die ('SQL Error: ' . mysqli_error($dbcon));
}

    

        
    

?>
    <title>Admin dash</title>
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
     <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	
  <!-- SweetAlert -->
  <script src="bower_components/sweetalert/lib/sweet-alert.min.js"></script>
  <link rel="stylesheet" href="bower_components/sweetalert/lib/sweet-alert.css">
     
     <link rel="stylesheet" href="../View/css/side.css">
    <link rel="stylesheet" href="../View/css/profile.css">
    <link rel="stylesheet" href="../View/css/style.css">
    <script src="../Model/js/coustom.js"></script>
</head>
<body>
<nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand" href="../View/admhome.html">
    <img src="../View/pictures/icon.png" width="50" height="50" class="icon" alt=""><Strong style="color: black">Smart Home</Strong>
   </a>
 
  <form class="form-inline">
       
   <span style="font-size:30px;cursor:pointer" onclick="openNav()" >&#x02261;&nbsp;Menu</span>
  </form>
</nav>
    
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="../View/admhome.html">Home</a>
    
     <a href="../View/admindas.php">Dashboard</a>
  <a href="../View/adminsens.php">Add sensors</a>

    <a href="../Controller/logout.php">Logout</a>

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
    <h5>Admin</h5>
      
  </div> 
</div>
<div class="card1">
     
<h2 style="margin-bottom: 5px">
                     Admin - Controller
                      </h2>  
                    <hr>
            <div>
              <table class="table table-striped table-dark" style="width=20px; ">
  <thead>
    <tr>
        
           <th scope="col">UserId</th>
      <th scope="col">Username</th>
     <!---   <th scope="col">Firstname</th>
        <th scope="col">lastname</th>-->
      <th scope="col">Email</th>
          <th scope="col">Gender</th>
    
    </tr>
  </thead>
  <tbody>

    <tr>
        
      <?php
        
     	while ($row = mysqli_fetch_array($ass))
		{
			
			echo '<tr>
					
					<td>'.$row['Userid'].'</td>
					<td>'.$row['username'].'</td>
                  <!--  <td>'.$row['FirstName'].'</td>
                    <td>'.$row['LastName'].'</td> --->
                    <td>'.$row['EmailID'].'</td>
                    <td>'.$row['Gender'].'</td>
					
				

        <td> </td>
        
  
    	</tr>';
			
		
		}?>
      
  </tbody>
</table>  
           <script type="text/javascript">
                $(document).ready(function () 
	{
		swal({
    title: "CRAP!",
    text: "OK So Something Went Wrong!",
    icon: "error"
	}).then(function() {
    window.location = "../Controller/delete.php";
});
  
});
}
                
                </script>          
                     
     </div>     
     
                   


                   
                 
       </div>
    
    
    </div>
<hr class="style18">
    <footer>    
  
    <div class="copyright" >
  <div>
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