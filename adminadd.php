<?php
if(isset($_POST['s'])) {
    $con = mysqli_connect("localhost", "root", "", "backend");
    
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    
    $username=$_POST['u1'];
    $password=$_POST['p1'];
    
    $q = "INSERT INTO `admin` (name, password) VALUES ('$username', '$password')";
    
    if (mysqli_query($con, $q)) {
        echo "<script>window.location.href = 'section.html';</script>";
    } else {
        echo "Error: " . $q . "<br>" . mysqli_error($con);
    }
    
  
    mysqli_close($con);
}
?>
</body>
</html>


