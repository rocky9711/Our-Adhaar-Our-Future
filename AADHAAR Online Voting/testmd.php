<!doctype html>
    <html>
<body>
<form action="testmd.php">
    <input type="text" name="ss">
    <input type="submit">
</form>
<?php
$k=$_REQUEST["ss"];
echo md5($k);
?>
</body>
</html>