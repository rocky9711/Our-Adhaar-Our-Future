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

</head>
<body>
<?php
include "adminheader.php";
include "connection.php";
$s="select * from candidate where cand_id=".$_REQUEST["q"];
$result=mysqli_query($conn,$s);
$row=mysqli_fetch_array($result);
?>
<center>
    <h1> Add Candidate </h1>
    <form action="editcandconfirm.php" method="post" enctype="multipart/form-data">
        <table>
            <input type="hidden" name="id" value="<?php echo $row[0];?>">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $row[1];?>" required data-rule-number="false"> </td>
            </tr>
            <tr>
                <td>Father's Name</td>
                <td><input type="text" name="fname" value="<?php echo $row[2];?>" required data-rule-number="false"> </td>
            </tr>
            <tr>
                <td>Photo</td>
                <td><img src="<?php echo $row[3];?>"><input type="file" name="cphoto"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $row[4];?>" required></td>
            </tr>
            <tr>
                <td>Mobile Number</td>
                <td><input type="text" name="mob" value="<?php echo $row[5];?>" required data-rule-number="true"></td>
            </tr>
            <tr>
                <td>Home Address</td>
                <td><textarea name="haddress" rows="5" cols="40" required><?php echo $row[6];?></textarea></td>
            </tr>
            <tr>
                <td>Office Address</td>
                <td><textarea name="oaddress" rows="5" cols="40" required><?php echo $row[7];?></textarea></td>
            </tr>
            <tr>
                <td>Election Symbol</td>
                <td><img src="<?php echo $row[8];?>"><input type="file" name="pphoto"></td>
            </tr>
            <tr>
                <td>Party Name</td>
                <td><input type="text" name="party" value="<?php echo $row[9];?>" required></td>
            </tr>
            <tr><td><input type="hidden" name="const" value="<?php echo $row[10];?>"></td></tr>
            <tr>
                <td>State</td>
                <td><select name="state">
                        <option value="Andhra Pradesh" <?php if ($row[11] == "Andhra Pradesh") { ?> selected="selected" <?php } ?> >
                            Andhra Pradesh
                        </option>
                        <option
                            value="Arunachal Pradesh" <?php if ($row[11] == "Arunachal Pradesh") { ?> selected="selected" <?php } ?> >
                            Arunachal Pradesh
                        </option>
                        <option value="Assam" <?php if ($row[11] == "Assam") { ?> selected="selected" <?php } ?> >
                            Assam
                        </option>
                        <option value="Bihar" <?php if ($row[11] == "Bihar") { ?> selected="selected" <?php } ?> >
                            Bihar
                        </option><option value="Chhattisgarh" <?php if ($row[11] == "Chhattisgarh") { ?> selected="selected" <?php } ?> >
                            Chhattisgarh
                        </option><option value="Goa" <?php if ($row[11] == "Goa") { ?> selected="selected" <?php } ?> >
                            Goa
                        </option><option value="Gujarat" <?php if ($row[11] == "Gujarat") { ?> selected="selected" <?php } ?> >
                            Gujarat
                        </option><option value="Haryana" <?php if ($row[11] == "Haryana") { ?> selected="selected" <?php } ?> >
                            Haryana
                        </option><option value="Himachal Pradesh" <?php if ($row[11] == "Himachal Pradesh") { ?> selected="selected" <?php } ?> >
                            Himachal Pradesh
                        </option><option value="Jammu and Kashmir" <?php if ($row[11] == "Jammu and Kashmir") { ?> selected="selected" <?php } ?> >
                            Jammu and Kashmir
                        </option><option value="Jharkhand" <?php if ($row[11] == "Jharkhand") { ?> selected="selected" <?php } ?> >
                            Jharkhand
                        </option><option value="Karnataka" <?php if ($row[11] == "Karnataka") { ?> selected="selected" <?php } ?> >
                            Karnataka
                        </option><option value="Kerala" <?php if ($row[11] == "Kerala") { ?> selected="selected" <?php } ?> >
                            Kerala
                        </option><option value="Madhya Pradesh" <?php if ($row[11] == "Madhya Pradesh") { ?> selected="selected" <?php } ?> >
                            Madhya Pradesh
                        </option><option value="Maharshtra" <?php if ($row[11] == "Maharshtra") { ?> selected="selected" <?php } ?> >
                            Maharshtra
                        </option><option value="Manipur" <?php if ($row[11] == "Manipur") { ?> selected="selected" <?php } ?> >
                            Manipur
                        </option><option value="Meghalaya" <?php if ($row[11] == "Meghalaya") { ?> selected="selected" <?php } ?> >
                            Meghalaya
                        </option><option value="Mizoram" <?php if ($row[11] == "Mizoram") { ?> selected="selected" <?php } ?> >
                            Mizoram
                        </option><option value="Nagaland" <?php if ($row[11] == "Nagaland") { ?> selected="selected" <?php } ?> >
                            Nagaland
                        </option><option value="Odisha" <?php if ($row[11] == "Odisha") { ?> selected="selected" <?php } ?> >
                            Odisha
                        </option><option value="Punjab" <?php if ($row[11] == "Punjab") { ?> selected="selected" <?php } ?> >
                            Punjab
                        </option><option value="Rajasthan" <?php if ($row[11] == "Rajasthan") { ?> selected="selected" <?php } ?> >
                            Rajasthan
                        </option><option value="Sikkim" <?php if ($row[11] == "Sikkim") { ?> selected="selected" <?php } ?> >
                            Sikkim
                        </option><option value="Tamil Nadu" <?php if ($row[11] == "Tamil Nadu") { ?> selected="selected" <?php } ?> >
                            Tamil Nadu
                        </option><option value="Telangana" <?php if ($row[11] == "Telangana") { ?> selected="selected" <?php } ?> >
                            Telangana
                        </option><option value="Tripura" <?php if ($row[11] == "Tripura") { ?> selected="selected" <?php } ?> >
                            Tripura
                        </option><option value="Uttar Pradesh" <?php if ($row[11] == "Uttar Pradesh") { ?> selected="selected" <?php } ?> >
                            Uttar Pradesh
                        </option><option value="Uttrakhand" <?php if ($row[11] == "Uttrakhand") { ?> selected="selected" <?php } ?> >
                            Uttrakhand
                        </option><option value="Tripura" <?php if ($row[11] == "Tripura") { ?> selected="selected" <?php } ?> >
                            Tripura
                        </option>
                    </select>
                </td>
            </tr>
            <tr><td></td><td><center><input type="submit" value="Save"></center></td></tr>
        </table>
    </form>
</center>
</body>
</html>