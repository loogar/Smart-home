<?php
include("../Controller/config.php");
$rowcount= "select * from products"; 
$rowcount1= mysqli_query($dbcon,$rowcount);
$rowcount2= mysqli_num_rows($rowcount1);

$NumberOfRooms =  $_POST["NumberOf"];
$typeOfRoom=array();
for ($i=1; $i<=$NumberOfRooms; $i++)
{

	$j= (string)$i;
	$room= 'newsensor'.$j;	
	$nameofRoom=$_POST[$room];
	$typeOfRoom[$i-1]= $nameofRoom;
	$req="INSERT INTO products (ProductID,Used) VALUES('$nameofRoom','0')";
            
            mysqli_query($dbcon,$req);
}


$rowcount1_Updated= mysqli_query($dbcon,$rowcount);
$rowcount2_Updated= mysqli_num_rows($rowcount1);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
if ( $rowcount2_Updated= $rowcount2+$NumberOfRooms ) :
 ?>

<script type="text/javascript">
	$(document).ready(function () 
	{
		swal("Congrats! Products have been added ", {
			buttons: {
    cancel: "Add More",
    catch: {
      text: "Home",
      value: "View",
    },
    //Home: true,
  },
  icon: "success"
})
.then((value) => {
  switch (value) {
 
   // case "defeat":
     // window.location = "index.html"
      //break;
 
    case "View":
      window.location = "../View/admindas.php"
      break;

 
    default:
      window.location = "../View/adminsens.php"
   
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