<?php
session_start();
include "connection.php";
$s="select * from voter where adhaar=".$_POST["adh_no"];
$result=mysqli_query($conn,$s);
if(mysqli_num_rows($result)==0)
{
    header("location:voter_login.php?erno=1");
}
else
{
    $row=mysqli_fetch_array($result);
    if($row[18]=="N") {
        //echo md5($_POST["s_pin"]);
        if ($row[8] == $_POST["s_pin"]) {
            $_SESSION["adhar"]=$row[1];
            //echo "Correct";
            header("location:voter_login_home.php?q=" . $row[1]);
        }
        else
        {
            header("location:voter_login.php?er=1");
        }
    }
    else
    {

        header("location:voter_login.php?alr=1");
    }
}
