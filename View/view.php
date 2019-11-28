
<?php
//i hope this is how session works

//$sensorid = $_SESSION['SensorID'];
//$sid = (isset($_GET['SensorID'])) ? $_GET['SensorID'] : $_SESSION['SensorID'];

//$query = "SELECT * FROM users WHERE id = $sid";

include '../Controller/config.php';
 session_start();
       $userid=$_SESSION['name'];
$queryRoom= "SELECT RoomID FROM rooms WHERE HomeID=(SELECT HomeID FROM home WHERE Userid='$userid') ";
$queryRoomExec=mysqli_query($dbcon,$queryRoom);
//$queryRoomResult=mysqli_result($queryRoomExec);
//$queryRoomearray=;
//foreach($queryRoomearray as $value)
  //  echo "room ".$value."<br>";
//$roomID= $queryRoomearray[0];
//print_r($queryRoomearray);
//mysqli_free_resultset($queryRoomExec);
$array_rooms=array();
$array_rooms_split=array();

//echo $array_rooms[1];

//print_r($array_rooms_split);


 
		


?>

<!DOCTYPE html>
<html>
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
    
    <div class="outer-div2">
        <h1> your Appartment has :</h1>
        <div>
    <table class="table table-dark">
  <thead>
    <tr>

      <th scope="col">Rooms</th>
      <th scope="col">Sensors</th>
      <th scope="col">Details</th>
    </tr>
  </thead>
  <tbody>
   <?php
		
      
      while(list($data)= mysqli_fetch_array($queryRoomExec,MYSQLI_NUM))
{
    //echo $data;//array_rooms[]=$data;
    //print_r($data);
    $bitch = "SELECT * FROM sensors where RoomID='$data'";
    $ass = mysqli_query($dbcon, $bitch);
          while ($row = mysqli_fetch_array($ass))
		{
			
			echo '<tr>
					
					<td>'.$row['Roomtype'].'</td>
					<td>'.$row['SensorTpye'].'</td>
                    <td>'.$row['SensorValue'].'</td>
					
				</tr>';
			
		
		}
    
    
}

		?>
      
  </tbody>
</table>
            <div style="float: right">
       <a  href="../View/manage.html" class="btn btn-outline-danger " type="submit" style="margin-right: 16px">Edit</a>
    <a href="../View/dashboard.html" class="btn btn-outline-warning " type="submit" src="signup.html">Back</a>
            </div>
            
    </div>
    </div>
    <hr class="style18">
    <footer>    
  
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