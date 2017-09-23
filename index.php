<!DOCTYPE html>
<html>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Conception Web Charlevoix est la solution abordable, simple et efficace pour un site web clé en main.">
<meta name="keywords" content="web, site, hébergement, site web, site internet">

<title>Conception Web Charlevoix</title>

<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="shortcut icon" href="image/icon_conception_web_charlevoix.png" />
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
.ccw-bar .ccw-button {
    padding: 16px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="ccw-top">
  <div class="ccw-bar ccw-white ccw-card-2" id="myNavbar">
    <a id="nav-logo" href="#home" class="ccw-bar-item ccw-button ccw-wide"><img src="image/logo_exported_50_v3.png" /></a>
    
    <!-- Right-sided navbar links -->
    <div class="ccw-right ccw-hide-small">
      <a href="#about" class="ccw-bar-item ccw-button">À PROPOS</a>
      <a href="#team" class="ccw-bar-item ccw-button"><i class="fa fa-user"></i> ÉQUIPE</a>
      <a href="#work" class="ccw-bar-item ccw-button"><i class="fa fa-th"></i> RÉALISATIONS</a>
      <a href="#contact" class="ccw-bar-item ccw-button"><i class="fa fa-envelope"></i> CONTACT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="ccw-bar-item ccw-button ccw-right ccw-hide-large ccw-hide-medium" onclick="ccw_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="ccw-sidebar ccw-bar-block ccw-black ccw-card-2 ccw-animate-left ccw-hide-medium ccw-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="ccw_close()" class="ccw-bar-item ccw-button ccw-large ccw-padding-16">Fermer</a>
  <a href="#about" onclick="ccw_close()" class="ccw-bar-item ccw-button">À PROPOS</a>
  <a href="#team" onclick="ccw_close()" class="ccw-bar-item ccw-button">ÉQUIPE</a>
  <a href="#work" onclick="ccw_close()" class="ccw-bar-item ccw-button">RÉALISATIONS</a>
  <a href="#contact" onclick="ccw_close()" class="ccw-bar-item ccw-button">CONTACT</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 ccw-display-container" id="home">
  <div class="ccw-display-left ccw-text-white" style="padding:48px">
    <span class="ccw-jumbo ccw-hide-small">Propulsez votre entreprise</span><br>
    <span class="ccw-xxlarge ccw-hide-large ccw-hide-medium">Propulsez votre entreprise</span><br>
    <span class="ccw-large">Laissez-nous vous donner une place sur le web</span>
    <p><a href="#about" class="ccw-button ccw-red ccw-padding-large ccw-large ccw-margin-top ccw-hover-opacity-off">En apprendre plus</a></p>
  </div> 
  <div class="ccw-display-bottomleft ccw-text-grey ccw-large" style="padding:24px 48px">
    <!--<i class="fa fa-facebook-official ccw-hover-opacity"></i>-->
  </div>
</header>

<!-- About Section -->
<div class="ccw-container" style="padding:128px 16px" id="about">
  <h3 class="ccw-center">À PROPOS DE CONCEPTION WEB CHARLEVOIX</h3>
  <p class="ccw-center ccw-large">Nos valeurs</p>
  <div class="ccw-row-padding ccw-center" style="margin-top:64px">
    <div class="ccw-quarter">
      <i class="fa fa-desktop ccw-margin-bottom ccw-jumbo ccw-center"></i>
      <p class="ccw-large">Adaptabilité</p>
      <p>Tous nos sites web s'adaptent en fonction du mobile sur lequel ils sont affichés. Que ce soit un ordinateur, une tablette ou un téléphone le résultat sera bon !</p>
    </div>
    <div class="ccw-quarter">
      <i class="fa fa-heart ccw-margin-bottom ccw-jumbo"></i>
      <p class="ccw-large">Passion</p>
      <p>Le développement web fait partie de nos passions. Lorsque nous travaillons sur votre projet, nous y mettons notre coeur !</p>
    </div>
    <div class="ccw-quarter">
      <i class="fa fa-diamond ccw-margin-bottom ccw-jumbo"></i>
      <p class="ccw-large">Clé en main</p>
      <p>Un service clé en main, sans cassage de tête. Nous vous aiderons à concevoir et mener à terme votre projet.</p>
    </div>
    <div class="ccw-quarter">
      <i class="fa fa-cog ccw-margin-bottom ccw-jumbo"></i>
      <p class="ccw-large">Support</p>
      <p>Si vous rencontrez des problèmes, vous pourrez toujours compter sur notre support pour vous aider.</p>
    </div>
  </div>
</div>

<!-- Promo Section - "We know design" -->
<div class="ccw-container ccw-light-grey" style="padding:128px 16px">
  <div class="ccw-row-padding">
    <div class="ccw-col m6">
      <h3>Nous connaissons le web.</h3>
      <p>Plusieurs entreprises nous ont fait confiance. Regardez le résultat.</p>
      <p><a href="#work" class="ccw-button ccw-black"><i class="fa fa-th"> </i>&nbsp Voir Nos Réalisations</a></p>
    </div>
    <div class="ccw-col m6">
      <img class="ccw-image ccw-round-large" src="image/phone_buildings.jpg" alt="Buildings" width="700" height="394">
    </div>
  </div>
</div>

<!-- Team Section -->
<div class="ccw-container" style="padding:128px 16px" id="team">
  <h3 class="ccw-center">L'ÉQUIPE</h3>
  <div class="ccw-row-padding" style="margin-top:64px; display: flex; justify-content: center;">
    <div class="ccw-col l3 m6 ccw-margin-bottom">
      <div class="ccw-card-2">
        <img src="image/visage/NicFace.jpg" alt="Nicolas Girard" style="width:100%">
        <div class="ccw-container">
          <h3>Nicolas Girard</h3>
          <p class="ccw-opacity">Programmeur web</p>
          <p>Sympathique et travaillant, il saura vous guider et vous aider à réaliser votre projet.</p>
          <!--<p><button class="ccw-button ccw-light-grey ccw-block"><i class="fa fa-envelope"></i> Contact</button></p>-->
        </div>
      </div>
    </div>
    <div class="ccw-col l3 m6 ccw-margin-bottom">
      <div class="ccw-card-2">
        <img src="image/visage/SamFace.jpg" alt="Samuel Desgagnés" style="width:100%">
        <div class="ccw-container">
          <h3>Samuel Desgagnés</h3>
          <p class="ccw-opacity">Programmeur web</p>
          <p>Grand débrouillard de naissance, il saura trouver une solution à tous vos problèmes.</p>
          <!--<p><button class="ccw-button ccw-light-grey ccw-block"><i class="fa fa-envelope"></i> Contact</button></p>-->
        </div>
      </div>
    </div>
    
  </div>
</div>

<!-- Promo Section "Statistics" -->
<div class="ccw-container ccw-row ccw-center ccw-dark-grey ccw-padding-64">

  <div class="ccw-half">
    <span class="ccw-xxlarge">7</span>
    <br>Projets web réalisés
  </div>
  <div class="ccw-half">
    <span class="ccw-xxlarge">12+</span>
    <br>Clients contents
  </div>
</div>

<!-- Work Section -->
<div class="ccw-container ccw-light-grey" style="padding:128px 16px" id="work">
  <h3 class="ccw-center">NOS RÉALISATIONS</h3>
  <p class="ccw-center ccw-large">Voyez le résultat par vous-même</p>

  <div class="ccw-row-padding" style="margin-top:64px; display: flex; justify-content: center;">
    <div class="ccw-col l3 m6">
        <img src="image/realisations/pedneault_pelouse_website_screenshot.png" style="width:100%" onclick="onClick('image/realisations/pedneaultpelouse_compressed.png')" class="ccw-hover-opacity" alt="Pedneault Pelouse">
    </div>
    <div class="ccw-col l3 m6">
        <img src="image/realisations/salon_toilettage_phenix_website_screenshot.png" style="width:100%" onclick="onClick('image/realisations/salontoilettagephenix_compressed.png')" class="ccw-hover-opacity" alt="Salon de toilettage Le Phénix">
    </div>
    <div class="ccw-col l3 m6">
        <img src="image/realisations/maison_jocelyne_cote_website_screenshot.png" style="width:100%" onclick="onClick('image/realisations/maisonhebergementjocelynecote_compressed.png')" class="ccw-hover-opacity" alt="Maison d'hébergement Jocelyne Côté">
    </div>
  </div>
  <div class="ccw-row-padding" style="margin-top:64px; display: flex; justify-content: center;">
    <div class="ccw-col l3 m6">
        <img src="image/realisations/comptoirsushi_screenshot.png" style="width:100%" onclick="onClick('image/realisations/comptoirsushi_compressed.png')" class="ccw-hover-opacity" alt="Pedneault Pelouse">
    </div>
    <div class="ccw-col l3 m6">
        <img src="image/realisations/audioguideisleauxcoudres_screenshot.png" style="width:100%" onclick="onClick('image/realisations/audioguideisleauxcoudres_compressed.png')" class="ccw-hover-opacity" alt="Salon de toilettage Le Phénix">
    </div>
    <div class="ccw-col l3 m6">
        <img src="image/realisations/restaurantmoteldelaplage_screenshot.png" style="width:100%" onclick="onClick('image/realisations/restaurantmoteldelaplage_compressed.png')" class="ccw-hover-opacity" alt="Maison d'hébergement Jocelyne Côté">
    </div>
  </div>

</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="ccw-modal ccw-black" onclick="this.style.display='none'">
  <span class="ccw-button ccw-xxlarge ccw-black ccw-padding-large ccw-display-topright" title="Close Modal Image">X</span>
  <div class="ccw-modal-content ccw-animate-zoom ccw-center ccw-transparent ccw-padding-64">
    <img id="img01" class="ccw-image">
    <p id="caption" class="ccw-opacity ccw-large"></p>
  </div>
</div>

<!-- Skills Section -->
<div class="ccw-container ccw-padding-64">
  <div class="ccw-row-padding">
    <div class="ccw-col m6">
      <h3>Nos compétences.</h3>
      <p>De la programmation web à la prise de photos, <br/>nous mettons en oeuvre plusieurs compétences 
      pour réaliser votre projet.</p>
    </div>
    <div class="ccw-col m6">
      <p class="ccw-wide"><i class="fa fa-desktop ccw-margin-right"></i>Programmation web</p>
      <div class="ccw-grey">
        <div class="ccw-container ccw-red ccw-center" style="width:85%">85%</div>
      </div>
      <p class="ccw-wide"><i class="fa fa-camera ccw-margin-right"></i>Photographie</p>
      <div class="ccw-grey">
        <div class="ccw-container ccw-red ccw-center" style="width:70%">70%</div>
      </div>
      <p class="ccw-wide"><i class="fa fa-photo ccw-margin-right"></i>Photoshop</p>
      <div class="ccw-grey">
        <div class="ccw-container ccw-red ccw-center" style="width:65%">65%</div>
      </div>
    </div>
  </div>
</div>


<!-- Contact Section -->
<div class="ccw-container ccw-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="ccw-center">CONTACT</h3>
  <p class="ccw-center ccw-large">Entrons en contact. Envoyez-nous un message.</p>
  <div class="ccw-row-padding" style="margin-top:64px">
    <div class="ccw-half">
      <p><i class="fa fa-map-marker fa-fw ccw-xxlarge ccw-margin-right"></i> Baie-Saint-Paul, Qc</p>
      <p><i class="fa fa-phone fa-fw ccw-xxlarge ccw-margin-right"></i> Téléphone: (418) 324-4700</p>
      <p><i class="fa fa-envelope fa-fw ccw-xxlarge ccw-margin-right"> </i> Email: samnicweb@gmail.com</p>
      <br>
      <form method="POST" name="sentMessage" id="contactForm">
        <p>
            <input value='<?php echo isset($_POST['txtName']) ? $_POST['txtName'] : '' ?>' class="ccw-input ccw-border" type="text" placeholder="Nom" required data-validation-required-message="S'il vous plait, entrez votre nom." name="Name" id="txtName">
            <p class="help-block text-danger"></p>
        </p>
        <p>
            <input value='<?php echo isset($_POST['txtEmail']) ? $_POST['txtEmail'] : '' ?>' class="ccw-input ccw-border" type="email" placeholder="Courriel"  required data-validation-required-message="S'il vous plait, entrez votre adresse courriel." name="Email" id="txtEmail">
            <p class="help-block text-danger"></p>
        </p>
        <p>
            <input value='<?php echo isset($_POST['txtPhone']) ? $_POST['txtPhone'] : '' ?>' class="ccw-input ccw-border" type="tel" placeholder="Telephone" name="Phone" id="txtPhone">
            <p class="help-block text-danger"></p>
        </p>
        <p>
            <input value='<?php echo isset($_POST['txtMessage']) ? $_POST['txtMessage'] : '' ?>' class="ccw-input ccw-border" type="text" placeholder="Message" required data-validation-required-message="S'il vous plait, écrivez un message." name="Message" id="txtMessage">
            <p class="help-block text-danger"></p>
        </p>
        <p>
          <div id="success"></div>
          <button class="ccw-button ccw-black" type="submit">
            <i class="fa fa-paper-plane"></i> ENVOYER LE MESSAGE
          </button>
        </p>
        <input type="hidden" id="time" name="time" value="<?php echo time(); ?>" />
      </form>
    </div>
    <div class="ccw-half">
      <!-- Add Google Maps -->
      
      <iframe id="googleMap" class="ccw-greyscale-max" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1381851.3294744242!2d-71.58291893530995!3d47.432839904403856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe887d97e5e013b8b!2sConception+Web+Charlevoix!5e0!3m2!1sfr!2sus!4v1503289385562" width="100%" height="510px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="ccw-center ccw-black ccw-padding-64">
  <a href="#home" class="ccw-button ccw-light-grey"><i class="fa fa-arrow-up ccw-margin-right"></i>Haut de page</a>
  <div class="ccw-xlarge ccw-section">
      <i onclick="location.href='https://www.facebook.com/conceptionwebcharlevoix/'" class="fa fa-facebook-official ccw-hover-opacity"></i>
  </div>
</footer>
 

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"> </script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
<script src="script/jqBootstrapValidation.js" type="text/javascript"></script>
<script src="script/script.js" type="text/javascript"></script>
<script src="script/contact_me.js" type="text/javascript"></script>

</body>
</html>
