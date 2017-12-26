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
<center><h1>Delete Admin</h1></center>
    <form action="confirmdeluser.php" method="post" id="myform">
        <center>
        <table border="1">
            <tr>
                <td>E-Mail</td>
                <td><input type="text" name="email" readonly value='<?php echo $row[0]; ?>' </td>
            </tr>
            <tr><td>First Name</td>
                <td><input type="text" name="first" readonly value='<?php echo $row[2]; ?>' data-rule-required="true"></td>
            </tr>
            <tr>
                <td>Type</td>
                <td>
                    <select name="sell" >
                        <option value='<?php echo $row[3]; ?>'><?php echo $row[3]; ?></option>
                    </select>
                </td>
            </tr>
            <td><?php
                if(isset($_GET["er"]))
                    echo "E-mail ID already exists";
                ?></td><td><input type="submit" value="Delete"></td>
        </table>
        </center>
    </form>
</div>
<?php
include "footer.php";
?>
</body>
</html>