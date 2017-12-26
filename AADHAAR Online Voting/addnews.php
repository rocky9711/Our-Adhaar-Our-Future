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
include "adminheader.php";
?>
<center>
    <h1>Add News</h1>
<form action="confirmnews.php" method="post">


    <table border="1">
        <tr>
            <td>Enter News Title</td>
            <td><input type="text" name="title" data-rule-required="true"></td>
        </tr>
        <tr>
            <td>Enter News Description</td>
            <td><input type="text" name="des" data-rule-required="true"></td>
        </tr>
        <tr>
            <td>Enter Date</td>
            <td><input type="date" name="dat" data-rule-required="true"></td>
        </tr>
        <tr>
            <td></td><td><input type="submit" value="Add News"></td>
        </tr>
    </table>

</form>
</center>
</body>
</html>