<!-- 
<?php
$con=mysqli_connect("localhost","root","","backend");
$q="SELECT * FROM `shop`";
$rs=mysqli_query($con,$q);
echo"<table border=1><tr><th>ID</th><th>Image</th><th>Name</th><th>Contact</th><th>Description</th> </tr>";
while($row=mysqli_fetch_array($rs))
{
    echo"<tr><td>".$row[0];
    echo '<td><img src="uploads/' . $row['image'] . '" alt="' . $row['name'] . '" width="100px" height="100px"></td>';
    echo"</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td></tr>";
}
echo"</table>";
mysqli_close($con);

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Table</title>
    <style>
        /* CSS for table styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            border: 1px solid #ddd;
            background-color: white;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #343a40;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        img {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
</head>
<body>
<link href="nav.css" rel="stylesheet" type="text/css" />
<nav class="navbar">
        <img src="icon.jpg" alt=" " class="icon">
        <h5 class="tailored-text">Tailored For You</h5>
        
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="registration.php">Add shop</a></li>
            <li><a href="section.html">Access</a></li>
            <li><a href="admin.html">Admin</a></li>
        </ul>

        <button class="button"><a href="signup.php" target="_parent">Log Out</a></button>
    </nav>

<?php
// PHP code to fetch data from the database and display it in a table
$con=mysqli_connect("localhost","root","","backend");
$q="SELECT * FROM `shop`";
$rs=mysqli_query($con,$q);
echo "<table border='1'>
<tr>
<th>ID</th>
<th>Image</th>
<th>Name</th>
<th>Contact</th>
<th>Description</th>

<th>Discount</th>
</tr>";

while($row=mysqli_fetch_array($rs))
{
    echo "<tr>";
    echo "<td>".$row[0]."</td>";
    echo '<td><img src="uploads/' . $row['image'] . '" alt="' . $row['name'] . '"></td>';
    echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "<td>".$row[4]."</td>";
    echo "<td>".$row['discount']."</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>

</body>
</html>
