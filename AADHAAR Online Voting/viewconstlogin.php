<!doctype html>
<html>

<head></head>
<body>
<?php
include "adminheader.php";
include "connection.php";
$s="select * from const_login where const_id=".$_GET["q"];
$result=mysqli_query($conn,$s);
$p="<center><h1>Constituency Logins</h1>";
$p=$p."<table border='1'>";
$p=$p."<tr><th>E-Mail</th><th>Officer Name</th><th>Mobile</th><th>Edit</th><th>Delete</th></tr>";
while($row=mysqli_fetch_array($result))
{
    $p=$p."<tr><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td>";
    $p=$p." <td><a href='edit_const_login.php?q=".$row[0]."'>Edit</a> </td>";
    $p=$p." <td><a href='delete_const_login.php?q=".$row[0]."'>Delete</a> </td></tr>";
}
$p=$p."</table></center>";
echo $p;

?>
<?php
include "footer.php";
?>
</body>
</html>
