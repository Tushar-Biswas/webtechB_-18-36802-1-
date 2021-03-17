<?php
    $usernameError=$passwordError="";
    if(isset($_GET['message']))
    {
        if($_GET['message'] == "both_empty"){
            $usernameError="Username Empty!";
            $passwordError="Password Empty!";
        }
        else if($_GET['message'] == "empty_username"){
            $usernameError="Username Empty!";
        }
        else if($_GET['message'] == "empty_password"){
            $passwordError="Password Empty!";
        }
        else if($_GET['message'] == "wrong_password"){
            $passwordError="Password Empty!";
        }
        else if($_GET['message'] == "wrong_password"){
            $passwordError="Password Empty!";
        }
        else if($_GET['message'] == "invalid_user"){
            $usernameError="Invalid User!";
        }

    }
?>
<!DOCTYPE html>

<head>

    <title>Login</title>
</head>
<body>
    <table >


    <tr >
        <td >

                <form action="loginValidation.php" method="POST">

                        <legend>LOGIN</legend>
                        <table >
                        <tr>
                            <td>User Name :</td>
                            <td><input type="text" name="username"> <span style="color:red;"><?=$usernameError;?></span></td>
                        </tr>
                        <tr>
                            <td>Password :</td>
                            <td><input type="password" name="password"> <span style="color:red;"><?=$passwordError;?></span></td>
                        </tr>
                        <tr><td colspan="2"><hr></td></tr>
                        <tr>
                            <td><input type="checkbox" name="rememberMe"></td>
                            <td>Remember Me</td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="submit"></td>

                        </tr>
                        </table>
                    
                </form>


        </td>

    </tr>
    </table>
</body>
</html>
