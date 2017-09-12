<!DOCTYPE html>
<html>
<title>Charlevoix Conception Web</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/w3.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
/* Full height image header */
.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("image/header-background.jpg");
    min-height: 100%;
}
.w3-bar .w3-button {
    padding: 16px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card-2" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide"></a>
    
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">À PROPOS</a>
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> ÉQUIPE</a>
      <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> RÉALISATIONS</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card-2 w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Fermer</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">À PROPOS</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">ÉQUIPE</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">RÉALISATIONS</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Propulsez votre entreprise</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Propulsez votre entreprise</span><br>
    <span class="w3-large">Laissez nous vous donner une place sur le web</span>
    <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">En apprendre plus</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <!--<i class="fa fa-facebook-official w3-hover-opacity"></i>-->
  </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">À PROPOS DE CHARLEVOIX CONCEPTION WEB</h3>
  <p class="w3-center w3-large">Nos valeurs</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Adaptabilité</p>
      <p>Tous nos site web s'adaptent en fonction du mobile sur lequel il est affiché. Que ce soit un ordinateur, une tablette ou un téléphone
      le résultat sera bon !</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Passion</p>
      <p>Le développement web fait partie de nos passions. Lorsque nous travaillons sur votre projet, nous y mettons notre coeur !</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Clé en main</p>
      <p>Un service clé en main, sans cassage de tête. Nous vous aiderons à convevoir et mener à terme votre projet.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Support</p>
      <p>Si vous rencontrez des problèmes, vous pourrez toujours compter sur notre support pour vous aider.</p>
    </div>
  </div>
</div>

<!-- Promo Section - "We know design" -->
<div class="w3-container w3-light-grey" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Nous connaissons le web.</h3>
      <p>Plusieurs entreprises nous ont fait confaince. Regardez ce qu'il en a donné.</p>
      <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i>&nbsp Voir Nos Réalisations</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="/nsweb/image/phone_buildings.jpg" alt="Buildings" width="700" height="394">
    </div>
  </div>
</div>

<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center">L'ÉQUIPE</h3>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px; display: flex; justify-content: center;">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card-2">
        <img src="image/visage/NicFace.jpg" alt="Nicolas Girard" style="width:100%">
        <div class="w3-container">
          <h3>Nicolas Girard</h3>
          <p class="w3-opacity">Programmeur web</p>
          <p>Sympathique et travaillant, il est le partenaire de choix pour votre projet.</p>
          <!--<p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>-->
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card-2">
        <img src="image/visage/SamFace.jpg" alt="Samuel Desgagnés" style="width:100%">
        <div class="w3-container">
          <h3>Samuel Desgagnés</h3>
          <p class="w3-opacity">Programmeur web</p>
          <p>Patenteux de naissance, il saura trouvez une solution à n'importe lequel de vos problèmes.</p>
          <!--<p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>-->
        </div>
      </div>
    </div>
    
  </div>
</div>

<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">

  <div class="w3-quarter">
    <span class="w3-xxlarge">7</span>
    <br>Projets web réalisés
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">12+</span>
    <br>Clients contents
  </div>
</div>

<!-- Work Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="work">
  <h3 class="w3-center">NOS RÉALISATIONS</h3>
  <p class="w3-center w3-large">Voyez le résultat par vous-même</p>

  <div class="w3-row-padding" style="margin-top:64px; display: flex; justify-content: center;">
    <div class="w3-col l3 m6">
        <img src="image/pedneault_pelouse_website_screenshot.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Pedneault Pelouse">
    </div>
    <div class="w3-col l3 m6">
        <img src="image/salon_toilettage_phenix_website_screenshot.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Salon de toilettage Le Phénix">
    </div>
    <div class="w3-col l3 m6">
        <img src="image/maison_jocelyne_cote_website_screenshot.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Maison d'hébergement Jocelyne Côté">
    </div>
  </div>

</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">�</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Skills Section -->
<div class="w3-container w3-padding-64" style="background-color: red;">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Nos compétences.</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
      tempor incididunt ut labore et dolore.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
      tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="w3-col m6">
      <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Programmation web</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-camera w3-margin-right"></i>Photographie</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:70%">70%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-photo w3-margin-right"></i>Photoshop</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:75%">50%</div>
      </div>
    </div>
  </div>
</div>


<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Entrons en contact. Envoyez nous un message:</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-half">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Baie-Saint-Paul, Qc</p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Téléphone: (418) 324-4700</p>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: samnicweb@gmail.com</p>
      <br>
      <form method="POST" name="sentMessage" id="contactForm">
        <p>
            <input value='<?php echo isset($_POST['txtName']) ? $_POST['txtName'] : '' ?>' class="w3-input w3-border" type="text" placeholder="Nom" required data-validation-required-message="S'il vous plait, entrez votre nom." name="Name" id="txtName">
            <p class="help-block text-danger"></p>
        </p>
        <p>
            <input value='<?php echo isset($_POST['txtEmail']) ? $_POST['txtEmail'] : '' ?>' class="w3-input w3-border" type="email" placeholder="Courriel"  required data-validation-required-message="S'il vous plait, entrez votre adresse courriel." name="Email" id="txtEmail">
            <p class="help-block text-danger"></p>
        </p>
        <p>
            <input value='<?php echo isset($_POST['txtPhone']) ? $_POST['txtPhone'] : '' ?>' class="w3-input w3-border" type="tel" placeholder="Telephone" name="Phone" id="txtPhone">
            <p class="help-block text-danger"></p>
        </p>
        <p>
            <input value='<?php echo isset($_POST['txtMessage']) ? $_POST['txtMessage'] : '' ?>' class="w3-input w3-border" type="text" placeholder="Message" required data-validation-required-message="S'il vous plait, écrivez un message." name="Message" id="txtMessage">
            <p class="help-block text-danger"></p>
        </p>
        <p>
          <div id="success"></div>
          <button class="w3-button w3-black" type="submit">
            <i class="fa fa-paper-plane"></i> ENVOYER MESSAGE
          </button>
        </p>
        <input type="hidden" id="time" name="time" value="<?php echo time(); ?>" />
      </form>
    </div>
    <div class="w3-half">
      <!-- Add Google Maps -->
      
      <iframe id="googleMap" class="w3-greyscale-max" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1381851.3294744242!2d-71.58291893530995!3d47.432839904403856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe887d97e5e013b8b!2sConception+Web+Charlevoix!5e0!3m2!1sfr!2sus!4v1503289385562" width="100%" height="510px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Haut de page</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
  </div>
</footer>
 
<!-- Add Google Maps -->
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"> </script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
<script src="script/jqBootstrapValidation.js" type="text/javascript"></script>
<script src="script/script.js" type="text/javascript"></script>
<script src="script/contact_me.js" type="text/javascript"></script>

</body>
</html>
