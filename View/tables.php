<!DOCTYPE html>

<?php

include '../Controller/config.php';

 session_start();
         $userid=$_SESSION['name'];
        
$queryRoom= "SELECT RoomID FROM rooms WHERE HomeID=(SELECT HomeID FROM home WHERE Userid='$userid') ";
$queryRoomExec=mysqli_query($dbcon,$queryRoom);
//echo "asdfghv";
//print_r(mysqli_fetch_array($queryRoomExec));

 

//$bitch = 'SELECT * 
		//FROM SesnsorReadings';
		
//$ass = mysqli_query($dbcon, $bitch);




?>

<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <title>Details</title>
    <meta charset="UTF-8">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
         <link rel="shortcut icon" href="../View/Pictures/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
        <link href="../View/css/tablestyle.css" rel="stylesheet">
    <link rel="stylesheet" href="../View/css/style.css">
   
    
    
    
</head>
<body>

    
    <div id="wrapper">
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
                
            </div>
         <div style="min-height: 283px;" id="page-wrapper">
              <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Details</h1>
                </div>
            </div>
             <div class="row">
                
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <font size="4" color="red" style="margin-right:20px;">Sensors details</font>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" style="width:1300px">
                                    <thead>
                                        <tr>
                                            
                                            <th>Date</th>
                                               <th>Sensors</th>
                                            <th>Readings</th>
                                            <th>RoomType</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
        
                                        <?php
                                        while (list($roomid) = mysqli_fetch_array($queryRoomExec))
                                        {
                                            $sensorIDquery= "Select SensorID from sensors where RoomID='$roomid'";
                                            $sensorIDqueryExec= mysqli_query($dbcon,$sensorIDquery);
                                              //print_r (mysqli_fetch_array($sensorIDqueryExec));
                                            while (list($row) = mysqli_fetch_array($sensorIDqueryExec))
                                            {
                                                //echo "row: ".$row."<br>";
                                                $query_Values= "SELECT DISTINCT SesnsorReadings.date, SesnsorReadings.SensorValue, sensors.SensorTpye, sensors.Roomtype from SesnsorReadings INNER JOIN sensors on sensors.SensorID=SesnsorReadings .SensorID where sensors.SensorID='$row' order by SesnsorReadings.date DESC ";


                                                $query_ValuesExec= mysqli_query($dbcon,$query_Values);
                                                //print_r(mysqli_fetch_array($query_ValuesExec)); 
                                                while($readings = mysqli_fetch_array($query_ValuesExec))
                                                      {
                                                    
                                                        echo '<tr>


                                                        <td>'.$readings['date'].'</td>
                                                        <td>'.$readings['SensorTpye'].'</td>
                                                        <td>'.$readings['SensorValue'].'</td>
                                                        <td>'.$readings['Roomtype'].'</td>

                                                    </tr>';
                                                    

                                                      }
                                                


                                            }
                                        }

       
            ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
               
             </div>
             <hr>
              <div class="row">
             
             
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <font size="4" color="Poop Brown">Controllers</font>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" style="width:1300px;">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Condition</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Camera</td>
                                            <td>ON</td>
                                           
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Shutter</td>
                                            <td>Close</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                           
                                            <td>Door</td>
                                            <td>Close</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                           
                                            <td>Alaram</td>
                                            <td>Disabled</td>
                                            <tr>
                                            <td>4</td>
                                           
                                            <td>Lights</td>
                                            <td>ON</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    
                    </div>
                    
                    
               
            
             
        </div>
             <footer class="footer">
                <p class="foot"><font size=3>© To Mr.Sellami, with love</font></p>
      </footer>
    
    </div>
</body>
</html>