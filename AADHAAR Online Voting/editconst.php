<!doctype html>
<html>
<head>

</head>
<body>
<?php
include "adminheader.php";
include "connection.php";
$s = "select * from constituency where const_id=" . $_GET["q"];
$result = mysqli_query($conn, $s);
$row = mysqli_fetch_array($result);
?>
<center>
    <h2>Edit Constituency</h2>
    <center>
        <form action="editconstlogic.php" method="post">
            <table>
                <tr>
                    <td>Constituency ID</td>
                    <td><input type="text" name="txt1" value="<?php echo $row[0]; ?>" readonly ></td>
                </tr>
                <tr>
                    <td>Constituency Name</td>
                    <td><input type="text" name="txt2" value="<?php echo $row[1]; ?>"></td>
                </tr>
                <tr>
                    <td>Population</td>
                    <td><input type="text" name="txt3" value="<?php echo $row[2]; ?>"></td>
                </tr>
                <tr>
                    <td>Ward</td>
                    <td><input type="text" name="txt4" value="<?php echo $row[3]; ?>"></td>
                </tr>
                <tr>
                    <td>State</td>
                    <td><select name="state">
                            <option value="Andhra Pradesh" <?php if ($row[4] == "Andhra Pradesh") { ?> selected="selected" <?php } ?> >
                                Andhra Pradesh
                            </option>
                            <option
                                value="Arunachal Pradesh" <?php if ($row[4] == "Arunachal Pradesh") { ?> selected="selected" <?php } ?> >
                                Arunachal Pradesh
                            </option>
                            <option value="Assam" <?php if ($row[4] == "Assam") { ?> selected="selected" <?php } ?> >
                                Assam
                            </option>
                            <option value="Bihar" <?php if ($row[4] == "Bihar") { ?> selected="selected" <?php } ?> >
                                Bihar
                            </option><option value="Chhattisgarh" <?php if ($row[4] == "Chhattisgarh") { ?> selected="selected" <?php } ?> >
                                Chhattisgarh
                            </option><option value="Goa" <?php if ($row[4] == "Goa") { ?> selected="selected" <?php } ?> >
                                Goa
                            </option><option value="Gujarat" <?php if ($row[4] == "Gujarat") { ?> selected="selected" <?php } ?> >
                                Gujarat
                            </option><option value="Haryana" <?php if ($row[4] == "Haryana") { ?> selected="selected" <?php } ?> >
                                Haryana
                            </option><option value="Himachal Pradesh" <?php if ($row[4] == "Himachal Pradesh") { ?> selected="selected" <?php } ?> >
                                Himachal Pradesh
                            </option><option value="Jammu and Kashmir" <?php if ($row[4] == "Jammu and Kashmir") { ?> selected="selected" <?php } ?> >
                                Jammu and Kashmir
                            </option><option value="Jharkhand" <?php if ($row[4] == "Jharkhand") { ?> selected="selected" <?php } ?> >
                                Jharkhand
                            </option><option value="Karnataka" <?php if ($row[4] == "Karnataka") { ?> selected="selected" <?php } ?> >
                                Karnataka
                            </option><option value="Kerala" <?php if ($row[4] == "Kerala") { ?> selected="selected" <?php } ?> >
                                Kerala
                            </option><option value="Madhya Pradesh" <?php if ($row[4] == "Madhya Pradesh") { ?> selected="selected" <?php } ?> >
                                Madhya Pradesh
                            </option><option value="Maharshtra" <?php if ($row[4] == "Maharshtra") { ?> selected="selected" <?php } ?> >
                                Maharshtra
                            </option><option value="Manipur" <?php if ($row[4] == "Manipur") { ?> selected="selected" <?php } ?> >
                                Manipur
                            </option><option value="Meghalaya" <?php if ($row[4] == "Meghalaya") { ?> selected="selected" <?php } ?> >
                                Meghalaya
                            </option><option value="Mizoram" <?php if ($row[4] == "Mizoram") { ?> selected="selected" <?php } ?> >
                                Mizoram
                            </option><option value="Nagaland" <?php if ($row[4] == "Nagaland") { ?> selected="selected" <?php } ?> >
                                Nagaland
                            </option><option value="Odisha" <?php if ($row[4] == "Odisha") { ?> selected="selected" <?php } ?> >
                                Odisha
                            </option><option value="Punjab" <?php if ($row[4] == "Punjab") { ?> selected="selected" <?php } ?> >
                                Punjab
                            </option><option value="Rajasthan" <?php if ($row[4] == "Rajasthan") { ?> selected="selected" <?php } ?> >
                                Rajasthan
                            </option><option value="Sikkim" <?php if ($row[4] == "Sikkim") { ?> selected="selected" <?php } ?> >
                                Sikkim
                            </option><option value="Tamil Nadu" <?php if ($row[4] == "Tamil Nadu") { ?> selected="selected" <?php } ?> >
                                Tamil Nadu
                            </option><option value="Telangana" <?php if ($row[4] == "Telangana") { ?> selected="selected" <?php } ?> >
                                Telangana
                            </option><option value="Tripura" <?php if ($row[4] == "Tripura") { ?> selected="selected" <?php } ?> >
                                Tripura
                            </option><option value="Uttar Pradesh" <?php if ($row[4] == "Uttar Pradesh") { ?> selected="selected" <?php } ?> >
                                Uttar Pradesh
                            </option><option value="Uttrakhand" <?php if ($row[4] == "Uttrakhand") { ?> selected="selected" <?php } ?> >
                                Uttrakhand
                            </option><option value="Tripura" <?php if ($row[4] == "Tripura") { ?> selected="selected" <?php } ?> >
                                Tripura
                            </option>
                        </select></td>

                </tr>
                <tr>
                    <td><input type="submit" value="Save"></td>
                </tr>
            </table>
        </form>
    </center>
    <?php
    include "footer.php";
    ?>
</body>


</html>