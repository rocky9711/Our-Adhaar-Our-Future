<!doctype>
    <html>
<head></head>
<body>
<?php
include "adminheader.php";
$email=$_SESSION["admin"];
?>
<center><h1>Welcome <?php echo $email;?></h1></center>
<?php
include "footer.php";
?>
</body>


</html>