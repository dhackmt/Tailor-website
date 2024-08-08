<html>
    <head>
        <link href="demo.css" rel="stylesheet" type="text/css"></link>
        </head>
</html>
<?php
$con=mysqli_connect("localhost","root","","backend");
$u=$_GET['t1'];
$f=$_GET['f'];
$s=$_GET['s'];
// $idd=$_GET['idd'];
$c = rand(0,1000);
$flag=0;

$q="SELECT * FROM login WHERE username='$u'";
$rs=mysqli_query($con,$q);
if(mysqli_num_rows($rs)>0)
{
    while($row=mysqli_fetch_array($rs))
    {
        $result=$row['password'];
        $user=$row['username'];
        $i=$row['id'];
        if($f==$result && $u==$user)
        {
            $flag=1;
        }
    }
}
if($flag==1)
{
    echo'<div class="num">Your coupon code is:<br></div>';
    echo'<div class="code">'. $c.'</div>';
    echo'<div class="note">
            <br>Note: This coupon code is for one time use only if you do not use this in 24hrs you cannot use it again</div>';
            
}
else{
    echo"Incorrect details";
}
$a="INSERT INTO COUPONS (username,code,cid,sname) VALUES('$u',$c,$i,'$s')";

$r=mysqli_query($con,$a);

mysqli_close($con);


?>

