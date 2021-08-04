<html>
<head>
    <title> User Login And Registration</title>
    <link type="text/css" rel="stylesheet"  href="style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
    <body>
    <div class="container">
        <div class="login-box">
     <div class="row">
        <div class="col-md-6 login-left">
         <h2>Login Here</h2>
            <form action="validation.php" method="post">
            <div class="form-group">
                <label>username</label>
                <input type="text" name="user" class="form-control" required>
                </div>
                <div class="form-group">
                <label>password</label>
                <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
</div>
         
         <div class="col-md-6 login-right">
         <h2>Register Here</h2>
            <form action="registration.php" method="post">
           
                
                <div class="form-group">
                <label>email</label>
                <input type="email" name="email" placeholder="____@____.com" class="form-control" required>
                <small>Format: abc@gmail.com</small><br><br>
                </div>
                
                <div class="form-group">
                <label>address</label>
                <input type="text" name="address"  class="form-control" required>
                </div>
                
                <div class="form-group">
                <label>area of pond</label>
                <input type="int" name="area" class="form-control" required>
                <small>in hectare(number)</small><br><br>
                </div>
                
                <div class="form-group">
                <label>phone no</label>
                <input type="tel" name="phonenumber" placeholder="7712345678" pattern="[6-9]{1}[0-9]{9}" class="form-control" required>
                <small>Format: 7712345678</small><br><br>
                </div>
                
                <div class="form-group">
                <label>aadhaar no</label>
                <input type="int" name="aadhaar" placeholder="1234 4534 6781" pattern="[0-9]{4} [0-9]{4} [0-9]{4}"  class="form-control" required>
                <small>Format: 1234 4567 6789</small><br><br>
                </div>
                
                <div class="form-group">
                <label>username</label>
                <input type="text" name="user" class="form-control" required>
                </div>
                
                
                <div class="form-group">
                <label>password</label>
                <input type="password" name="password" class="form-control" required>
                </div>
                
                
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
</div>
</div> 
            </div>
</div>
</body>
</html>