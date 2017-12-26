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
    </style>
</head>
<body>
<?php
session_start();
$z=0;
    if (isset($_SESSION["adhar"])) {
        //echo $_POST["pin1"].$_POST["true_pin1"];
        if (!isset($_GET["er"])) {
              $z=1;
            if ($_POST["pin1"] == $_POST["true_pin1"]) {
                $pass = "";
                for ($i = 0; $i < 6; $i++) {

                    $choice = rand(1, 9);
                    if ($choice > 5) {
                        $x = rand(48, 57);
                    } else {
                        $x = rand(65, 90);
                    }
                    $pass = $pass . chr($x);

                }
                //echo $pass;
                include "connection.php";
                $s = "update voter set pin2='" . $pass . "' where adhaar=" . $_POST["adhaar"];
                mysqli_query($conn, $s);

            }
            else
                header("location:voter_login_home.php?er=1&q=" . $_POST["adhaar"]);

        }
        include "publicheader.php";


        if (!isset($_REQUEST["er"])) {

             $no = $_REQUEST["no"];
             $request = ""; //initialise the request variable
             $param['method'] = "sendMessage";
             $param['send_to'] = $no;
             $param['msg'] = "Your Pin for Online voting is " . $pass;
             $param['userid'] = "2000036319";
             $param['password'] = "vsssmsserver";
             $param['v'] = "1.1";
             $param['msg_type'] = "TEXT"; //Can be "FLASH”/"UNICODE_TEXT"/”BINARY”
             $param['auth_scheme'] = "PLAIN";
             //Have to URL encode the values
             foreach ($param as $key => $val) {
                 $request .= $key . "=" . urlencode($val);
                 //we have to urlencode the values
                 $request .= "&";
                 //append the ampersand (&) sign after each  parameter/value pair
             }
             $request = substr($request, 0, strlen($request) - 1);
             //remove final (&) sign from the request
             $url =
                 "http://enterprise.smsgupshup.com/GatewayAPI/rest?" . $request;
             $ch = curl_init($url);
             curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
             $curl_scraped_page = curl_exec($ch);
             curl_close($ch);
             $result = $curl_scraped_page;
             //x echo $result;
        }

        ?>
        <form action="pin2_auth.php" method="post">
            <center>
                <input type="hidden" name="adhaar" value="<?php echo $_REQUEST["adhaar"]; ?>">
                <table>
                    <tr>
                        <td>Enter the One time Password sent to your phone</td>
                        <td><input type="text" name="pin2" required></td>
                        <td><input type="hidden" name="true_pin2" value="<?php echo $pass; ?>"></td>
                        <td><input type="hidden" name="const" value="<?php echo $_POST["const"]; ?>"></td>
                    </tr>
                    <tr>
                        <td><?php if(isset($_GET["er"])) echo "OTP Incorrect"; ?></td>
                        <td><input type="submit" value="Proceed"></td>
                    </tr>
                </table>
            </center>
        </form>
    <?php
    }
include "footer.php";
?>
</body>
</html>
