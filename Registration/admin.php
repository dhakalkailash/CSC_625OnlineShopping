<?php
// include footer.php file
include ('../header.php');
?>

<?php

$con = mysqli_connect('localhost', 'root','', 'online_shopping','3307');

if (isset($_POST["insert_btn"]))
{
    $sql = "CALL insertUserData('".$_POST["first"]."', '".$_POST["last"]."','".$_POST["user"]."','".$_POST["phone"]."','".$_POST["password"]."')";
    if(mysqli_query($con, $sql))
    {
        echo '<script> alert ("User Data is successfully Inserted !!")</script>';
    }
}
if(isset($_GET["inserted"]))
{
    echo '<script> alert ("User Data is successfully Inserted !!")</script>';
}



// $con = mysqli_connect('localhost', 'root','', 'online_shopping','3307');

if (isset($_POST["insert_btn"]))
{
    $sql = "CALL insertInventoryData('".$_POST["product_id"]."', '".$_POST["item_brand"]."','".$_POST["item_name"]."','".$_POST["item_image"]."','".$_POST["time"]."')";
    if(mysqli_query($con, $sql))
    {
        header("location:admin.php?inserted=1");
    }
}
if(isset($_GET["inserted"]))
{
    echo '<script> alert ("Inventory successfully Inserted !!")</script>';
}

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
 <!-- -----------This is for the User table insertation ----------------- -->

         <!-- this is for the login  -->
            <div class="col-md-6 login-left">
               <h2 class="aqua-text" style="color:Blue";> Insert Users Using Stored Procedure Testing---- </h2>
                <form action="" method="POST">
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
                    <button type="submit" name="insert_btn" class="btn btn-primary"> Register </button>
                </form>    
            </div>         

 <!-- this is for the login  -->
            <div class="col-md-6 login-left">
               <h2 class="aqua-text" style="color:Blue";> Insert Inventory in Product Table </h2>
               <form action="" method="POST">
                   <div class="form-group">
                   <label class="lawngreen-text" style="color:black";> Product Id</label>
                        <input type="number" name="product_id" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label class="lawngreen-text" style="color:black";> Item Brand</label>
                        <input type="text" name="item_brand" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label class="lawngreen-text" style="color:black";> Item Name</label>
                        <input type="text" name="item_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label class="lawngreen-text" style="color:black";> Item Image (give proper Path)</label>
                        <input type="text" name="item_image" class="form-control" required>
                    </div>     
                    <div class="form-group">
                        <label class="lawngreen-text" style="color:black";> Item Registeration Date</label>
                        <input type="text" name="time" class="form-control" required>
                    </div>
                    <button type="submit" name="insert_btn" class="btn btn-primary" style="color:black";> Add Inventory </button>
                </form>     
            </div>
        </div>
      </div>       

    </div>


    <footer id="footer" class="bg-dark text-white py-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-12">
                <h4 class="font-rubik font-size-20">All in One</h4>
                <p class="font-size-14 font-rale text-white-50">All in One marketing is the component of digital marketing that utilizes internet and online based digital technologies such as desktop computers, mobile phones and other digital media and platforms to promote products and services.</p>
              </div>
              
              <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Account</h4>
                <div class="d-flex flex-column flex-wrap">
                  <a href="login.php" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Order History</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Wish List</a>
                  
                </div>
              </div>
            </div>
          </div>
        </footer>
        <div class="social-links text-center bg-dark text-white font-size-20 py-2">
          <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="https://github.com/dhakalkailash"><i class="fab fa-github"></i></a>
          <a href="https://www.youtube.com/channel/UC1AWMeR11HuqZ8kZhEF0wMw"><i class="fab fa-youtube"></i></a>
      </div>
    
        <div class="copyright text-center bg-dark text-white py-1">
          <p class="font-rale font-size-14">&copy; All Rights reserved Kailash Dhakal 2021 <a href="https://www.youtube.com/channel/UC1AWMeR11HuqZ8kZhEF0wMw" class="color-second">Nepal Tech Hub</a></p>
        </div>
    <!-- !start #footer -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Owl Carousel Js file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

    <!--  isotope plugin cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>

    <!-- Custom Javascript -->
    <script src="index.js"></script>

</html>
</body>



