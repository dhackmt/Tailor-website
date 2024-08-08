
<?php
if(isset($_POST['s']))
{
$con=mysqli_connect("localhost","root","","backend");
    $password=$_POST['p1'];
    $username=$_POST['u1'];
    $new=$_POST['n1'];
    $flag=0;
    $q="SELECT * FROM `admin` WHERE name='$username'";
    $rs=mysqli_query($con,$q);
    if($rs)
    {
        while($row=mysqli_fetch_array($rs))
        {
            $result=$row['password'];
            $user=$row['name'];
            if($password==$result && $username==$user)
            {
               $flag=1;
            }
        }
    }
    if($flag==0)
    {
        echo"Incorrect details";
    }
    else{
        $c="UPDATE `admin` SET password='$new' where name='$username'";
        mysqli_query($con,$c);
        echo"<script>alert('password changed successfuly')</script>;
        <script>window.location.href='index.php'</script>";
    }
    mysqli_close($con);
}
?>