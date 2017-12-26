<!doctype html>
<html>
<head>
    <script src="lib/jquery.js"></script>

    <script src="dist/jquery.validate.js"></script>

    <script>
        $(document).ready(function()
        {
            $("#myform").validate();
        })
    </script>
    <style>
        table {color:#333;}
        input[type=text] {width:300px}
    </style>
</head>
<body>
<?php
include "const_login_header.php";
?>
<br>
<form action="vote_register_logic.php" method="post" id="myform">
    <center>
        <h1>Voter Registration</h1><br>
    <table>
        <tr>
            <td>Adhaar Card Number</td>
            <td><input type="text" name="adhaar_id"  data-rule-required="true" data-rule-maxlength="12" data-rule-minlength="12" data-rule-number="true" required></td>
        </tr>
        <tr>
            <td>Election Card Number</td>
            <td><input type="text" name="e_num" data-rule-required="true" required></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" data-rule-required="true" required></td>
        </tr>
        <tr>
            <td>Father's Name</td>
            <td><input type="text" name="fname" data-rule-required="true" required></td>
        </tr>
        <tr>
            <td>Reason for online voting</td>
            <td><textarea rows="5" cols="46" name="reason" style="resize: none;"></textarea></td>
        </tr>
        <tr>
            <td>Mobile Number</td>
            <td><input type="text" name="mob" data-rule-required="true" required></td>
        </tr>
        <tr>
            <td>E-Mail</td>
            <td><input type="text" name="email" data-rule-required="true" required></td>
        </tr>
        <tr>
            <td>Your Secret Pin</td>
            <td><input type="text" name="s_pin" data-rule-required="true" required></td>
        </tr>
        <tr>
            <td>Pin 1</td>
            <td><input type="text" name="pin1" readonly value="<?php $x=0;$pass=''; for($i=0;$i<6;$i++){ $x=rand(1,9); $pass=$pass.$x;} echo $pass;?>"></td>
        </tr>
        <tr>
            <td></td><td><center><br><input type="submit" value="Register"></center></td>
        </tr>
    </table>
</center>
</form>
<?php
include "footer1.php";
?>
</body>
</html>
