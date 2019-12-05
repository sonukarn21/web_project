<html>
<head>
<link rel="stylesheet" type="text/css" href="css_1.css">
</head>
<body onLoad="setInterval(slider,1000)" bgcolor="#CCCCCC">
<div class="layout_main_container row1">
	<div class="menu_container" id="menu_container">
    	<ul>
        	<li><a href="index.html">Home</a></li>
            <li><a href="sub_menu_page.html">About</a>
            	<ul>
                	<li><a href="sub_menu_page.html">Introduction</a></li>
                    <li><a href="sub_menu_page.html">History</a></li>
                    <li><a href="sub_menu_page.html">Principal Desk</a></li>
                    <li><a href="sub_menu_page.html">Co-ordinator Desk</a></li>
                    <li><a href="sub_menu_page.html">Mission</a></li>
             	</ul>
            </li>
            <li><a href="sub_menu_page.html">Academics</a>
            	<ul>
                	<li><a href="sub_menu_page.html">Admission</a></li>
                    <li><a href="sub_menu_page.html">Results</a></li>
                    <li><a href="faculty.html">Faculty</a></li>
             	</ul>
            </li>
            <li><a href="sub_menu_page.html">Campus</a>
            	<ul>
                	<li><a href="sub_menu_page.html">Computer Lab</a></li>
                    <li><a href="sub_menu_page.html">Library</a></li>
                    <li><a href="sub_menu_page.html">Smart class</a></li>
             	</ul>
            </li>
            <li><a href="sub_menu_page.html">Updates</a>
            	<ul>
                	<li><a href="#">News</a></li>
                    <li><a href="#">Notice</a></li>
             	</ul>
            </li>
            <li><a href="#">Alumni</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="#">FAQ/Helps</a></li>
   		</ul>
	</div>
</div>
<div class="layout_main_container row2">
	<div class="login_main_container">
    	<div class="login_container">
            <form>
                <input type="text">
                <input type="submit">
            </form>
        </div>
    </div>
    <div class="header_container">
    	<div class="heading"><span>BCA<br>MLT COLLEGE<br>SAHARSA</span></div>
        <div class="login_menu"><span><a href="login.html" target="_self"> Admin login </a>| Teacher login | Student login</span></div>
    </div>
</div>
<div class="layout_main_container row3">
	<div class="gallery_main_container" id="gallery_main_container">
    	<div class="gallery_container" id="gallery_container">
            <img class="gallery" src="images/img1.jpg" alt="image">
        </div>
        <div class="arrow_left" id="arrow_left">
        	<img id="arrow_l" src="images/leftarrow.png" alt="leftArrow">
        </div>
        <div class="arrow_right" id="arrow_right">
        	<img id="arrow_r" src="images/rightarrow.png" alt="rightArrow">
        </div>
    </div>
</div> 
<div class="layout_main_container row4">
	<div class="quicklink1_main_container">
    	<div class="quicklink1_container">
        	<div class="quicklink1_image">
            	<img src="images/img1.jpg" alt="comp lab">
            </div>
            <div class="quicklink1_contain"><span>Computer Lab</span></div>
        </div>
        <div class="quicklink1_container">
        	<div class="quicklink1_image">
            	<img src="images/img2.jpg" alt="library">
            </div>
            <div class="quicklink1_contain"><span>Library</span></div>
        </div>
        <div class="quicklink1_container">
        	<div class="quicklink1_image">
            	<img src="images/img3.jpg" alt="smart class">
            </div>
            <div class="quicklink1_contain"><span>Smart Class</span></div>
        </div>
    </div>
</div> 
<div class="layout_main_container row5">
	<div class="quicklink2_container">
    	<ul>
        	<li><a href="#">Notice</a></li>
            <li><a href="#">Results</a></li>
            <li><a href="#">FAQ</a></li>
      	</ul>
    </div>
</div>
<div class="layout_main_container row6">
	<div class="body_left_container">
    	<img src="#" alt="intro_image">
    </div>
    <div class="body_right_container">
        <div class="news_header">NEWS</div>
        <div class="news_body">
      <table border=2>
      
        <?php /* news section */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mlt";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id,news,status FROM news where status ='1'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>";
        echo $row["news"]. "<br><br>";
		echo "</td></tr>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</table>

        

        
        
        </div> 
    </div>
</div>
<div class="layout_main_container row7">
	<div class="footer_menu1_main_container">
        <div class="menu1_container">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">History</a></li>
                <li><a href="#">Faculty</a></li>
                <li><a href="#">Alumni</a></li>
                <li><a href="#">Contect Us</a></li>
            <ul>
        </div>
        <div class="footer_social_menu_container">
        	<div class="social_menu"><a href="#"><img src="images/facebook_icon.png" alt="facebook"></a></div>
           	<div class="social_menu"><a href="#"><img src="images/twiter_icon.png" alt="twiter"></a></div>
            <div class="social_menu"><a href="#"><img src="images/instagram_icon.png" alt="instagram"></a></div>
            <div class="social_menu"><a href="#"><img src="images/googleplus_icon.png" alt="googleplus"></a></div>
            <div class="social_menu"><a href="#"><img src="images/linkdin_icon.png" alt="linkdin"></a></div>
        </div>
    </div>
    <div class="footer_menu2_main_container">
    	<div class="menu2_container">
        	<h4>Find Us With Google Map</h4><br>
        	<img class="google_map" src="images/googlemap.PNG" alt="img">
        </div>
        <div class="menu2_container">
        	<h4>Our Address</h4><br>
        	<pre>M.L.T College
Purab Bazaar, Saharsa
Bihar 852201 INDIA
+91 - 6478 - 223436
info@mltcollege.org
principal@mltcollege.org
         	</pre>
        </div>
        <div class="menu2_container">
        	<h3>Gallary</h3><br>
        	<a href="#"><img class="foot_gallary_img" src="images/img1.jpg" alt="img"></a>
            <a href="#"><img class="foot_gallary_img" src="images/img2.jpg" alt="img"></a>
            <a href="#"><img class="foot_gallary_img" src="images/img3.jpg" alt="img"></a>
            <a href="#"><img class="foot_gallary_img" src="images/img4.jpg" alt="img"></a> 
        </div>
        <div class="menu2_container">
        	<h3>Image</h3><br>
        	<a href="#"><img class="foot_gallary_img" src="images/img5.jpg" alt="img"></a>
            <a href="#"><img class="foot_gallary_img" src="images/img1.jpg" alt="img"></a>
            <a href="#"><img class="foot_gallary_img" src="images/img2.jpg" alt="img"></a>
            <a href="#"><img class="foot_gallary_img" src="images/img3.jpg" alt="img"></a>
        </div>
    </div>
</div>
<div class="layout_main_container row8">
</div>
<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js_1.js"></script>
</body>
</html>