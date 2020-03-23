<?php wp_footer() ; ?>

<!-- Footer -->

<footer class="w3-center w3-black w3-padding-64">

 <div class="w3-container"> <a href="#home" class="w3-button w3-blue w3-round-xxlarge"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
 </div>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
  


  <div class="col-md-6 col-lg-3 float-left">
								<!-- Text widget-->
								<aside class="widget widget_text">
									<div class="widget-title">
										<h5>EST-SB</h5>
									</div>
									<div class="textwidget">
					
										<p>L’Ecole Supérieure de Technologie Sidi Bennour (ESTSB) est un établissement public d’enseignement supérieur à finalité de formation des Techniciens Supérieurs Elle a été créée en Août 2016 par le Ministère de l’Enseignement Supérieur,de la Formation des Cadres et de la Recherche Scientifique du Royaume du Maroc.</</p>
								</aside>
							</div>


</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>