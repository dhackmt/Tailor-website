<html>
  <head>
    <link href="reg.css" rel="stylesheet" type="text/css" >
        <link href="nav.css" rel="stylesheet" type="text/css">

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
      </nav>
      
  </head>
  <body>
  <form
    method="post"
    action="<?php echo $_SERVER['PHP_SELF'];?>"
    enctype="multipart/form-data"
  >
    <div class=f>
      Enter Shop name:<br />
      <input type="text" name="name" class="input" /><br />
      Enter Shop location:<br />
      <textarea name="location" class="input"></textarea><br />
      Enter Speciality:<br />
      <input type="text" name="description" class="input"><br />
      Enter contact:<br />
      <input type="text" name="contact" class="input" /><br />
      Enter facilites:<br />
      <input type=text name=f1><br />
      <input type=text name=f2><br />
      <input type=text name=f3><br />
      <input type=text name=f4><br />
      <input type=text name=f5><br />
      <input type=text name=f6><br />
      Enter Discount Percentage:
      <input type="text" name="discount" class="input" /><br />
      Upload shop image:
      <input type="file" class="input" name="image" accept=".jpg,.jpeg,.png" />
      Upload shop image:
      <input type="file" class="input" name="image1" accept=".jpg,.jpeg,.png" />
      Upload shop image:
      <input type="file" class="input" name="image2" accept=".jpg,.jpeg,.png" />
      Upload shop image:
      <input type="file" class="input" name="image3" accept=".jpg,.jpeg,.png" />
      <br />
     <br />
      <input type="submit" name="s" class="button" /><br />
    </div>
  </form>
</html>


<?php
if(isset($_POST['s']))
{
  $con=mysqli_connect("localhost","root","","backend") or die("Invalid");
  $name=$_POST['name'];
  $location=$_POST['location'];
  $description=$_POST['description'];
  $contact=$_POST['contact'];
  $f1=$_POST['f1'];  
  $f2=$_POST['f2'];
  $f3=$_POST['f3'];  
  $f4=$_POST['f4']; 
  $f5=$_POST['f5'];  
  $f6=$_POST['f6'];
  $d=$_POST['discount'];
  $c = rand(0,1000);

  // Process images
  $newImageName = $_FILES["image"]["name"];
  $newImageName1 = $_FILES["image1"]["name"];
  $newImageName2 = $_FILES["image2"]["name"];
  $newImageName3 = $_FILES["image3"]["name"];

  // Move uploaded files to desired location
  move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $newImageName);
  move_uploaded_file($_FILES["image1"]["tmp_name"], "uploads/" . $newImageName1);
  move_uploaded_file($_FILES["image2"]["tmp_name"], "uploads/" . $newImageName2);
  move_uploaded_file($_FILES["image3"]["tmp_name"], "uploads/" . $newImageName3);

  // SQL query to insert data into database
  $q="INSERT INTO `add` (name, location, description, contact, f1, f2, f3, f4, f5, f6, coupon, discount,image, image1,image2,image3) 
      VALUES ('$name','$location','$description','$contact','$f1','$f2','$f3','$f4','$f5','$f6','$c','$d','$newImageName','$newImageName1','$newImageName2','$newImageName3')";

  $rs=mysqli_query($con,$q);
  if(!$rs)
  {
    echo "<script> alert('Error: " . mysqli_error($con) . "'); </script>";
  }
  else
  {
    echo "<script> alert('Successfully added'); document.location.href='index.php'; </script>";
    exit();
  }
}
?>