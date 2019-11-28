

 


<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
      <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">     
    <title>Sign up</title>
	 <link rel="shortcut icon" href="../View/Pictures/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="https://use.fontawesome.com/197ad31b6c.js"></script>
   
     <link rel="stylesheet" href="../View/css/dash.css">
    <link rel="stylesheet" href="../View/css/style.css">
    <script src="../Model/js/coustom.js"></script>
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
    
    <div style="min-height: 234px;" id="page-wrapper">
    <div class="row">
<div class="col-lg-12">
<h1 class="page-header">Sensor details</h1>
                </div>
                
            </div>
    <br>
 <div class="row">
 <div class="col-lg-3 col-md-6 ">
<div class="panel panel-primary">
 <div class="panel-heading">
 <div class="row">
<div class="col-xs-3">
    
                                </div>
      <div class="col-xs-9 text-right" style="height:80px;" >
         <div col-sm-9><img class="temp" src="../View/dashpic/img2.png"></div>
          <div class="huge" id="price1"><font size="4" ></font></div>
          
          
          <div><font size="4" color="white">Temperature</font>(in celcius)</div>
          <div><font size="2"  color="black">click the down link to see the readings</font></div>
           
                                </div>
                            </div>
                        </div>
      <a href="../View/tables.php">
     <div class="panel-footer">
<span class="pull-left">View Details</span>
<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
 <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
 <div class="col-lg-3 col-md-6">
<div class="panel panel-green">
<div class="panel-heading">
 <div class="row">
     <div class="col-xs-3">

                                </div>
    <div class="col-xs-9 text-right" style="height:80px;">
        <div><img class="temp" src="../View/dashpic/img4.png"></div>
        <div class="huge" id="price2"><font size="4" color="white"></font></div>
        <div style="margin-top:4px;"><font size="4" color="white">Humidity</font></div><br>
         <div><font size="2"  color="black">click the down link to see the readings</font></div>
         
                                </div>
                            </div>
                        </div>
 <a href="../View/tables.php">
<div class="panel-footer">
 <span class="pull-left">View Details</span>
<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
<div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
  <div class="col-lg-3 col-md-6">
<div class="panel panel-yellow">      
<div class="panel-heading">
<div class="row">
 <div class="col-xs-3">
  
                                </div>
    <div class="col-xs-9 text-right">
        <div><img class="temp" src="../View/dashpic/img3.png"></div>
 <div class="huge"><input data-toggle="toggle" data-on="close" data-off="open" type="checkbox">
                                   </div>
        <div><font size="4" color="white">Shutter</font></div>
       <div class="select-style" style="float: right">
  <select>
  <option value="0" disabled>&#127968;  Rooms </option>
  <option value="20">  &#128719; Bedroom </option>
  <option value="19"> &#127968; Living </option>
  <option value="70">&#127869;  Kitchen </option>
  <option value="43"> 	&#128701;  Bathroom </option>
 </select>
</div>
                 
                                </div>
                            </div>
                        </div>
     
<div class="panel-footer">
<span class="pull-left">Keep it shut</span>
     <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
 <div class="clearfix"></div>
                            </div>
                        
                    </div>
                </div>
<div class="col-lg-3 col-md-6">
 <div class="panel panel-red">
 <div class="panel-heading">
         <div class="row">
     <div class="col-xs-3">
 
     </div>
 <div class="col-xs-9 text-right" style="height:80px;">
     <div><img class="temp" src="../View/dashpic/img7.png"></div>
     <div class="huge" id="price3"></div>
     
     <div><font size="4" color="white">Motion Activated</font></div>
     <div><font size="2"  color="black">click the down link to see the readings</font></div>
     
                                </div>
                            </div>
                        </div>
    <a href="../View/tables.php">
<div class="panel-footer">
     <span class="pull-left">View Details</span>
 <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
    <hr>
        <br>
    <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    
                                </div>
                                <div class="col-xs-9 text-right">
                                    <img class="cross" src="../View/dashpic/img5.png" style="float: left">
                                    <div class="huge"></div>
                                    
                                    <input data-toggle="toggle" data-on="close" data-off="open" type="checkbox">
                                   
                                    <div><font size="4" color="white">Door sensor</font></div>
                                    <div class="select-style" style="float: right">
  <select>
  <option value="0" disabled>&#127968;  Rooms </option>
  <option value="20">  &#128719; Bedroom </option>
  <option value="19"> &#127968; Living </option>
  <option value="70">&#127869;  Kitchen </option>
  <option value="43"> 	&#128701;  Bathroom </option>
 </select>
</div>
                                </div>
                            </div>
                        </div>
                      
                            <div class="panel-footer">
                                <span class="pull-left">Keep it shut</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    
                                </div>
                                <div class="col-xs-9 text-right">
                                     <img class="cross" src="../View/dashpic/img9.png" style="float: left">
                                    
                                    <input data-toggle="toggle" data-on="Disabeld" data-off="Enabled" type="checkbox">
                                    
                                    <div><font size="4" color="white">Camera</font></div>
                                    <div class="select-style" style="float: right">
  <select>
  <option value="0" disabled>&#127968;  Rooms </option>
  <option value="">  &#128719; Bedroom </option>
  <option value=""> &#127968; Living </option>
  <option value="">&#127869;  Kitchen </option>
  <option value=""> 	&#128701;  Bathroom </option>
 </select>
</div>
                                </div>
                            </div>
                        </div>
                        
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                    
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                   
                                </div>
                                <div class="col-xs-9 text-right">
                                    <img class="cross" src="../View/dashpic/img6.png" style="float: left">
                                    
                                    
                                    <input data-toggle="toggle" data-on="Enabled" data-off="Disabeld" type="checkbox">
                                    
                                    <div><font size="4" color="white">
                                     Home alarm</font></div>
<div class="select-style" style="float: right">
  <select>
  <option value="0" disabled>&#127968;  Rooms </option>
  <option value="20">  &#128719; Bedroom </option>
  <option value="19"> &#127968; Living </option>
  <option value="70">&#127869;  Kitchen </option>
  <option value="43"> 	&#128701;  Bathroom </option>
 </select>
</div>
                                    

                                </div>
                                
                            </div>
                        </div>
                      
                            <div class="panel-footer">
                                <span class="pull-left">incase you are being robbed</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                        <img class="cross" src="../View/dashpic/img1.png" style="float: left"><input checked data-toggle="toggle" type="checkbox"></div>
                                    <div><font size="4" color="white">LIGHTS</font></div>
                                   <div class="select-style" style="float: right">
  <select>
  <option value="0" disabled>&#127968;  Rooms </option>
  <option value="20">  &#128719; Bedroom </option>
  <option value="19"> &#127968; Living </option>
  <option value="70">&#127869;  Kitchen </option>
  <option value="43"> 	&#128701;  Bathroom </option>
 </select>
</div>
                                </div>
                            </div>
                        </div>
                        <a>
                            <div class="panel-footer">
                                <span class="pull-left">Save Electricity </span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
   <hr class="style18">
    
 
   
        <footer>    
  
    <div class="copyright" >
  <div>
    <div class="">
      <p>© 2017 - All Rights with Smart Home</p>
    </div>
    <div class="">
      <ul class="bottom_ul">
        
      
       
      </ul>
    </div>
  </div>
</div>
  
        </footer>
</body>
</html>