<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link href="s.css" rel="stylesheet" type="text/css"></link>
</head>
<body>
  <h1>Tailored For You</h1>
  <div class="m">
<div class="main">  
<input type="checkbox" id="chk" aria-hidden="true">
  <div class="signup">
  <form id="myForm" method="post" name="f1" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  
  <label for="chk" aria-hidden="true">Already have an account? Click to login
    <br>
  </label>
  <h2>Set username:</h2> 
    <input type="text" placeholder="username"  name="u1" required="">
    <h2>Set password:</h2>

    <input type="password" name="p1" placeholder="password" required="">
    <button type="submit" name="s" onClick="validateForm()" >Sign up</button>
  </form>
</div>
<script>
    function validateForm() {
        var username = f1.u1.value;
        var password=f1.p1.value;
        if(username=="")
        {
          alert("Username required");
        }
        else if (username.length < 8) {
          alert("Username must be atleast 8 characters long!")
          window.location.href = 's.php';
        }
        if(password=="")
        {
          alert("Password required");
        }

       else if (!/^[A-Z]/.test(password)) {
        alert("Password must start with a capital letter");
        window.location.href = 's.php';
      
    } 
       }
</script>
<div class="login">
  <form id="myForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
    <label for="chk" aria-hidden="true">Go to Sign up</label>
    <h2>Enter username:</h2>
    <input type="text" placeholder="username" required="" name="u1">
    <span id="usernameError" class="error"></span>
    <h2>Enter password:</h2>
    <input type="password" name="p1" placeholder="password" required="">
    <span id="passwordError" class="error"></span>
    <button type="submit" name="p">login</button>
  </form>
</div>
</div>
</div>
<?php
if(isset($_POST['s'])) {
    $con = mysqli_connect("localhost", "root", "", "backend");
    
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    
    $username=$_POST['u1'];
    $password=$_POST['p1'];
  
    if(strlen($username) >= 8 && preg_match('/^[A-Z]/', $password)){
      $q = "INSERT INTO login (username, password) VALUES ('$username', '$password')";
      if (mysqli_query($con, $q)) {
        echo "<script>window.location.href = 'index.php';</script>";
    } else {
        echo "Error: " . $q . "<br>" . mysqli_error($con);
    }
  
  }
    
    
  
    mysqli_close($con);
}
?>
</body>
</html>
</body>
</html>

<?php
if(isset($_POST['p']))
{
$con=mysqli_connect("localhost","root","","backend");
    $password=$_POST['p1'];
    $username=$_POST['u1'];
    $flag=0;
    $q="SELECT * FROM login WHERE username='$username'";
    $rs=mysqli_query($con,$q);
    if(mysqli_num_rows($rs)>0)
    {
        while($row=mysqli_fetch_array($rs))
        {
            $result=$row['password'];
            $user=$row['username'];
            if($password==$result && $username==$user)
            {
               $flag=1;
                echo"<script>window.location.href='index.php';
               </script>";
            }
        }
    }
    if(flag==0)
    {
        echo'<script>alert("Incorrect Details");</script>
        <script>window.location.href="s.php";</script>';
    }
    mysqli_close($con);
}
?>