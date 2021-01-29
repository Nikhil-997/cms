
<?php include "/xampp/htdocs/demophp/cms/cms/include/db.php"; ?>
<?php include "/xampp/htdocs/demophp/cms/cms/admin/functions.php"; ?>
<?php ob_start(); ?>
<?php session_start(); ?>


<?php
if(!isset($_SESSION['user_role']))
{
   
    
        header("Location: ../index.php");   
}


?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  
    <body>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript" src="https://www.google.com/jsapi"></script>

    <script type="text/javascript" src="js/jquery.js" ></script>
    <script src = "js/scripts.js"></script>



  
  

    

    </body>
    </head>
</html>




