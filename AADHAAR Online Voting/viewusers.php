<html>
<head>


</head>
<body>
<div id="all">
    <?php
    include "adminheader.php";
    include "connection.php";
    $s="select * from admin";
    $result=mysqli_query($conn,$s);
    $p="<center><h1>Admins</h1><table border='1' style='color:#333'>";
    $p=$p."<tr><th>E Mail Address</th><th>Name</th><th>Type</th><th>Edit</th><th>Delete</th>";
    while($row=mysqli_fetch_array($result))
    {
        $p=$p."<tr>";
        $p=$p."<td>".$row[0]."</td>";
        $p=$p."<td>".$row[2]."</td>";
        $p=$p."<td>".$row[3]."</td>";
        $p=$p."<td><a href='edituser.php?q=".$row[0]."'>Edit</a></td>";
        $p=$p."<td><a href='deluser.php?q=".$row[0]."'>Delete</a></td></tr>";
    }
    $p=$p."</table></center>";
    echo $p;
    ?>


</div>
<?php
include "footer.php";
?>
</body>
</html>