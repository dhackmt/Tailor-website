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
    <link href="pro.css" rel="stylesheet" type="text/css">
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

    <div>
      <img src="pin1.jpg" width="100px" height="500px" />
      <img src="pin4.jpg" width="100px" height="500px" />
      <img src="pin3.jpg" width="100px" height="500px" />
      <h1>Welcome to Chandan Ladies Tailor!</h1>
      <h2>
        We cordily Invite you to have a look into our lusious collection of
        dress And we are more than happy to assist you into this!
      </h2>
      <div class="box">
        <div class="f">
          <h1>Facilities:</h1>
          <ul type="circle">
            <li>Trousers</li>
            <li>Formal outfits</li>
            <li>Suits</li>
            <li>Stylish gowns</li>
            <li>Handmade collection</li>
          </ul>
        </div>
        <div class="a">
          <h1>Address:</h1>
          <h2>
            Pimpri ,sai chowk Gurunank complex near real bags Pimpri pune 17
          </h2>
          <h1>Contact:</h1>
          <h2>9067987678</h2>
        </div>
      </div>
    </div>

    </html>
<?php
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
