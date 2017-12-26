<!doctype html>
<head></head>
<body>
<?php
include "adminheader.php";
?>
<form action="view_result_final.php" method="post">
    <center>

        <?php
        include "connection.php";

        $s="select * from constituency where state='".$_REQUEST["state"]."'";
        $result=mysqli_query($conn,$s);
        $p="<b>Select Constituency</b> &nbsp;&nbsp; <select name='cons'>";
        while($row=mysqli_fetch_array($result))
        {
            $p=$p."<option value='".$row[1]."'>".$row[1]."</option>";
        }
        $p=$p."</select>";

        echo $p;
        ?>
        <br><br>
        <center><input type='submit' value='View Result'></center>
    </center>
</form>
<?php
include "footer.php";
?>
</body>
</html>