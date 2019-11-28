


<!DOCTYPE html>
<html>
<head>
    <title>Add sensor</title>
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
  <form method="post" action="../Controller/addsensor.php">
  <center>
      
       <div class="card">
           <h2>Add new Products</h2>
      <hr>
        <center>Number of Products: <input type="text" name="NumberOf" placeholder="Enter or choose number of rooms" id="NumberOf"></center><br>
    <table id="studenttable">
<a href ="#" id="demo" style="margin-left: 50px;" >Add new</a>
	
         
	</table>
	 <hr>
       


       
      <script>
		//window.onload = function(){
			var count=1;
			
			document.getElementById("demo").onclick = function() {addRow()};
			function addRow() {
				var number = document.getElementById("NumberOf").value;
				for (var i =1; i<=number;i++)
				{
					var table = document.getElementById("studenttable");
				    var row = table.insertRow(-1);
     
				    var cell1 = row.insertCell(0);
             
			

				   
				      
				    var theDiv = document.createElement('div');
              
				    theDiv.setAttribute("class", "text");
            
				    var theSelect = document.createElement('input');
                    theSelect.type = 'text';
                    theSelect.required = "true";
				     theSelect.placeholder='type your new product name here...';
				    theSelect.name = "newsensor"+count;  // setting unique NAME
				    theSelect.id = "newsensor"+count;    // setting unique ID
				     
				 
				    
				    
				    theDiv.appendChild(theSelect);
				    cell1.appendChild(theDiv);

                count++;
                }
            }
    </script>
   


			 
        
 

    </div>
  
     
    
  
      
    <br><br><br>
 <div class="row" >
    <div class="col">
         <a href="../View/admindas.php" class="btn btn-outline-danger my-2 my-sm-0" type="submit">Cancel</a>
        <input type="submit" class="btn btn-outline-success">
  
    </div>
   
    </div>
     </center>
    </form>
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