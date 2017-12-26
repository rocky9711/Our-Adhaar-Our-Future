<!doctype>
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
include "connection.php";
include "const_login_header.php";
?>
<center>
    <h1>Change Password</h1>
    <form action="update_const_password.php" method="post" id="myform">
        <table style='color:#333'>
            <tr>
                <td>Enter E-mail</td>
                <td><input type="text" name="txt1" required> </td>
            </tr>
            <tr>
                <td>Old Password</td>
                <td><input type="password" name="txt2" required> </td>
            </tr>
            <tr>
                <td>New Password</td>
                <td><input type="password" name="txt3" required></td>
            </tr>
            <tr>
                <td>Confirm New Password</td>
                <td><input type="password" name="txt4" required> </td>
            </tr>
            <tr><td>
                    <?php
                    if(isset($_GET["er"]))
                    {
                        echo "Old Password incorrect";
                    }
                    ?>
                </td><td><input type="submit" value="Change Password"></td></tr>
        </table>
    </form>
</center>
<?php
include "footer1.php";
?>
</body>


</html>