<!doctype html>
<html>
<head>
    <script src="lib/jquery.js"></script>

    <script src="dist/jquery.validate.js"></script>

    <script>
        $(document).ready(function()
        {
            $("#myform").validate();
        })
    </script>
</head>
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
    <form action="viewconst_login_logic.php" method="post" id="myform">
        <table>
            <tr><input type="hidden" name="id" value="<?php echo $row[0];?>" </tr>
            <tr><input type="hidden" name="constid" value="<?php echo $row[1];?>"> </tr>
            <tr><td>E-Mail</td>
                <td><input type="text" name="email" value="<?php echo $row[2];?>"></td>
            </tr>
            <tr>
                <td>Officer Name</td>
                <td><input type="text" name="name" value="<?php echo $row[3];?>"></td>
            </tr>
            <tr>
                <td>Mobile Number</td>
                <td><input type="text" name="mob" value="<?php echo $row[4];?>"></td>
            </tr>
            <tr>
                <td></td><td><input type="submit" value="UPDATE"></td>
            </tr>
        </table>
    </form>
</center>

</body>
</html>