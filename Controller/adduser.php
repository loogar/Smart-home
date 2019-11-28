<?php
include '../Controller/config.php';

$error_Msg=' ';
$uname=$_POST['username'];
$fname=$_POST['FirstName'];
$lname=$_POST['LastName'];
//$user=$_POST['user'];
$email=$_POST['EmailID'];
$pass=crypt($_POST['Password'],"DOMISEP");
//$cpass=$_POST['cpass'];
$birth=$_POST['DOB'];
//$phone=$_POST['phone'];
$gender=$_POST['gender'];
$address=$_POST['Address'];
$Productid=$_POST['ProductID'];
// validating if the emailid has been used prev
$selectEmail = "SELECT * FROM user WHERE EmailID='$email'"; 
$selectEmailQuery = mysqli_query($dbcon,$selectEmail);
$selectEmailQueryCount=  mysqli_num_rows($selectEmailQuery);
$selectusername = "SELECT * FROM user WHERE username='$uname'"; 
$selectusernameQuery = mysqli_query($dbcon,$selectusername);
$selectusernameQueryCount=  mysqli_num_rows($selectusernameQuery);



//echo $error_Msg ;
//echo $selectEmailQueryCount;
if ($selectEmailQueryCount==1)
{
    $numberOfuser= "select * from user";
    $numberOfuser1 = mysqli_query($dbcon,$numberOfuser);
    $numberOfuserrow = mysqli_num_rows($numberOfuser1);
    //echo $numberOfuserrow;*/
    $error_Msg= "Email Id is already registered.";
    //echo $error_Msg;
}
    
elseif ($selectusernameQueryCount==1)
{//echo $error_Msg;
 $error_Msg.= "Username is already registered.";
    // echo $error_Msg;
} 
//elseif($pass != $cpass){
     //$error_Msg.= "password Dosen't match.";
//}


else
{
    $rowcount= "select * from products where ProductID = '$Productid'and Used = '0'"; 
    $rowcount1= mysqli_query($dbcon,$rowcount);
    $rowcount2= mysqli_num_rows($rowcount1);

        if ($rowcount2==1)
        {

            $numberOfuser= "select * from user";
           $numberOfuser1 = mysqli_query($dbcon,$numberOfuser);
           $numberOfuserrow = mysqli_num_rows($numberOfuser1);

            $userid= "user".$numberOfuserrow; // assigns a userid(PK) to the user.
            //entering the data in the user table with the data from the signup page
            
            $req="INSERT INTO user (Userid, username, FirstName, LastName, EmailID, Password, DOB,gender,Address, ProductID, UserStatusActive) VALUES('$userid','$uname','$fname','$lname','$email','$pass','$birth','$gender','$address','$Productid','0')";
            
            mysqli_query($dbcon,$req);
            $req_hometable="INSERT INTO `home`(`Userid`) VALUES('$userid')";  // entering the userid in the home table;
            mysqli_query($dbcon,$req_hometable);
            $req_upProduct="UPDATE `products` SET  `Used` = '1' WHERE `products`.`ProductID` = '$Productid'"; // to set the productid as 1 hence used
            mysqli_query($dbcon,$req_upProduct);
            header ('Location:../View/login.html'); 
        }
        else
            $error_Msg = "The product id entered is not valid";


    
}


    //checks if the prod is has been used prev
   


 mysqli_close($dbcon);



?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">     
    <title>Sign up</title>
	 <link rel="shortcut icon" href="../View/Pictures/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="../View/css/style.css">
    <script src="../Model/js/coustom.js"></script>
    <?php if(!empty($error_Msg)){
    echo "<p style='Color:red;padding: 7px 10px;background: #fff1f2;border: #ffd5da 1px solid;color: #d6001c;border-radius: 4px;'>".$error_Msg."</p>";
 }?>
</head>
<body>

<nav class="navbar navbar-light bg-dark justify-content-between">
    <a class="navbar-brand" href="home.html">
    <img src="../View/pictures/icon.png" width="50" height="50" class="icon" alt=""><Strong style="color: whitesmoke">Smart Home</Strong>
   </a>
 
  <form class="form-inline">
       <a href="../View/login.html" class="btn btn-outline-warning my-2 my-sm-0" type="submit" style="margin-right: 16px">Login</a>
    <a href="../View/home.html" class="btn btn-outline-danger my-2 my-sm-0" type="submit" >Home</a>
  </form>
</nav>
      
    <div class="main">
    <h2 style="margin-top: -50px;">Sign-up</h2>
        <form>
         <div class="container">
              
  <div class="row">
    <div class="col">
      username: <input type="text" name="username" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
         First Name: <input type="text" name="FirstName" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
         last Name: <input type="text" name="LastName" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
       Password: <input type="password" name="Password" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
        Conform password: <input type="password" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
        
    </div>
      <div class="vl"></div>
    <div class="col">
      Birthday: <input type="Date" name="DOB" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
         Gender: <br> <label class="radio-inline"><input  type="radio" name="gender" required>&nbsp;Male</label>&nbsp;
<label class="radio-inline"><input type="radio" name="gender" required>&nbsp;Female</label>&nbsp;
<label class="radio-inline"><input type="radio" name="gender" required>&nbsp;Other</label>&nbsp;<br> 
         Email: <input type="email" name="EmailID" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
        Address:<input type="text" name="Address" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
        Product.id:<input type="text" name="ProductID" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
    </div>
  </div>
  <div class="row" style="float: right">
    <div class="col">
         <a href="../View/home.html" class="btn btn-outline-warning my-2 my-sm-0" type="submit" style="margin-right: 16px" >Cancel</a>
    <a  class="btn btn-outline-danger my-2 my-sm-0"  type="submit">Register</a>
    </div>
   
    </div>
  </div>

        </form>
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


