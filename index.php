<?php require('header.php') ;
session_start();
if (!isset($_SESSION['userId']))
  header('location: login_form.php?error=1');

  if ($_SESSION['userType']=='Customer'){
  //show customer home page (welcome page)
?>
<html>
<head>
<title>
AUCTIONS.COM
</title>
<style>
h1 {text-align: center;}
h2 {text-align: center;}
          body {
  background-image: url('https://alicewalkersgarden.com/wp-content/uploads/Broadway-Grass2.jpg');
}
</style>
</head>
<?php
//echo "<script>alert('".$_SESSION['userType']."')</script>";
 ?>
<body>
<br><br><br><br><br>
<h1> Hii!</h1>

<h1> WELCOME TO PHARMACY MANAGEMENT SYSTEM </h1>


<h1> BY: SHAIKH TAHMIDUR RAHMAN</h1>
<h1>  Ahmed Almadani </h1>
<h1>  Khalid Almajthoob </h1>
<h1>  Nabeel Mohammed</h1>
</body>
</html>
<?php
}//end of customer view

elseif ($_SESSION['userType']=='Pharmacist')
header('location: pharmacist_home.php');   //show pharmacist home page

elseif ($_SESSION['userType']=='Admin')
header('location: admin/admin_home.php');   //show pharmacist home page

?>

<!--test line-->                                                                                                                                      
