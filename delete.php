<html>
    <head>
        <link href="nav.css" rel="stylesheet" type="text/css">
        <link href="ad.css" rel="stylesheet" type="text/css">
      </link>
      <body>
      <nav class="navbar">
          <img src="icon.jpg" alt=" " class="icon"></img><h5 class="tailored-text">Tailored For You</h5>
          
          <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="registration.php">Add shop</a></li>
          <li><a href="aboutus.html">About us</a></li>
          <li><a href="admin.html">Admin</a></li>
      </ul>
      
      <button class="button"><a href="signup.php " target="_parent">log out</a></button>
      </nav>
      
        <script language=javascript>
            function display()
            {
                
    var id = f1.p1.value;
  
    window.location.href = 'index.php?p1=' + id;               
            }
            </script>
</head>
<form name=f1>
    Enter Id at which property to be deleted <input type=text name=p1>

        </form>
        <button onclick="display()">Delete</button>

</html>

<?php
$con=mysqli_connect("localhost","root","","backend");
$q="SELECT * FROM `shop`";
$rs=mysqli_query($con,$q);
echo"
<br><table border=1><tr><th>ID</th><th>Name</th><th>Location</th><th>Description</th><th>Contact</th><th>discount</th><th>Image</th></tr>";
while($row=mysqli_fetch_array($rs))
{
    echo"<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row['discount']."</td>";
    echo '<td><img src="uploads/' . $row['image'] . '" alt="' . $row['name'] . '" width="100px" height="100px"></td>';
    
}
echo"</table>";
mysqli_close($con);

?>


