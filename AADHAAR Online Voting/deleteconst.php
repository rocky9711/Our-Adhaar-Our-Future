<!doctype html>
<html>
<head>

</head>
<body>
<?php
include "adminheader.php";
include "connection.php";
$s = "select * from constituency where const_id=" . $_GET["q"];
$result = mysqli_query($conn, $s);
$row = mysqli_fetch_array($result);
?>
<center>
    <h2>Delete Constituency</h2>
    <center>
        <form action="delconstlogic.php" method="post">
            <table>
                <tr>
                    <td>Constituency ID</td>
                    <td><input type="text" name="txt1" value="<?php echo $row[0]; ?>" readonly ></td>
                </tr>
                <tr>
                    <td>Constituency Name</td>
                    <td><input type="text" name="txt2" value="<?php echo $row[1]; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Population</td>
                    <td><input type="text" name="txt3" value="<?php echo $row[2]; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Ward</td>
                    <td><input type="text" name="txt4" value="<?php echo $row[3]; ?>" readonly></td>
                </tr>
                <tr>
                    <td>State</td>
                    <td><input type="text" name="state" value="<?php echo $row[4];?>" readonly></td>

                </tr>
                <tr>
                   <td></td> <td><input type="submit" value="Delete"></td>
                </tr>
            </table>
        </form>
    </center>
    <?php
    include "footer.php";
    ?>
</body>


</html>