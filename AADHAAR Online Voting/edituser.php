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
    include "connection.php";
    $s="select * from admin where email='".$_GET["q"]."'";
    $result=mysqli_query($conn,$s);
    $row=mysqli_fetch_array($result);
    ?>
    <center>
        <h1>Edit User</h1>
    <form action="confirmeduser.php" method="post" id="myform">
        <table border="1">
            <tr>
                <td>Enter e mail Address</td>
                <td><input type="text" name="email" readonly value='<?php echo $row[0]; ?>'></td>
            </tr>
            <tr>
                <td>Enter First Name</td>
                <td><input type="text" name="first" value='<?php echo $row[2]; ?>' data-rule-required="true"></td>
            </tr>
            <tr>
                <td>Select Type</td>
                <td>
                    <select name="sell" >
                        <option value="admin" <?php if($row[3]=='admin'){ ?>selected="selected" <?php } ?>>admin</option>
                        <option value="power user" <?php if($row[3]=='power user'){ ?>selected="selected" <?php } ?>>power user</option>
                        <option value="limited user" <?php if($row[3]=='limited user'){ ?>selected="selected" <?php } ?>>limited user</option>
                    </select>
                </td>
            </tr>
            <td><?php
                if(isset($_GET["er"]))
                    echo "E-mail ID already exists";
                ?></td><td><input type="submit" value="Save"></td>
        </table>
    </form>
    </center>
</div>
<?php
include "footer.php";
?>
</body>
</html>