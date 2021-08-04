<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login');
}

?>
<html>
<head>
    <title> Home Page  </title>
    <style>
        a
{
    color: #fff !important;
    margin-top:-200px !important;
}
h1
{
    color:#fff !important;
    margin-top: 200px !important;
    text-align:center; !important;
    text-transform: uppercase;

}
    </style>
    <link type="text/css" rel="stylesheet"  href="style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
       
        </head>
    <body>
        <div class="container">
        <a class="float-right" href="logout.php">LOGOUT</a>
        <h1>  WELCOME <?php echo $_SESSION['username']; ?> </h1>
             
 
    <center>   <h1 >FOR SEEING THE VALUES NEEDED , SEARCH IN THE TABLE</h1><br>
      <form action="finalpage.html" method="post">
            <div class="container">
          <div class="vertical-center">
                <button type="submit" class="btn btn-primary">CLICK HERE</button>
          </div></div>
        
        
            </form>
            </center> 
        
      <center>  <h1 >THE INFORMATION WILL BE UPDATED FOR EVERY 6HOURS.<br>INFORMATION WAS LASTLY UPDATED AT<p style="color:yellow">21st FEBRUARY 2021 <BR>06:30PM </p>  </h1> </center><br>
        
        </div>
    </body>
</html>
