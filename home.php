<?php
ob_start();
// include header.php file
include ('header.php');
?>

<?php
// include the banner section which is inside the temaplate folder

include('Template/_banner-area.php');

// Inlcude the Top-sale section 
include('Template/_top-sale.php');

// Inlcude the special-price section 
include('Template/_special-price.php');


// Inlcude the _banner-add section 
include('Template/_banner-add.php');


// Inlcude the _new-phones section 
include('Template/_new-phones.php');

?>
 
 <?php
 // include footer file here
 include("footer.php");
 ?>