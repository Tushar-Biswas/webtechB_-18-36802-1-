<?php
	$error=$nameError=$emailError=$usernameError=$passwordError=$conPasswordError=$genderError=$dobError=$sucess="";
	if(isset($_GET['message'])){
		if($_GET['message'] == 'sucess'){
			$sucess='Registration Sucessfull';
		}
		else if($_GET['message'] == 'all_empty'){
			$nameError='Name empty!';
			$emailError='Email empty!';
			$usernameError='User Name empty!';
			$passwordError='Password empty!';
			$conPasswordError='Confirm Password empty!';
			$genderError='Gender empty!';
			$dobError='Date of Birth empty!';
		}
		else if($_GET['message'] == 'empty_name'){
			$nameError='Name empty!';
		}
		else if($_GET['message'] == 'empty_email'){
			$emailError='Email empty!';
		}
		else if($_GET['message'] == 'empty_username'){
			$usernameError='User Name empty!';
		}
		else if($_GET['message'] == 'empty_password'){
			$passwordError='Password empty!';
		}
		else if($_GET['message'] == 'empty_conpassword'){
			$conPasswordError='Confirm Password empty!';
		}
		else if($_GET['message'] == 'empty_gender'){
			$genderError='Gender empty!';
		}
		else if($_GET['message'] == 'empty_dob'){
			$dobError='Date of Birth empty!';
		}
		else if($_GET['message'] == 'password_missmatch'){
			$conPasswordError='Confirm Password does not match!';
		}
		else if($_GET['message'] == 'not_exists'){
			$error='File Not Found!';
		}
	}
?>
<!DOCTYPE html>

<head>

    <title>Registration</title>
</head>
<body>
<table >

    <tr >
        <td colspan="2" >

        <form action="registartionValidation.php" method="POST">
		
			<legend>Registration</legend>
			<table >

				<tr>
					<td>Name</td>
					<td>: <input type="text" name="name"> <span style="color:red"><?=$nameError?></span></td>
				</tr>
				<tr><td colspan="2"><hr></td></tr>

				<tr>
					<td>Email </td>
					<td>: <input type="email" name="email">
						<abbr title="sampl@ample.com"><b>i</b> </abbr> <span style="color:red"><?=$emailError?></span>
					</td>
				</tr>

                <tr><td colspan="2"><hr></td></tr>

				<tr>
					<td>User Name</td>
					<td>: <input type="text" name="username"> <span style="color:red"><?=$usernameError?></span></td>
				</tr>

                <tr><td colspan="2"><hr></td></tr>
				<tr>
					<td>New Password</td>
					<td>: <input type="password" name="password"> <span style="color:red"><?=$passwordError?></span></td>
				</tr>

                <tr><td colspan="2"><hr></td></tr>

                <tr>
					<td>Confirm Password</td>
					<td>: <input type="password" name="cpassword"> <span style="color:red"><?=$conPasswordError?></span></td>
				</tr>
                <tr><td colspan="2"><hr></td></tr>

			</table>

				<fieldset>
					<legend>Gender</legend>
					<input type="radio" name="gender" value="Male">Male
					<input type="radio" name="gender" value="Female">Female
					<input type="radio" name="gender" value="Others">Others
					<span style="color:red"><?=$genderError?></span>
				</fieldset>
				<hr>

				<fieldset>
					<legend>Date of Birth</legend>
					<input type="date"  name="dob"> <span style="color:red"><?=$dobError?></span>
				</fieldset>
				<hr>


                <input type="submit" name="submit">

                <input type="Reset" name="reset"> <span style="color:green"><?=$sucess;?></span><span style="color:red"><?=$error;?></span>



	</form>
        </td>
    </tr>
    </table>
</body>
</html>
