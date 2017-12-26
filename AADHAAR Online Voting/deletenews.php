<!doctype>
<html>

<head></head>
<body>
<?php
include "adminheader.php";
$s="select * from addnews where news_id=".$_GET["q"];
include "connection.php";
$result=mysqli_query($conn,$s);
$row=mysqli_fetch_array($result);
?>
<center><h1>Delete News</h1></center>
<form action="confirmdelete.php" method="get">
    <center>
    <table border="1">
        <tr>
            <td>News ID</td>
            <td><input type="text" name="txt1" readonly value="<?php echo $row[0];?>"></td>
        </tr>
        <tr>
            <td>News Title</td>
            <td><input type="text" name="txt2" readonly value="<?php echo $row[1];?>"></td>
        </tr>
        <tr>
            <td>News Description</td>
            <td><input type="text" name="txt3" readonly value="<?php echo $row[2];?>"></td>
        </tr>
        <tr>
            <td>Date</td>
            <td><input type="date" name="txt4" readonly value="<?php echo $row[3];?>"></td>
        </tr>
        <tr><td></td><td><input type="submit" value="Delete"></td></tr>
    </table>
    </center>
</form>
<?php
include "footer.php";
?>

</body>

</html>