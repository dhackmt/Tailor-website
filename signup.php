<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Validation</title>
<link href="signup1.css" rel="stylesheet" type="text/css"></link>
</head>
<body>
<div class="container">
  <h2>SignUP-</h2>
  <h1> TailoredForYou</h1>
  <form id="myForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validateForm()">
    <label for="username">Create Username:</label><br>
    <input type="text" id="username" name="u1"><br>
    <span id="usernameError" class="error"></span><br>
    
    <label for="password">Set Password:</label><br>
    <input type="password" id="password" name="p1"><br>
    <span id="passwordError" class="error"></span><br>
    
    <div class="link">Already have an account? Sign in <a href="login.html">here</a></div>
    
    <button type="submit" name="s">Submit</button>
  </form>
</div>

<script>
function validateForm() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  var usernameError = document.getElementById("usernameError");
  var passwordError = document.getElementById("passwordError");
  
  var isValid = true;

  if (username === "") {
    usernameError.textContent = "Username is required";
    isValid = false;
  } else if (username.length <= 8) {
    usernameError.textContent = "Username must be atleast 8 characters long";
    isValid = false;
  } else {
    usernameError.textContent = "";
  }

  if (password === "") {
    passwordError.textContent = "Password is required";
    isValid = false;
  } else {
    passwordError.textContent = "";
  }

  return isValid;
}
</script>
<?php
if(isset($_POST['s'])) {
    $con = mysqli_connect("localhost", "root", "", "backend");
    
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    
    $username=$_POST['u1'];
    $password=$_POST['p1'];
    
    $q = "INSERT INTO login (username, password) VALUES ('$username', '$password')";
    
    if (mysqli_query($con, $q)) {
        echo "<script>window.location.href = 'index.php';</script>";
    } else {
        echo "Error: " . $q . "<br>" . mysqli_error($con);
    }
    
  
    mysqli_close($con);
}
?>
</body>
</html>


