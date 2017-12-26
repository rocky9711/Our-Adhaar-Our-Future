<!doctype html>
    <html>
<head>
    <style>
        table {color:#333;}
    </style>
</head>
<body>
<?php
include "adminheader.php";
include "connection.php";
$s="select * from constituency where state='".$_REQUEST["state"]."'";
$result=mysqli_query($conn,$s);
$p="<center><table border='1'>";
$p.="<tr><th colspan='8'>Constituencies of ".$_REQUEST['state']." State</th></tr>";
$p=$p."<tr><th>Constituency ID</th><th>Constituency Name</th><th>Population</th><th>Ward Name</th><th>Edit</th><th>Delete</th><th>Constituency Login</th><th>View Constituency Login</th></tr>";
while($row=mysqli_fetch_array($result))
{
    $p=$p."<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3];
    $p=$p."</td><td><a href='editconst.php?q=".$row[0]."'>Edit</a></td>";
    $p=$p."<td><a href='deleteconst.php?q=".$row[0]."'>Delete</a></td>";
    $p=$p."<td><a href='constlogin.php?q=".$row[0]."'>Add Constituency Login</a></td>";
    $p=$p."<td><a href='viewconstlogin.php?q=".$row[0]."'>View Constituency Login</a></td>";
}
$p=$p."</table></center>";
echo $p;
?>
<?php
include "footer.php";
?>

</body>
</html>