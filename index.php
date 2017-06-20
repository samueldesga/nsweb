<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Charlevoix conception web">

    <title>NsWeb</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.6-dist/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Notre css custom -->
    <link href="stylesheet.css" rel="stylesheet">
    <!-- Fonts de google -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans">

  </head>

  <body>
    <section id="#presentation" class="section-presentation text-center">
        <div class="color-over">
            <?php include('navbar.html'); ?>

            <div class="container presentation">
                <img src="images/logo-cwd-1024-sans-ecriture.png">
                <p>Propulsez votre entreprise</p>
            </div>
        </div>
    </section>
      
    <section id="si-vous-souhaitez" class="section si-vous-souhaitez"> 
        <div class="container">
            <h2 class="text-center">Si vous souhaitez...</h2>
            
            <div class="souhaits-wrap">
                <div class="box left-box">
                    <p>Faire connaître votre entreprise sur le web et ressortir dans les recherches</p>    
                </div>
                
                <div class="box right-box">
                    <div class="">
                        <img src="images/haut-parleur.png" />
                    </div>
                </div>

                <div class="row"></div>              
           
                <div style="justify-content: flex-end;" class="box left-box">
                    <div>
                        <img src="images/maps-and-flags.png" />
                    </div>    
                </div>
                
                <div class="box right-box">
                    <p>Avoir un service clé en main, sans cassage de tête</p>
                </div>

                <div class="row"></div>
                
                <div class="box left-box last">
                    <p>Avoir un service de abordable et de qualité<p>
                </div>
                
                <div class="box right-box">
                    <div class="">
                        <img src="images/invention.png" />
                    </div>
                </div>
            </div>
            
            <p class="text-center solution">Nous avons la solution</p>
        </div>
    </section>
      
    <section id="ils-ont-travailles" class="section ils-ont-travailles color-lime"> 
        <div class="container">
            <h2 class="text-center">Ils ont travaillé avec nous...</h2>
            <div class="entreprises-wrapper">    
                <div class="col-lg-3 text-center e-box" role="button" data-frameid="frame1">
                    <img src="images/logo_entreprise/logo-audio-guide.png" />
                </div>
                <div class="col-lg-3 text-center e-box" role="button" data-frameid="frame2">
                    <img src="images/logo_entreprise/logo-maison-jocelyne-cote.png" />
                </div>
                <div class="col-lg-3 text-center e-box" role="button" data-frameid="frame3">
                    <img src="images/logo_entreprise/logo-salon-toilettage-phenix.png" />
                </div>
                <div class="col-lg-3 text-center e-box active" role="button" data-frameid="frame4">
                    <img src="images/logo_entreprise/logo-restaurant-motel-plage.png" />
                </div>
            </div> 
            <div class="text-center">
                <img id="frame1" class="hidden" style="height:450px;" src="images/frame-realisations.png"/>
                <img id="frame2" class="hidden" style="height:450px;" src="images/frame-realisations.png" />
                <img id="frame3" class="hidden" style="height:450px;" src="images/frame-realisations.png" />
                <img id="frame4" style="height:450px;" src="images/realisation-motel-de-la-plage.png" />
            </div>            
                        
           <!--<div class="text-center">
                <button class="btn btn-primary btn-lg sharp text-center">Voir nos réalisations</button> 
            </div>-->
        </div>
    </section>
      
    <section id="nous-joindre" class="section nous-contacter"> 
        <div class="container">
            <h2 class="text-center">Contactez nous</h2>
            <div class="contact-wrapper">
                <div class="col-lg-6 col-md-6 contact-information">
                    <table class="face">
                        <tr>
                            <td><img src="images/visage/NicFace.png"/></td>
                            <td>
                                <span>Nicolas Girard</span>
                                <p>Numero de telephone ?</p>
                            </td>
                        </tr>
                    </table>
                    <table class="face">
                        <tr>
                            <td><img src="images/visage/SamFace.png"/></td>
                            <td>
                                <span>Samuel Desgagnés</span>
                                <p>Numero de telephone ?</p>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-6 col-md-6 text-center">
                    <?php include('formulaireContact.php'); ?>
                </div>
            </div>
        </div>
    </section>
     

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="scripts/indexScript.js"></script>
    
  </body>
</html>