<!doctype html>
    <html>
<head>

</head>
<body>
<?php
include "adminheader.php";
?>
<form action="set_date_logic.php" method="post">
<center>
    <table>

<tr><td><h1>Select Election Date:</h1></td>
<td><input type="date" name="dat"></td></tr>
        <tr><td></td><td><input type="submit" value="Set Date"></td></tr>
</table>
</center>
</form>
<?php
include "footer.php";
?>
</body>

</html>