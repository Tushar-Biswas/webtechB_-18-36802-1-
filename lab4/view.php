<?php include 'lab4.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>

</head>
<body>
<?php include 'sidebar.php';


   ?>

<h2>Profile</h2>

<form action="profile.php" method="post">


	Name: <?php echo $uname;  ?><br>
	Date of Birth: <?php echo $dob;  ?><br>
	Email: <?php echo $email;  ?><br>

	Gender: <?php echo $gender;  ?><br>



</form>


</body>
</html>
