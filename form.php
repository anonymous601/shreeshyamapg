<!DOCTYPE HTML>
<html>
<head>
  <title>Shree Shyama Chhatravas </title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" >
  <link rel = "stylesheet" href="style.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <script src="nav-icon.js"></script>
</head>


<body>

<h1 class= 'head'>Shree Shyama Chatravas </h1>
</div>
<nav class="clearfix">
  <ul class="clearfix">
    <li><a href="index.html">About Us</a></li>
    <li><a href="facilities.html">Facilities</a></li>
    <li><a href="gallery.html">Gallery</a></li>
    <li><a href="contactus.html">Contact Us</a></li>
    <li><a href="booknow.html">Book Now!</a></li>  
  </ul>
  <a href="#" id="pull">Menu</a>
</nav>

<?php 
$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
echo 'You will be contacted soon, ';
echo $name;
echo '<br> Thank You !!';
$db = mysqli_connect('xxx','xxx','xxx','xxx') or die("Error connecting server.");
$query="INSERT INTO `SSC` (`SNo`, `Name`, `Contact`, `Email`) VALUES (NULL, '".$name."','".$contact."','".$email."');";
$result = mysqli_query($db, $query) or die('Error querying database.');
mysqli_close($db);
?>
</body>
</html>
