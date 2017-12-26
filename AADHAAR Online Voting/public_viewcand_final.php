<!doctype html>
<html>
<head></head>
<body>
<?php
include "publicheader.php";
include "connection.php";
$s="select * from candidate where const='".$_POST["cons"]."'";
$result=mysqli_query($conn,$s);
$p="<center><h2>State:".$_REQUEST['state']."</h2><h2>Constituency:".$_REQUEST['cons']."</h2><table style='color: #333' border='1'>";
$i=1;
$p.="<tr><th>Sr No.</th><th>Candidate Name</th><th>Candidate Photo</th><th>Party Name</th><th>Party Symbol</th>";
while($row=mysqli_fetch_array($result))
{
    $p.="<tr><td>".$i++."</td><td>".$row[1]."</td><td><img src='".$row[3]."' height=100px width=100px></td><td>".$row[9]."</td><td><img src='".$row[8]."' height=100px width=100px></td></tr>";
}
$p.="</table></center>";
echo $p;
include "footer.php";
?>

</body>
</html>

