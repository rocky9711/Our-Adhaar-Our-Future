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
<div id="all">
    <?php
    include("adminheader.php");
    ?>
    <center>
        <h1>Add New Admin</h1>
    <form action="insertuser.php" method="post" id="myform">
    <table border="1" style="color:#333">
        <tr>
            <td>Enter e mail Address</td>
            <td><input type="text" name="email" data-rule-required="true"></td>
        </tr>
        <tr>
            <td>Enter Password</td>
            <td><input type="password" name="password" data-rule-required="true"></td>
        </tr>
        <tr>
            <td>Confirm Password</td>
            <td><input type="password" name="password" data-rule-required="true"></td>
        </tr>
        <tr>
            <td>Enter First Name</td>
            <td><input type="text" name="first" data-rule-required="true"></td>
        </tr>
        <tr>
            <td>Select Type</td>
            <td>
                <select name="sell" >
                    <option value="admin">admin</option>
                    <option value="power user">power user</option>
                    <option value="limited user">limited user</option>
                </select>
            </td>
        </tr>
        <td><?php
        if(isset($_GET["er"]))
            echo "E-mail ID already exists";
            ?></td><td><input type="submit" value="Add User"></td>
    </table>
    </center>
    </form>
</div>
<?php
include "footer1.php"
?>
</body>
</html>