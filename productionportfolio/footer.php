<!-- Footer -->
<footer class="page-footer font-small pt-4 dropFont"> 
  
  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left footerBox"> 
    
    <!-- Grid row -->
    <div class="row"> 
      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3 footerBox"> 
        
        <!-- Links -->
        <h4 class="footerTextLG">Quick Links</h4>
        <ul class="list-unstyled footerBox">
          <li> <a  href="#" class="footerLink" id="homeBtn1">Home</a> </li>
          <li> <a  href="#" class="footerLink" id="aboutBtn1">About</a> </li>
          <li> <a  href="#" class="footerLink" id="workBtn1" >My Work</a> </li>
          <li> <a  href="#" class="footerLink" id="contactBtn1" >Contact</a> </li>
        </ul>
      </div>
      <!-- Grid column --> 
      
      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3 footerBox">
        <hr class="clearfix w-100 d-md-none pb-3">
        <!-- Content -->
        <h4 class="footerTextLG">Chad Kohl</h4>
        <?php
        if ( isset( $_SESSION[ "id" ] ) ) {
          echo "<h5 class='footerTextSM'>Phone:</h5>
                   <a class='footerLink' href='tel:+1719*******'>
            		(719)271-4633
            		</a><br><br>";
        };
        ?>
        <h5 class="footerTextSM"> Email: </h5>
        <ul class="list-unstyled footerBox">
          <li><a class="footerLink" href="mailto:ckohl401@gmail.com"> ckohl401@gmail.com </a></li>
        </ul>
      </div>
      <!-- Grid column -->
      
      <hr class="clearfix w-100 d-md-none pb-3">
      
      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3 footerBox"> 
        
        <!-- Links -->
        <h5 class="footerTextLG">Legal</h5>
        <ul class="list-unstyled footerBox">
          <li> <a class="footerLink" href="#" id="privacy">Privacy Policy</a> </li>
          <li> <a class="footerLink" href="#" id="cookies">Cookie Policy</a> </li>
          <li><a  class="termly-cookie-preference-button footerLink" href="#" onclick="displayPreferenceModal()">Manage Cookie Preferences</a></li>
        </ul>
      </div>
      <!-- Grid column --> 
      
    </div>
    <!-- Grid row --> 
    
  </div>
  <!-- Footer Links --> 
  
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 footerBox">© 2020 Copyright: <a class="footerLink" href="http://www.ckohl.com"> Ckohl.com</a> </div>
  <!-- Copyright --> 
  
</footer>
<!-- Footer -->

</div>
</div>
<script src="js/uiEvents.js"></script> 
<script>
$(".linkCustom").click(function(){
	$(".linkCustom").removeClass('active activeLink');
	$(this).addClass('active activeLink'); 
});
</script> 
<script> document.getElementById("loginForm").addEventListener('click', function (event) {
    
    event.stopPropagation();
  });</script> 

<script src="js/validateLogin.js"></script> 
<script>
  (function () {
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = 'https://app.termly.io/embed.min.js';
    s.id = '3f3d8261-a1d9-4048-8a87-80785536debc';
    s.setAttribute("data-name", "termly-embed-banner");
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
  })();
</script>
</body></html>