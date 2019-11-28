<?php
include '../Controller/config.php';
//include '../Controller/log_check.php';
session_start();
$userid=$_SESSION['name'];
//echo $userid;
$newSensors=0;
$x=0;

// fetching the homeid
$queryHomeId= "SELECT HomeID from home where UserID='$userid'";
$queryHomeIdExecute= mysqli_query($dbcon,$queryHomeId);
$query3_HomeID = mysqli_fetch_array($queryHomeIdExecute, MYSQLI_BOTH);
$homeid=$query3_HomeID[0];

$NumberOfRooms =  $_POST["NumberOf"];
$rowcount= "select * from sensors"; 
$rowcount1= mysqli_query($dbcon,$rowcount);
$rowcount2= mysqli_num_rows($rowcount1);
//echo $rowcount2;
//echo $NumberOfRooms;
$typeOfRoom=array();
for ($i=1; $i<=$NumberOfRooms; $i++)
{

	$j= (string)$i;
	$room= 'select'.$j;	
	$nameofRoom=$_POST[$room];
	$typeOfRoom[$i-1]= $nameofRoom;
	
}


$a=1;
$i=0;

foreach ($typeOfRoom as $value) { 	
	$j=(string)$i;
	$b=(string)$a;
	$name= 'select1'.$b;
    $typeofRoom_cell=$value;
    	$sensorPerRoom=  $_POST[$name];
	//echo "typeOfRoom".$j.$value."<br>";
	$roomid= $homeid."room".$j;//assiging a roomid
	$insertRoom = "INSERT INTO rooms (HomeID,RoomID, RoomType) VALUES ('$homeid','$roomid','$value')"; //for each type of room, we store the room type in rooms sensor
	$insertRoomQuery = mysqli_query($dbcon,$insertRoom);
	//$sensorPerRoomSplit=(explode(".",$sensorPerRoom)); //splitting the values of the multiselect sensor selector
	//echo"sensorPerRoomSplit<br>";
	//print_r($sensorPerRoomSplit);
    //print_r ($sensorPerRoom);
	foreach ($sensorPerRoom as $value) {
		$senorValueRand= rand(1,200); //setting a random value of sensor
		$SensorAlertStatus= rand(0,1); //setting a random alert status
		$query_numberSensor= "select SensorID from sensors where RoomID='$roomid' ";
        $query_numberSensorExec = mysqli_query($dbcon,$query_numberSensor);
           $numberOfSensor = mysqli_num_rows($query_numberSensorExec);
        $sensorNumber=$numberOfSensor+1;
		$y=(String)$sensorNumber;
		$SensorID= $roomid."Sensor".$y;// assigning a sensor id
        //echo $SensorID;
		//echo "Sensor".$j.$value."<br>";
		
		//echo $SensorID;
        //echo $typeofR oom_cell." dss <br>";

	
		$insertSensor = "INSERT INTO sensors (SensorID,SensorTpye,RoomID,Roomtype,SensorValue,SensorAlertStatus) VALUES('$SensorID', '$value', '$roomid', '$typeofRoom_cell', '$senorValueRand', '$SensorAlertStatus')"; //inserting the values of the sensor to the sensors table
		$insertSensorQuery = mysqli_query($dbcon,$insertSensor);
		$newSensors++;
        $x++;
		
	}


	 //Selecting the sensorName

	
	$i++;
	$a++;
}
$rowcount1_Updated= mysqli_query($dbcon,$rowcount);
$rowcount2_Updated= mysqli_num_rows($rowcount1);

//$newSensors=0;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
if ( $rowcount2_Updated= $rowcount2+$newSensors ) :
 ?>

<script type="text/javascript">
	$(document).ready(function () 
	{
		swal("Congrats! Sensors have been added. Do you want to view them?", {
			buttons: {
    cancel: "Cancel",
    catch: {
      text: "View My Apartment",
      value: "View",
    },
    Home: true,
  },
  icon: "success"
})
.then((value) => {
  switch (value) {
 
   // case "defeat":
     // window.location = "index.html"
      //break;
 
    case "View":
      window.location = "../View/view.php"
      break;

    case "Home":
      window.location = "../View/home2.html"
      break;
 
    default:
      window.location = "../View/manage.html"
   
}
});
  
});
</script>
<?php else: ?>
	<script type="text/javascript">
  $(document).ready(function () 
	{
		swal({
    title: "CRAP!",
    text: "OK So Something Went Wrong!",
    icon: "error"
	}).then(function() {
    window.location = "../View/manage.html";
});
  
});
</script>
<?php endif; ?>

<title></title>
</head>
<body background="../View/pictures/hoe.png">

</body>
