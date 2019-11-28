
<?php 
 
include("config.php");
//include("salt.php");

 
    $email = $_POST['mail'];
    $pass = crypt($_POST['pass'],"DOMISEP");
    //$pass= $_POST['pass'];
     $_SESSION['login_user']=$email; 
    $query1 = "SELECT EmailID FROM user WHERE EmailID='$email' and Password='$pass'";
        $query2=mysqli_query($dbcon,$query1);
        $query3= mysqli_fetch_array($query2);
        //print_r($query3);
        
       //echo $query3;
     if ($query3!= 0)
    {
      if ($email=="admin@gmail.com")
      {
        //session_id("admin");
          session_start();
          $_SESSION['name']="admin";
        header('Location: ../View/admindas.php');
        
      }
         
      else
      {
        $query_UserID = "SELECT Userid FROM user WHERE EmailID='$email' and Password='$pass'";
        $query2_UserID=mysqli_query($dbcon,$query_UserID);
        $query3_UserID = mysqli_fetch_array($query2_UserID, MYSQLI_BOTH);
        //print_r($query3_UserID);
        $Userid=$query3_UserID[0];
        //session_id($Userid);
        session_start();
        $_SESSION['name']=$Userid;
    
        $query_home="SELECT * FROM home where UserID='$Userid'";
        $query_homeExecute=mysqli_query($dbcon,$query_home);
        $query_homeExecuteCount=  mysqli_num_rows($query_homeExecute);
        
        if($$query_homeExecuteCount!=0)
              
            header('Location:../View/dashboard.html');
        else
          {
              $homeid=$Userid."home";
              $queryInsertHome="INSERT INTO home(HomeID,UserID) values ('$homeid','$Userid')"; 
              $queryInsertHomeExecute=mysqli_query($dbcon,$queryInsertHome);
              header('Location:../View/manage.html ');
          }
            
      }

    }
    else
    {
      echo "User Name Or Password Invalid!".$pass;
      include('../View/login.html');
    }



    ?>


