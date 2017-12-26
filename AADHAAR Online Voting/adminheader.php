<?php
session_start();
if(isset($_SESSION["admin"]))
{
    $email=$_SESSION["admin"];
}
else
{
    header("location:adminlogin.php");
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
<title>AADHAAR Voting-Admin Panel </title>
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
                    <li class="active"><a href="adminhome.php">Admin Home</a></li>
                    <li class="dropdown"><a href="#">Constituency</a>
                    <ul>
                        <li><a href="addconst.php">Add Constituency</a> </li>
                        <li><a href="viewconst.php">View Constituency</a> </li>
                    </ul>
                    </li>
                    <li class="dropdown"><a href="#">Candidates</a>
                        <ul>
                            <li><a href="addcandidate.php">Add Candidate</a> </li>
                            <li><a href="viewcandidate.php">View Candidates</a> </li>
                        </ul>
                    </li>
                    <li><a href="select_state_result.php">View Result</a> </li>
                    <li class="dropdown"><a href="#">Controls</a>
                        <ul>
                            <li><a href="add_newadmin.php">Add Admin</a> </li>
                            <li><a href="viewusers.php">View Admins</a> </li>
                            <li><a href="addnews.php">Add News</a> </li>
                            <li><a href="viewnews.php">View News</a> </li>
                            <li><a href="turnout.php">Voter Turnout</a></li>
                            <li><a href="set_date.php">Set Date</a></li>
                            <li><a href="changepassword.php">Change Password</a> </li>
                        </ul>
                    </li>

                    <li><a href="logout.php">Log Out</a></li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>
</header>
<!--end of slider section-->
<section class="main__middle__container homepage">
    <div class="main_content">



    <center><h1>Admin Panel</h1></center>
<hr>
<br>