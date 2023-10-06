<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" href="../Css/style.css">
</head>
<body>
     <ul class="topnav">
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="right"><a href="logout.php">Logout</a></li>
     </ul>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>