<!doctype html>
    <html>
<head></head>
<body>
<?php
include "adminheader.php";
include "connection.php";
$s="select count(adhaar) from voter";
$result=mysqli_query($conn,$s);
$row=mysqli_fetch_array($result);
$q="select count(adhaar) from voter where `check`='Y'";
$result1=mysqli_query($conn,$q);
$row1=mysqli_fetch_array($result1);
?>
<center><h1>Voter Turnout</h1>
<table style="color:#333">
    <tr><td><h1>Total Voters:<?php echo $row[0];?></h1></td></tr>
    <tr><td><h1>Voted:<?php echo $row1[0];?></h1></td></tr>
    <tr><td><h1>Percentage Turnout= <?php echo round($row1[0]/$row[0]*100)."%";?></h1></td></tr>
</table>
    </center>
<?php
include "footer.php";
?>
</body>
</html>