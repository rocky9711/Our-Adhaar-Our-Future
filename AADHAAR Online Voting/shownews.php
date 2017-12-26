<!doctype html>
<html>
<head></head>

<body>
<?php
include "publicheader.php";
?>
<h1>Welcome to my homepage</h1>
<div>
    <?php
    $s="select * from addnews where news_id=".$_GET["q"];
    include "connection.php";
    $result=mysqli_query($conn,$s);
    for($i=1;$i<=5;$i++)
    {
        $row=mysqli_fetch_array($result);
        echo '<h1>'.$row[1].'</h1>'.$row[2].'<br><br>'.$row[3];
    }
    ?>
</div>
</body>

</html>