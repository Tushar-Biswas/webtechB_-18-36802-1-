<?php


$name = $email = $birthday  =  "";
$name_err = $email_err = $birthday_err   = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){

     if(empty(trim($_POST["name"]))){
        $name_err = "Please enter a name.";
}
else {
    $name = trim($_POST["name"]);
  }
if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";
}
else {
    $email = trim($_POST["email"]);
}
if(empty(trim($_POST["birthday"]))){
        $birthday_err = "Please enter a birthday.";
}
else {
    $birthday = trim($_POST["birthday"]);
}

}


?>
<!DOCTYPE HTML>
<html lang = "en">
  <head>
    <title>My Page</title>
    <meta charset = "UTF-8" />
  </head>
  <body>
    <h1>Lab Task 2</h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
 <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
      <fieldset>
        <legend>NAME</legend>
        <p>
         <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
         <span class="help-block"><?php echo $name_err; ?></span>
        </p>
        <hr>
        <input type="submit" class="btn btn-primary" value="Submit">
      </fieldset>
</div>
</form>
<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<div>
     <fieldset>
        <legend>EMAIL</legend>
        <p>
          <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
        </p>
        <hr>
        <input type="submit" class="btn btn-primary" value="Submit">
      </fieldset>

</div>
</form>
<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<div class="form-group <?php echo (!empty($birthday_err)) ? 'has-error' : ''; ?>">

<fieldset>
        <legend>DATE OF BIRTH</legend>
        <p>
          <input type="date" id="birthday" name="birthday" class="form-control" value="<?php echo $birthday; ?>">
          <span class="help-block"><?php echo $birthday_err; ?></span>
        </p>
        <hr>
        <input type="submit" class="btn btn-primary" value="Submit">
</fieldset>

</div>
</form>

    
  </body>
</html>