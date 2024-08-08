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
          <li><a href="section.html">Access</a></li>
          <li><a href="admin.html">Admin</a></li>
      </ul>
      
      <button class="button"><a href="signup.php " target="_parent">log out</a></button>
      </nav>
      
        <script language=javascript>
            function display()
            {
                
    var id = f1.t1.value;
  
    window.location.href = 'index.php?t1=' + id;               
            }
            </script>
</head>
<form name=f1>
    Enter Id at which property to be inserted <input type=text name=t1>

        </form>
        <button onclick="display()">ADD</button>

</html>

<?php
$con=mysqli_connect("localhost","root","","backend");
$q="SELECT * FROM `add`";
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


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Management</title>

    <link href="nav.css" rel="stylesheet" type="text/css">
    <style>
       
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        form {
            /* margin: 50px; */
            margin-left:30%;
        }
        form input[type="text"] {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ced4da;
            box-sizing: border-box;
            width: 300px;
        }
        button {
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        table {
            border-collapse: collapse;
            width: 90%;
            margin: 50px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #343a40;
            color: white;
        }
        img {
            max-width: 100px;
            max-height: 100px;
        }
        h1{
            font-size:40px;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <img src="icon.jpg" alt=" " class="icon">
        <h5 class="tailored-text">Tailored For You</h5>
        
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="registration.php">Add shop</a></li>
            <li><a href="aboutus.html">About us</a></li>
            <li><a href="admin.html">Admin</a></li>
        </ul>

        <button class="button"><a href="signup.php" target="_parent">Log Out</a></button>
    </nav>

    <form name="f1">
        <label for="t1"><h1>Enter ID at which property to be inserted:</h1></label>
        <input type="text" name="t1">
        <button onclick="display()">ADD</button>
    </form>
  
    <br>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Location</th>
                <th>Description</th>
                <th>Contact</th>
                <th>Discount</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            <!-- <?php
            $con=mysqli_connect("localhost","root","","backend");
            $q="SELECT * FROM `add`";
            $rs=mysqli_query($con,$q);
            while($row=mysqli_fetch_array($rs)) {
                echo "<tr>";
                echo "<td>".$row[0]."</td>";
                echo "<td>".$row[1]."</td>";
                echo "<td>".$row[2]."</td>";
                echo "<td>".$row[3]."</td>";
                echo "<td>".$row[4]."</td>";
                echo "<td>".$row['discount']."</td>";
                echo '<td><img src="uploads/' . $row['image'] . '" alt="' . $row['name'] . '"></td>';
                echo "</tr>";
            }
            mysqli_close($con);
            ?> -->
        </tbody>
    </table>

    <script>
        function display() {
            var id = f1.t1.value;
            window.location.href = 'index.php?t1=' + id;               
        }
    </script>
</body>
</html> -->
