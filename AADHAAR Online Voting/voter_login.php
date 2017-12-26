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
include "publicheader.php";
?>
<center>
    <form action="voter_login_auth.php" method="post" id="myform">
    <table>
        <tr>
            <td>Enter ADHAAR Number</td>
            <td><input data-rule-required="true" type="text" name="adh_no"  data-rule-maxlength="12" data-rule-minlength="12" data-rule-number="true"></td>
        </tr>
        <tr>
           <td>Enter your Pin</td>
            <td><input type="password" name="s_pin" data-rule-required="true" ></td>
        </tr>
        <tr><td><?php if(isset($_GET["erno"])) echo "The voter is not registered"; if(isset($_GET["alr"])) echo "You have already voted"; if(isset($_REQUEST["er"])) echo "Incorrect Pin";?></td><td><input type="submit" value="LOGIN"></td></tr>
    </table>
    </form>
</center>
<?php
include "footer.php";
?>
</body>

</html>