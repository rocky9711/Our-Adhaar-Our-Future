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
include "publicheader.php";
?>
<div id="all">

    <center>

    <h1>Admin Login !</h1>
    <form action="checklogin.php" id="myform" method="post">
        <table style="color:#333">
            <tr>
                <td>Enter E-mail</td>
                <td><input type="text" name="txt1" data-rule-required="true"></td>
            </tr>
            <tr>
                <td>Enter Password</td>
                <td><input type="password" name="txt2" data-rule-required="true"></td>
            </tr>
            <tr>
                <td>Enter Type</td>
                <td>
                    <select name="sell">
                        <option value="admin">admin</option>
                        <option value="power user">power user</option>
                        <option value="limited user">limited user</option>
                    </select>
                </td>
            </tr>
            <tr><td>
                    <?php
                    if(isset($_GET["er"]))
                    {
                        echo "Email/Password Incorrect";
                    }
                    ?>
                </td><td><input type="submit" value="Login"></td></tr>
        </table>
    </form>
    </center>
</div>
<?php
include "footer.php";
?>
</body>
</html>