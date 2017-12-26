
</div>

</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3>News</h3>
                <?php
                $s="select * from addnews order by news_id desc";
                include "connection.php";
                $result=mysqli_query($conn,$s);
                $p="";
                for($i=1;$i<=5;$i++) {
                    $row = mysqli_fetch_array($result);
                    $p = $p .$i. '.&nbsp;&nbsp;<a href="shownews.php?q=' . $row[0] . '" style="color:#eeeeee">' . $row[1] . '</a>&nbsp;&nbsp;<br>';
                }

                echo $p;
                ?>
            </div>
            <div class="col-md-3">
                <h3>About</h3>
                <p>This online Voting portal for Lok Sabha Elections is meant for automating the Voting System of India. <br />
                    <br />
                    The voters can excercise their right to vote for a better India sitting at their homes, instead of waiting in long queues.</p>
            </div>

            <div class="col-md-3">
                <h3>Candidates</h3>

                <?php
                $o="select * from candidate";
                $kk=mysqli_query($conn,$o);
                $ans="<table style='color:#eeeeee'>";
                while($pp=mysqli_fetch_array($kk))
                {
                    $ans.="<tr>";
                    $ans=$ans."<td><img src='".$pp[3]."' height='50px' width='50px'></td>";
                    $ans=$ans."<td> ".$pp[1]." ( ".$pp[9]." )</td></tr>";

                }
                $ans=$ans."</table>";
                //echo $ans;
                $ans1="<marquee direction='up' scrollamount='4' height='200px'>".$ans."</marquee>";
                echo $ans1;

                ?>
            </div>
            <div class="col-md-3">
                <h3>Social</h3>
                <p>VMM Education<br />
                    Queens Road,<br />
                    Amritsar<br />
                    <br />
                    Phone:<br> +91-7508293475<br />
                    +91-9780584177

                    <!--Fax: (887) 123-4567<br /> -->
                    <br />
                </p>
                <div class="social__icons"> <a href="https://twitter.com/drsyquraishi" class="socialicon socialicon-twitter" target="_blank"></a> <a href="https://www.facebook.com/pages/Election-Commission-of-India/149287558502797" class="socialicon socialicon-facebook" target="_blank"></a> <a href="https://www.google.ae/search?q=election+commission+of+india&oq=election+co&aqs=chrome.2.69i59l3j69i57j69i60l2.5866j0j1&sourceid=chrome&es_sm=93&ie=UTF-8" class="socialicon socialicon-google" target="_blank"></a> <a href="http://www.gmail.com" class="socialicon socialicon-mail" target="_blank"></a> </div>
            </div>
        </div>
    </div>
</footer>
<p class="text-center copyright">&copy; Copyright ABC Company. All Rights Reserved.<br>Developed By:Anmoldeep Singh Kang</p>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script type="text/javascript" src="js/jquery.min.js"></script>--
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!--<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    $('.carousel').carousel({
        interval: 3500, // in milliseconds
        pause: 'none' // set to 'true' to pause slider on mouse hover
    })
</script>


<script type="text/javascript">
    $( "a.submenu" ).click(function() {
        $( ".menuBar" ).slideToggle( "normal", function() {
// Animation complete.
        });
    });
    $( "ul li.dropdown a" ).click(function() {
        $( "ul li.dropdown ul" ).slideToggle( "normal", function() {
// Animation complete.
        });
        $('ul li.dropdown').toggleClass('current');
    });
</script>-->