<?php

	include '../Controller/config.php';
	//change the session$userID=session_name();
session_start();
    $userID=$_SESSION['name'];
   $userName= $_POST['username'];
     $FirstName= $_POST['FirstName'];
	$LastName= $_POST['LastName'];
 
	$Password= crypt($_POST['Password'],'domisep');

	$queryUpdateValues= "UPDATE user SET username='$userName', FirstName = '$FirstName', LastName='$LastName', Password='$Password' WHERE Userid = '$userID'";
	$queryUpdateValuesExecute= mysqli_query($dbcon, $queryUpdateValues);

    $query_UName= "SELECT username FROM user where Userid='$userID'";
	$query_FName= "SELECT FirstName FROM user where Userid='$userID'";
	$query_LName= "SELECT LastName FROM user where Userid='$userID'";
	$query_Pwd= "SELECT Password FROM user where Userid='$userID'";
    $query_Addres= "SELECT Address FROM user where Userid='$userID'";
	$query_UNameExecute= mysqli_query($dbcon, $query_UName);
	$query_FNameExecute= mysqli_query($dbcon, $query_FName);
	$query_LNameExecute= mysqli_query($dbcon, $query_LName);
	$query_PwdExecute= mysqli_query($dbcon, $query_Pwd);
    $query_addressExecute=mysqli_query($dbcon, $query_Addres);
while ($row = mysqli_fetch_array($query_UNameExecute))
	{
		$userNameUpdated= $row['username'];    
	}

	while ($row = mysqli_fetch_array($query_FNameExecute))
	{
		$firstNameUpdated= $row['FirstName'];    
	}

	while ($row = mysqli_fetch_array($query_LNameExecute))
	{
		$lastNameUpdated= $row['LastName'];    
	}
while ($row = mysqli_fetch_array($query_PwdExecute))
	{
		$PasswordUpdated= $row['Password'];    
	}

	if ($FirstName==$firstNameUpdated and $LastName=$lastNameUpdated) {
		$match=1;
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
if ( $match==1 ) :
 ?>

<script type="text/javascript">
	$(document).ready(function () 
	{
		swal("Congrats! Your Profile has been Updated", {
			buttons: {
    cancel: "Cancel",
    catch: {
      text: "Check Your New Profile",
      value: "Profile",
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
 
    case "Profile":
      window.location = "../View/user.php"
      break;
 
    default:
      window.location = "../View/edit.php"
   
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
    window.location = "../View/edit.php";
});
  
});
</script>
<?php endif; ?>

<title></title>
</head>
<body background="../View/pictures/ss1.gif" style="background-size:  100%">

</body>
