 <html>
    <head>
    <link href="index1.css" rel="stylesheet" type="text/css">
    </link>
    </head>
    <body>
    <nav class="navbar">
        <img src="icon.jpg" alt=" " class="icon"></img><h5 class="tailored-text">Tailored For You</h5>
        
        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="registration.php">Add shop</a></li>
        <li><a href="aboutus.html">About us</a></li>
        <li><a href="admin.html">Admin</a></li>
    </ul>
    <button class="button"><a href="s.php " target="_parent">log out</a></button>
    <button class="button"><a href="login.html">Change Password</a></button>
    </nav>


<div class="property">
<?php
$a = isset($_GET['t1']) ? $_GET['t1'] : null;

// Check if 'p1' is set in the query string and assign it to $d; otherwise, set it to a default value or handle it accordingly
$d = isset($_GET['p1']) ? $_GET['p1'] : null;
$con = mysqli_connect("localhost", "root", "", "backend");
$delete="DELETE FROM `shop` where id='$d' ";
$deletequery=mysqli_query($con,$delete);
$q = "SELECT * FROM `add` WHERE id='$a'";
$rs = mysqli_query($con, $q);
$i='';
while ($row = mysqli_fetch_array($rs)) {
    $i=$row['image'];
    $d=$row['description'];
    $c=$row['contact'];
    $n=$row['name'];
    $discount=$row['discount'];
    $r="INSERT INTO `shop`(image,name,contact,description,discount) VALUES('$i','$n','$c','$d',$discount    )";
    mysqli_query($con,$r); 
}   
$m="SELECT * from `shop`";
$s=mysqli_query($con,$m);
while ($y = mysqli_fetch_array($s)) {
   
    echo '<div class="card">';
    echo '<div class="imgbox">';
    echo '<a href="property.php?id='.$y['id'].'"><img src="uploads/' . $y['image'] . '" alt="' . $y['name'] . 'width="700px" height="250px" " ></a>';
    echo'<div class="shop">';  
    echo '<h2>'.$y['name'].'</h2> ';
    echo'</div>';
    echo '</div>';
    echo '<div class="content">';
    echo '<h2>Speciality:'.$y['description'].'</h2>';
    echo '<h2>Contact:'.$y['contact'].'</h2>';
    echo '</div>';
    echo '</div>';

} 

mysqli_close($con);
?>
</div>
</body>
</html> 
