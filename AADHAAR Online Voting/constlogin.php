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
    <style>
        table {color:#333;}
    </style>
</head>
<body>
<?php
include "adminheader.php";
?>
<center>
    <h1>Add Constituency Login</h1>
    <form action="addconst_login_logic.php" method="post" id="myform">
        <table>
            <tr><input type="hidden" name="constid" value="<?php echo $_REQUEST['q'];?>"> </tr>
            <tr><td>E-Mail</td>
                <td><input type="text" name="email" required></td>
            </tr>
            <tr>
                <td>Officer Name</td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td>Mobile Number</td>
                <td><input type="text" name="mob" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td></td><td><input type="submit" value="ADD LOGIN"></td>
            </tr>
        </table>
    </form>
</center>
<?php
include "footer.php";
?>

</body>
</html>