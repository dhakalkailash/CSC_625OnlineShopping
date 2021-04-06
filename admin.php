<?php
// include header.php file
include ('header.php');
?>
<!DOCTYPE html>
<head>
    <title>Insert the Inventory</title>
    <link rel = "stylesheet" type="text/css" href="style.css">
    <link rel = "stylesheet" type="text/css"
     href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
       <div class="login-box">
         <div class="row">           

 <!-- this is for the login  -->
            <div class="col-md-6 login-right">
               <h2 class="aqua-text" style="color:aqua";> Insert Inventory in Product Table </h2>
               <form action="registration.php" method="POST">
                   <div class="form-group">
                   <label class="lawngreen-text" style="color:lawngreen";> Product Id</label>
                        <input type="number" name="product_id" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label class="lawngreen-text" style="color:lawngreen";> Item Brand</label>
                        <input type="text" name="item_brand" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label class="lawngreen-text" style="color:lawngreen";> Item Name</label>
                        <input type="text" name="item_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label class="lawngreen-text" style="color:lawngreen";> Item Image (give proper Path)</label>
                        <input type="text" name="item_image" class="form-control" required>
                    </div>     
                    <div class="form-group">
                        <label class="lawngreen-text" style="color:lawngreen";> Item Registeration Date</label>
                        <input type="text" name="time" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary"> Add Inventory </button>
                </form>     
            </div>
        </div>
      </div>       

    </div>


</body>
<?php
// include footer.php file
include ('footer.php');
?>