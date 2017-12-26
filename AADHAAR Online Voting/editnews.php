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
<form action="confirmedit.php" method="get">
    <table border="1">
        <tr>
            <td>News ID</td>
            <td><input type="text" name="txt1" readonly value="<?php echo $row[0];?>"></td>
        </tr>
        <tr>
            <td>News Title</td>
            <td><input type="text" name="txt2" value="<?php echo $row[1];?>"></td>
        </tr>
        <tr>
            <td>News Description</td>
            <td><input type="text" name="txt3" value="<?php echo $row[2];?>"></td>
        </tr>
        <tr>
            <td>Date</td>
            <td><input type="date" name="txt4" value="<?php echo $row[3];?>"></td>
        </tr>
<tr><td></td><td><input type="submit" value="Save"></td></tr>
    </table>
</form>
<?php
include "footer.php";
?>
</body>

</html>