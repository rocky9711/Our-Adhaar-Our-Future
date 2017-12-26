<!doctype html>
<html>
<head></head>
<body>
<?php
include "adminheader.php";
include "connection.php";
$s="select * from const_login where id=".$_GET["q"];
$result=mysqli_query($conn,$s);
$row=mysqli_fetch_array($result);
?>
<center>
    <h1>Edit Constituency Login</h1>
    <form action="delconst_login_logic.php" method="post">
        <table>
            <tr><input type="hidden" name="id" value="<?php echo $row[0];?>" </tr>
            <tr><input type="hidden" name="constid" value="<?php echo $row[1];?>" readonly> </tr>
            <tr><td>E-Mail</td>
                <td><input type="text" name="email" value="<?php echo $row[2];?>" readonly></td>
            </tr>
            <tr>
                <td>Officer Name</td>
                <td><input type="text" name="name" value="<?php echo $row[3];?>" readonly></td>
            </tr>
            <tr>
                <td>Mobile Number</td>
                <td><input type="text" name="mob" value="<?php echo $row[4];?>" readonly></td>
            </tr>
            <tr>
                <td></td><td><input type="submit" value="DELETE"></td>
            </tr>
        </table>
    </form>
</center>
<?php
include "footer.php";
?>
</body>
</html>