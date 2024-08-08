
<?php
if(isset($_POST['s']))
{
$con=mysqli_connect("localhost","root","","backend");
    $password=$_POST['p1'];
    $username=$_POST['u1'];
    $new=$_POST['n1'];
    $flag=0;
    $q="SELECT * FROM `login` WHERE username='$username'";
    $rs=mysqli_query($con,$q);
    if(mysqli_num_rows($rs)>0)
    {
        while($row=mysqli_fetch_array($rs))
        {
            $result=$row['password'];
            $user=$row['username'];
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
        $c="UPDATE login SET password='$new' where username='$username'";
        mysqli_query($con,$c);
        echo"<script>alert('password changed successfuly')</script>
        <script>window.location.href='index.php'</script>";
    }
    mysqli_close($con);
}
?>