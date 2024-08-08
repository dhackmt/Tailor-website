<html>
    <head>
    <script>
        function display()
        {
            var n=f1.t1.value;
            var f=f1.f.value;

            var ob=new XMLHttpRequest();
            ob.open("GET","feed.php?t1="+n+"&f="+f,true);
            ob.send();
            ob.onreadystatechange=function()
            {
                if(ob.status==200 && ob.readyState==4)
                {
                    document.getElementById('x').innerHTML=ob.responseText;
                }
            }
        

        }
        </script>
    <link href="p.css" rel="stylesheet" type="text/css">
    <link href="nav.css" rel="stylesheet" type="text/css">
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

    </head>
</html>
<?php
$id=$_GET['id'];
$con=mysqli_connect("localhost","root","","backend");
$q="SELECT * FROM `add` WHERE id='$id'";
$rs=mysqli_query($con,$q);
echo'<div class="property">';
while($row=mysqli_fetch_array($rs))
{
    echo'<div>';
    // echo '<a href="index.php" class="b">HOME</a>';
    echo'</div>';
echo'<div class="card">';
echo '<div class="imgbox">';  
echo '<img src="uploads/' . $row['image1'] . '" alt="' . $row['name'] . '">';
echo '<img src="uploads/' . $row['image2'] . '" alt="' . $row['name'] . '">';
echo '<img src="uploads/' . $row['image3'] . '" alt="' . $row['name'] . '">';

echo'</div>';
echo'<div class="text" >';
echo'<div class="t"> FACILITIES </div>';

echo'<div class="f">';
echo $row['f1'];
echo '<br><br>'.$row['f2'];
echo '<br><br>'.$row['f3'];
echo '<br><br>'.$row['f4'];
echo '<br><br>'.$row['f5'];
echo'</div>';

echo'<div>';
echo'<h2>Address:</h2>';
echo '<h3>'.$row['location'].'</h3>';
echo'<h2>Contact:</h2>';
echo '<h3>'. $row['contact'].'</h3>';
echo'</div>';
}
echo'</div>';
echo'</div>';

echo'<div class="box">
<div>
<form name=f1 method=get>
<h1>Coupon</h1>
Enter username:
<input type="text" name=t1><br><br>
Enter password:
<input type="text" name=f><br><br>
<input type=button value="submit" onclick="display()">
</form><br>
</div>
<span id="x" />
</div>';
mysqli_close($con);
?>
