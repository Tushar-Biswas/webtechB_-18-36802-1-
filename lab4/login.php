<?php include 'lab4.php';





if (isset($_POST['uname'])) {
	if ($_POST['uname']==$uname && $_POST['pass']==$pass) {

		header("location:dashborard.php");

	}
	else{
		$msg="username or password invalid";
		echo "<script>alert('uname or pass incorrect!')</script>";
	}

}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>

</head>
<body>

  <ul style="list-style-type:none;">
   <li>
   	<button><a href="home.php">Home</a></button>
   </li>

   <li>
   	<button><a href="login.php">Login </a></button>
   </li>


   <li>
   	<button><a href="reg.php">registration </a></button>
   </li>
 </ul>


  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  	<table >

  		<tr>
  			<th colspan="2"><h2>Login</h2></th>
  		</tr>
  		<?php if(isset($msg)){?>
  		    <tr>
  		      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
  		    </tr>
      	<?php } ?>
  		<tr>
  			<td>username</td>
  			<td><input type="text" name="uname"></td>
  		</tr>
  		<tr>
  			<td>password</td>
  			<td><input type="password" name="pass"></td>
  		</tr>
  		<tr>
  			<td align="right" colspan="2"><input type="submit" name="login" value="login"></td>
  		</tr>
  	</table>

  </form>


</body>
</html>
