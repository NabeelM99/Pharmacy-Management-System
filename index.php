<?php
session_start();
if (!isset($_SESSION['userId'])) 
  header('location: login_form.php?error=1');

  if ($_SESSION['userType']=='Customer')
  header('location: customer/customer_home.php');   //show pharmacist home page

elseif ($_SESSION['userType']=='Pharmacist')
header('location: pharmacist/pharmacist_home.php');   //show pharmacist home page

elseif ($_SESSION['userType']=='Admin')
header('location: admin/admin_home.php');   //show pharmacist home page

?>

<!--test line-->��������������������������������������������������������������������������������������������������������������������������������������
