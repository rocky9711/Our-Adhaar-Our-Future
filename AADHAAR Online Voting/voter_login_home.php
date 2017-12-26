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
<center>
    <?php
    session_start();
    include "publicheader.php";
    if(isset($_SESSION["adhar"])) {
    include "connection.php";
    $s = "select * from voter where adhaar=" . $_REQUEST["q"];
    $result = mysqli_query($conn, $s);
    $row = mysqli_fetch_array($result);
    $c = "select * from constituency where const_id=" . $row[17];
    $result = mysqli_query($conn, $c);
    $cc = mysqli_fetch_array($result);
    $const = $cc[1];
    ?>


    <h1>Welcome <?php echo $row[3]; ?></h1>

    <h2>Your Details</h2>

    <form action="ask_otp.php" method="post" id="myform">
        <table>
            <tr>
                <td>ADHAAR Number</td>
                <td><input type="text" name="adhaar" value="<?php echo $row[1]; ?>" readonly></td>
            </tr>
            <tr>
                <td>Electoral Number</td>
                <td><input type="text" value="<?php echo $row[2]; ?>" readonly></td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><input type="text" value="<?php echo $row[6]; ?>" name="no" readonly></td>
            </tr>
            <tr>
                <td>Constituency</td>
                <td><input type="text" name="const" value="<?php echo $const; ?>" readonly></td>
            </tr>
            <tr>
                <td>Enter Pin1</td>
                <td><input type="password" name="pin1" data-rule-required="true"></td>
                <input type="hidden" name="true_pin1" value="<?php echo $row[9]; ?>">
            </tr>
            <tr>
                <td><?php if (isset($_REQUEST["er"])) {
                        echo "Pin Incorrect";
                    } ?></td>
                <td><input type="submit" value="Send OTP for Voting"></td>
            </tr>
        </table>
    </form>

</center>
<?php
}
else
header("location:voter_login.php");
?>
<?php

include "footer.php";
?>
</body>
</html>