
<?php 
$active = 'contact';
// this shows in the navbar which page is active
include 'header.php';
?>


</div>
<div class="main">
    <!-- h1 stands for header, this is sort of the title of a paragraph -->
<p> If there are any further questions you may have, please leave your email-adress here so I can contact you </p>
<p> Your email-adress will not be used for any further marketing and will not be sold to third parties. </p>

<br><br><br>

    <form 
  method="POST" 
  action="https://script.google.com/macros/s/AKfycbyrHVYSeH1BjOzha_-pPCuREvhjVDJG0r45aYCiH83bN1gdORV-c_bSFCgb4PzixzhV/exec">
  
  <h2>Please fill in the form below</h2>
  
  <input name="Name" type="text"  placeholder="Name" required>

    <input name="Email" type="email" placeholder="Email" required>

  
  <input name="Phone" type="number" placeholder="Phone" >
  
  <textarea rows="6" name="Message" placeholder="Message" ></textarea>
  
  <button type="reset">Reset</button>
  <button type="submit">Submit</button>
  
</form>

<br><br>










</div>


<a id="bottom_of_the_page"> <div class="footer-basic">  </a>
        <footer>
			<div class="social"><a href="https://www.youtube.com/channel/UCjNduH3PQZwEKU4O7kMPDSQ" target="_blank"><i class="icon ion-social-youtube"></i></a></div>
            <div class="social"><a href="https://www.instagram.com/yatin.ca" target="_blank"><i class="icon ion-social-instagram"></i></a></div>
            <div class="social"><a href="https://www.facebook.com/dr.yatin.malik" target="_blank"><i class="icon ion-social-facebook"></i></a></div>



            <ul class="list-inline">
                <li class="list-inline-item"><a href="indexy.php">Home</a></li>
                <li class="list-inline-item"><a href="contact.php">Contact me</a></li>
                <li class="list-inline-item"><a href="indexy.php#bottom_of_the_page">Socials</a></li>
            </ul>
        </footer>
    </div>




</body>
</html>