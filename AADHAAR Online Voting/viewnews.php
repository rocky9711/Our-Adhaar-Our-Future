<!doctype>
    <html>
<head>

</head>
<body>
<?php
include "connection.php";
include "adminheader.php";
$s="select * from addnews";
$result=mysqli_query($conn,$s);
$p="<center><h1>News</h1><table border='1'>";
$p=$p."<tr><th>News ID</th><th>News Title</th><th>Description</th><th>Date</th><th>Edit</th><th>Delete</th></tr>";
while($row=mysqli_fetch_array($result))
{
    $p=$p."<tr><td>".$row[0]."</td>";
    $p=$p."<td>".$row[1]."</td>";
    $p=$p."<td>".$row[2]."</td>";
    $p=$p."<td>".$row[3]."</td>";
    $p=$p."<td><a href='editnews.php?q=".$row[0]."'>Edit</td>";
    $p=$p."<td><a href='deletenews.php?q=".$row[0]."'>Delete</td>";
}
$p=$p."</table></center>";
echo $p;
?>
<?php
include "footer.php";
?>
</body>
</html>
