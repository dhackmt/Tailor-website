<html>
  <head>
    <link href="demo.css" rel="stylesheet" type="text/css" />
    <script>
      function display() {
        var n = f1.t1.value;
        var f = f1.f.value;
        var s = f1.s.value;
        var ob = new XMLHttpRequest();
        ob.open("GET", "feed.php?t1=" + n + "&f=" + f + "&s=" + s, true);
        ob.send();
        ob.onreadystatechange = function () {
          if (ob.status == 200 && ob.readyState == 4) {
            document.getElementById("x").innerHTML = ob.responseText;
          }
        };
      }
    </script>

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
  
  <button class="button"><a href="signup.php " target="_parent">log out</a></button>
  </nav>

 </body>
</html>


<?php
$id=$_GET['id'];
$con=mysqli_connect("localhost","root","","backend");
$q="SELECT * FROM `add` WHERE id='$id'";
$rs=mysqli_query($con,$q);
echo'<div>';
while($row=mysqli_fetch_array($rs))
{
echo'<div class="card">';
echo '<div class="imgbox">';
echo '<img src="uploads/' . $row['image1'] . '" alt="' . $row['name'] . '">';
echo '<img src="uploads/' . $row['image2'] . '" alt="' . $row['name'] . '">';
echo '<img src="uploads/' . $row['image3'] . '" alt="' . $row['name'] . '">';
echo"<h1>Welcome to  ".$row['name']."!</h1>
<h2>
  We cordily Invite you to have a look into our lusious collection of
  dress And we are more than happy to assist you into this!
</h2>";
echo'<div class="box">';
echo'<div class="f">';
echo'<h1> FACILITIES </h1>';
echo'<ul type="circle">
  <li>'.$row['f1'].'</li>
  <li>'.$row['f2'].'</li>
  <li>'.$row['f3'].'</li>
  <li>'.$row['f4'].'</li>
  <li>'.$row['f5'].'</li>
</ul>';
$idd=$row['id'];
echo'</div>';
echo'</div>';
echo'</div>';
echo'</div>';
echo'
<div class="c">
          <form name="f1" method="get">
          <h2>Get '.$row['discount'].'%Discount Now!</h2>
            <h1>Coupon</h1>
            Enter username :
            <input type="text" name="t1" /><br /><br />
            Enter password :
            <input type="password" name="f" /><br /><br />
            Enter Shop name:
            <input type="text" name="s" /><br /><br />
            <input type="button" value="submit" onclick="display()" />
            <span id="x" />
          </form>
          <br />
        </div>';
        echo'<div><br><br><br>';
        // echo'<div class="section">';
       echo' <div class="section">
        <div class="b-content">
        <h2>Address:</h2>
        <h3>'.$row['location'].'</h3>
        <h2>Contact:</h2>
        <h3>'.$row['contact'].'</h3>
        <div class="b"></div>
        <h1>Why choose us?</h1>
          <p>
            Expert Craftsmanship: Skilled artisans ensure top-quality tailoring. <br>
            Personalized Service: Tailored to your unique preferences and needs. <br>
            Attention to Detail: Every garment is meticulously crafted. <br>
            Prompt and Reliable: Timely service without compromising quality. <br>
            Customer Satisfaction Guaranteed: We are committed to your happiness. <br>
            Competitive Pricing: Affordable rates for exceptional work. <br>
            Positive Reputation: Trusted by the local community for excellence.
          </p>
        </div>
      </div>
      </div>';
}
        mysqli_close($con);
?>
