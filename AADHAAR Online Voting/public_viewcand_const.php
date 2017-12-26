<!doctype html>
<html>
<head></head>
<body>
<?php
include "publicheader.php";
?>
<form action="public_viewcand_final.php" method="post">
    <center>
        <h2>State:<?php $st=$_REQUEST["state"]; echo $st;?></h2>
        <input type="hidden"  name="state" value="<?php echo $st;?>">
        <?php
        include "connection.php";

        $s="select * from constituency where state='".$_REQUEST["state"]."'";
        $result=mysqli_query($conn,$s);
        $p="<h2>Select Constituency</h2> &nbsp;&nbsp; <select name='cons'><option value=''>-----</option>";
        while($row=mysqli_fetch_array($result))
        {
            $p=$p."<option value='".$row[1]."'>".$row[1]."</option>";
        }
        $p=$p."</select>";

        echo $p;
        ?>
        <br><br>
        <center><input type='submit' value='View Candidates'></center>
    </center>
</form>
<?php
include "footer.php";
?>
</body>
</html>