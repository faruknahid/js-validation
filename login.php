 <?php
        $username = $password = "";
        $usernameErr = $passwordErr = "";
        $isValid = true;
        $successfulMessage = $errorMessage = "";
     
     if ($isValid) {
          $res=true;

      if($res) {
         session_start();
          $_SESSION['username'] =$username;
          $successfulMessage = "Sucessfully logged in.";
         header("");
         }
         else {
          $errorMessage = "login failed";
        }
       }
}

function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
}
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Login</title>
</head>
<body>
    

       


        

  <h1>Login</h1>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <fieldset>
      <legend>Login</legend>

         <label for="username">User Name:</label>
         <input type="text" name="username" id="username" >
         <span style="color: red;">  <?php echo  $usernameErr;?></span>
         <br><br>

         <label for="password">Password:</label>
         <input type="password" name="password" id="password">
         <span style="color: red;">  <?php echo  $passwordErr;?></span>
         <br><br>

         <input type="submit" name="submit" value="Login">
    </fieldset>
  </form>


    <script>
        function isValid() {
            var username = document.forms["login"]["username"].value;
            if(username === ""){
                document.getElementById('errorMsg').innerHTML = "Please fill up the form properly.";
                    return false;

            var password = document.forms["login"]["password"].value;
            if(password === ""){
                document.getElementById('errorMsg').innerHTML = "Please fill up the form properly.";
                    return false;        

            }


        }

  <br>
      <p style="color:green" > <?php echo  $successfulMessage;?></p>
      <p style="color: red" > <?php echo  $errorMessage;?>   </p>
  <br>
Not yet a member?<a href="file-io.php">Go to Register</a>
</body>
</html>



  