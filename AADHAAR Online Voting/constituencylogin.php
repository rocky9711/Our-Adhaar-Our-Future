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
    <style>
        table {color:#333;}
    </style>
</head>
<body>
<div id="all">
    <center>
        <?php
        include "publicheader.php";

        ?>
        <h1>Constituency Login !</h1>
        <form action="const_login_check.php" id="myform" method="post">
            <table>
                <tr>
                    <td>Enter E-mail</td>
                    <td><input type="text" name="txt1" data-rule-required="true"></td>
                </tr>
                <tr>
                    <td>Enter Password</td>
                    <td><input type="password" name="txt2" data-rule-required="true"></td>
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

include"footer.php";
?>
</body>
</html>