<!doctype html>
    <html>
<head></head>
<body>
<form action="addcandfinal.php" method="post" enctype="multipart/form-data" >
    <input type="hidden" name="cname" value="<?php echo $_REQUEST["name"];?>">
    <input type="hidden" name="fname" value="<?php echo $_REQUEST["fname"];?>">
    <input type="hidden" name="cpicname" value="<?php echo $_FILES["cphoto"]["name"];?>">
    <input type="hidden" name="cpictemp" value="<?php echo $_FILES["cphoto"]["tmp_name"];?>">
    <input type="hidden" name="ppicname" value="<?php echo $_FILES["pphoto"]["name"];?>">
    <input type="hidden" name="ppictemp" value="<?php echo $_FILES["pphoto"]["tmp_name"];?>">
    <input type="hidden" name="email" value="<?php echo $_REQUEST["email"];?>">
    <input type="hidden" name="mob" value="<?php echo $_REQUEST["mob"];?>">
    <input type="hidden" name="haddress" value="<?php echo $_REQUEST["haddress"];?>">
    <input type="hidden" name="oaddress" value="<?php echo $_REQUEST["oaddress"];?>">
    <input type="hidden" name="party" value="<?php echo $_REQUEST["party"];?>">
    <input type="hidden" name="state" value="<?php echo $_REQUEST["state"];?>">


    <?php
    include "adminheader.php";
$name=$_REQUEST["name"];
$fname=$_REQUEST["fname"];
$cpicname=$_FILES["cphoto"]["name"];
$cpictemp=$_FILES["cphoto"]["tmp_name"];
$ppicname=$_FILES["pphoto"]["name"];
$ppictemp=$_FILES["pphoto"]["tmp_name"];
$email=$_REQUEST["email"];
$mob=$_REQUEST["mob"];
$haddress=$_REQUEST["haddress"];
$oaddress=$_REQUEST["oaddress"];
$party=$_REQUEST["party"];
$state=$_REQUEST["state"];
    //echo $cpictemp;
    //echo $cpicname;
    $cpath="candimages/".$cpicname;

    $ppath="electionsymbols/".$ppicname;
    /*echo $cpictemp."<br>";
    echo $cpath."<br>";*/
    move_uploaded_file($cpictemp,$cpath);
    move_uploaded_file($ppictemp,$ppath);

    include "connection.php";
$s="select * from constituency where state='".$state."'";
$result=mysqli_query($conn,$s);

$p="<center>Select Constituency <select name='cons' required>";
while($row=mysqli_fetch_array($result))
{
    $p=$p."<option value='".$row[1]."'>".$row[1]."</option>";
}
$p=$p."</select>";
echo $p;
?>
<input type="submit" value="Go">
</form>
</body>


</html>