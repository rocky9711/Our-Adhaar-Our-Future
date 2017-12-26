<?php
ob_start();
session_start();
include "publicheader.php";
if(isset($_SESSION["adhar"])) {
    include "connection.php";
    $flag=0;
    if ($_POST["pin2"] == $_POST["true_pin2"]) {
        $p = "<center><h1>Please Vote</h1>";
        $s = "select * from candidate where const='" . $_POST["const"] . "'";
        $result = mysqli_query($conn, $s);
        $p = $p . "<table border='1' style='color:#333'>";
        $p = $p . "<tr><th>Candidate Profile</th><th>Candidate Name</th><th>Candidate Photo</th><th>Party Name</th><th>Party Symbol</th><th>Vote</th>";
        while ($row = mysqli_fetch_array($result)) {
            $p = $p . "<tr>";
            $p=$p."<td><a href='https://www.google.co.in/?gfe_rd=cr&ei=AqmbVYWPDIbC8gfpxpiABQ#q=".$row[1]."' target='_blank'>View Profile</a></td>";
            $p = $p . "<td>" . $row[1] . "</td><td><img src='" . $row[3] . "' height=100px width=100px></td><td>" . $row[9] . "</td><td><img src='" . $row[8] . "' height=100px width=100px></td>";
            $p = $p . "<td><a href='vote_logic.php?q=" . $_REQUEST["adhaar"] . "&cid=" . $row[0] . "'><img src='img/votenow.jpg' width='100px' height='40px'></a></td>";
            $p = $p . "</tr>";
        }
        $p = $p . "</table></center><br><br><br>";
        echo $p;
        include "footer.php";
        $flag=1;

    } else {
        //echo "Go back";
        header("location:ask_otp.php?er=1");
    }
}
else
    header("location:voter_login.php");