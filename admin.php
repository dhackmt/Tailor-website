
<?php
if(isset($_POST['s']))
{
$con=mysqli_connect("localhost","root","","backend");
    $password=$_POST['p1'];
    $username=$_POST['u1'];
    $flag=0;
    $q="SELECT * FROM admin WHERE name='$username'";
    $rs=mysqli_query($con,$q);
    if(mysqli_num_rows($rs)>0)
    {
        while($row=mysqli_fetch_array($rs))
        {
            $result=$row['password'];
            $user=$row['name'];
            if($password==$result && $username==$user)
            {
               $flag=1;
                echo"<script>window.location.href='section.html';
               </script>";
            }
        }
    }
    if($flag==0)
    {
        echo"Incorrect details";
    }
    mysqli_close($con);
}
?>