<?php
session_start();
if(isset($_SESSION["constadmin"]))
{
    $email=$_SESSION["constadmin"];
    $cc=$_SESSION["constname"];
}
else
{
    header("location:constituencylogin.php");
}
?>
<style>
    .homepage {
        position: relative;
        margin-top: 7% !important;
        z-index: 111;
        background: #fff;
    }
</style>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script type="text/javascript" src="js/html5shiv.js"></script>
<script type="text/javascript" src="js/respond.min.js"></script>
<header class="main__header">
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-header">
                <h1 class="navbar-brand"><a href="index.php">ADHAAR Voting</a></h1>
                <a href="#" class="submenu">Menus</a> </div>
            <div class="menuBar">
                <ul class="menu">
                    <li class="active"><a href="const_login_home.php">Home</a></li>
                    <li><a href="voter_register.php">Voter Registration</a> </li>
                    <li><a href="const_change_pwd.php">Change Password</a></li>
                    <li><a href="const_logout.php">Log Out</a></li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>
</header>
<!--end of slider section-->
<section class="main__middle__container homepage">
    <div class="main_content">



        <center><h1>Constituency:<?php echo $cc; ?> </h1></center>
        <hr>
        <br>

<!--
<center><h1>Constituency Admin</h1></center>
<center>
    <table>
        <tr>
            <td><a href="const_login_home.php">Home</a> </td>
            <td><a href="const_change_pwd.php">Change Password</a> </td>
            <td><a href="voter_register.php">Voter Registration</a></td>
            <td><a href="const_logout.php">Log Out</a> </td>
        </tr>
    </table>
</center> -->