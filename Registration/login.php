

<!DOCTYPE html>
<head>
    <title>User Login and Registeration</title>
    <link rel = "stylesheet" type="text/css" href="style.css">
    <link rel = "stylesheet" type="text/css"
     href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
       <div class="login-box">
         <div class="row">
           <div class="col-md-6 login-left">
               <h2 class="aliceblue-text" style="color:aliceblue";> Login Here </h2>
               <form action="authentication.php" method="POST">
                   <div class="form-group">
                        <label class="lawngreen-text" style="color:lawngreen";> Username</label>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="lawngreen-text" style="color:lawngreen";> Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary"> Login </button>
                </form>     
            </div>

 <!-- this is for the login  -->
            <div class="col-md-6 login-right">
               <h2 class="aqua-text" style="color:aqua";> Register Here </h2>
               <form action="registration.php" method="POST">
                   <div class="form-group">
                   <label class="lawngreen-text" style="color:lawngreen";> First Name</label>
                        <input type="text" name="first" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label class="lawngreen-text" style="color:lawngreen";> Last Name</label>
                        <input type="text" name="last" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label class="lawngreen-text" style="color:lawngreen";> User Name</label>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label class="lawngreen-text" style="color:lawngreen";> Phone Number</label>
                        <input type="text" name="phone" class="form-control" required>
                    </div>             
                   
                    <div class="form-group">
                        <label class="lawngreen-text" style="color:lawngreen";> Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary"> Register </button>
                </form>     
            </div>
        </div>
      </div>       

    </div>


</body>
<?php
// include footer.php file
include ('../footer.php');
?>