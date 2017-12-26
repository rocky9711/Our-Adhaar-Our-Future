<!doctype html>
<html>

<head>
    <style>
        input[type=text] {width:300px;}

    </style>
    <script src="lib/jquery.js"></script>

    <script src="dist/jquery.validate.js"></script>

    <script>
        /*$(document).ready(function()
         {
         $("#myform").validate();
         })*/
        function validateForm() {
            var x = document.forms["myform"]["nam"].value;
            var y=document.forms["myform"]["fnam"].value;
            var s=document.getElementById("sta").value;
            var xx=document.getElementById("nam").value;
            var alphaExp = /^[a-zA-Z]+$/;
            //alert(x);
            var f=0;
            var i;
            for(i=0;i<xx.length;i++){
                if(xx[i]=="1"  || xx[i]=="2" || xx[i]=="3" || xx[i]=="4" || xx[i]=="5" || xx[i]=="6" || xx[i]=="7" || xx[i]=="8" || xx[i]=="9" || xx[i]=="0")
                f=1;
            }
            if (x == null || x == "") {
                alert("Name must be filled out");
                return false;
            }
            else if (f==1) {
                alert("Invalid characters");
                return false;
            }
            else if (y == null || y == "") {
                alert("Father's Name must be filled out");
                return false;
            }
            else if(s==null || s==""){
                alert("Sate must be filled");
                return false;
            }

        }
    </script>
</head>
<body>
<?php
include "adminheader.php";
?>
<center>
    <h1> Add Candidate </h1>
    <form id="myform" action="addcandlogic.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" id="nam" name="name" data-rule-required="true"> </td>
            </tr>
            <tr>
                <td>Father's Name</td>
                <td><input type="text" id="fnam" name="fname" data-rule-required="true"> </td>
            </tr>
            <tr>
                <td>Photo</td>
                <td><input type="file" name="cphoto" data-rule-required="true"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" data-rule-required="true"></td>
            </tr>
            <tr>
                <td>Mobile Number</td>
                <td><input type="text" name="mob" data-rule-required="true"></td>
            </tr>
            <tr>
                <td>Home Address</td>
                <td><textarea name="haddress" rows="5" cols="40" data-rule-required="true"></textarea></td>
            </tr>
            <tr>
                <td>Office Address</td>
                <td><textarea name="oaddress" rows="5" cols="40" data-rule-required="true"></textarea></td>
            </tr>
            <tr>
                <td>Election Symbol</td>
                <td><input type="file" name="pphoto" data-rule-required="true"></td>
            </tr>
            <tr>
                <td>Party Name</td>
                <td><input type="text" name="party" data-rule-required="true"></td>
            </tr>
            <tr>
                <td>State</td>
                <td><select id="sta" name="state" data-rule-required="true">
                        <option value="">-----</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttrakhand">Uttrakhand</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="West Bengal">West Bengal</option>
                    </select>
                </td>
            </tr>
            <tr><td></td><td><center><input type="submit" value="Add Candidate"></center></td></tr>
        </table>
    </form>
</center>
<?php
include "footer.php";
?>
</body>
</html>