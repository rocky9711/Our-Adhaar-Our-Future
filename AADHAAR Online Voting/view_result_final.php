<?php
include "connection.php";
include "adminheader.php";
$s="select * from candidate where const='".$_REQUEST["cons"]."'";

$result=mysqli_query($conn,$s);
$p="<center><table border='1' style='color:#333'>";
$p=$p."<tr><th>Candidate ID</th><th>Candidate Name</th><th>Father's Name</th><th>Photo</th><th>E-Mail</th><th>Mobile</th><th>Home Address</th><th>Office Address</th><th>Election Symbol</th><th>Party</th><th>Constituency</th><th>State</th><th>Number of Votes</th></tr>";
while($row=mysqli_fetch_array($result))
{
    $p=$p."<tr>";
    for($i=0;$i<13;$i++)
    {
        if($i==3 || $i==8)
        {
            $p=$p."<td><img src='".$row[$i]."' width=100px height=100px>";
        }
        else
            $p=$p."<td>".$row[$i]."</td>";
    }
    $p=$p."</tr>";
}
$p=$p."</table></center>";
echo $p;
include "footer.php";
?>