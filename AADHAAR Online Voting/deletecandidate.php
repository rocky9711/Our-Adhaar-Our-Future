<!doctype html>
<html>
<head></head>
<body>
<?php
include "adminheader.php";
include "connection.php";
$s="select * from candidate where cand_id=".$_REQUEST["q"];
$result=mysqli_query($conn,$s);
$row=mysqli_fetch_array($result);
?>
<center>
    <h1> Add Candidate </h1>
    <form action="deletecandfinal.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Candidate ID</td>
                <td><input type="text" name="id" value="<?php echo $row[0];?>" readonly></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $row[1];?>" readonly> </td>
            </tr>
            <tr>
                <td>Father's Name</td>
                <td><input type="text" name="fname" value="<?php echo $row[2];?>" readonly> </td>
            </tr>
            <tr>
                <td>Photo</td>
                <td><img src="<?php echo $row[3];?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $row[4];?>" readonly></td>
            </tr>
            <tr>
                <td>Mobile Number</td>
                <td><input type="text" name="mob" value="<?php echo $row[5];?>" readonly></td>
            </tr>
            <tr>
                <td>Home Address</td>
                <td><textarea name="haddress" rows="5" cols="40" readonly><?php echo $row[6];?></textarea></td>
            </tr>
            <tr>
                <td>Office Address</td>
                <td><textarea name="oaddress" rows="5" cols="40" readonly><?php echo $row[7];?></textarea></td>
            </tr>
            <tr>
                <td>Election Symbol</td>
                <td><img src="<?php echo $row[8];?>"></td>
            </tr>
            <tr>
                <td>Party Name</td>
                <td><input type="text" name="party" value="<?php echo $row[9];?>" readonly></td>
            </tr>
            <tr>
                <td>Constituency</td>
                <td><input type="text" name="const" value="<?php echo $row[10];?>" readonly></td></tr>
            <tr>
                <td>State</td>
                <td><input type="text" name="state" value="<?php echo $row[11];?>" readonly>
                </td>
            </tr>
            <tr><td></td><td><center><input type="submit" value="Delete"></center></td></tr>
        </table>
    </form>
</center>
<?php
include "footer.php";
?>
</body>
</html>