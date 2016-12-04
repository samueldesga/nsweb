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
    <section class="section-presentation text-center">
        <div class="color-over">
            <?php include('navbar.html'); ?>

            <div class="container presentation">
                <img src="images/logo-cwd-1024-sans-ecriture.png">
                <p>Propulsez votre entreprise</p>
            </div>
        </div>
    </section>
      
    <section class="section si-vous-souhaitez color-beige"> 
        <div class="container">
            <h2 class="text-center">Si vous souhaitez...</h2>
            
            <div class="souhaits-wrap">
                <div class="box left-box">
                    <p>Faire connaître votre entreprise sur le web et ressortir dans les recherches</p>    
                </div>
                
                <div class="box right-box">
                    <div style="height: 100px; width: 100px; background-color: #000;">
                        
                    </div>
                </div>

                <div class="row"></div>              
           
                <div class="box right-box">
                    <p>Avoir un service clé en main, sans cassage de tête, contenu contenu</p>
                </div>

                <div class="row"></div>
                
                
                <div class="box left-box last">
                    <p>Avoir un service de ABORDABLE et de QUALITÉ, ajout du contenu ici<p>
                </div>
            </div>
            
            <p class="text-center solution">Nous avons la solution</p>
        </div>
    </section>
      
    <section class="section ils-ont-travailles color-lime"> 
        <div class="container">
            <h2 class="text-center">Ils ont travaillé avec nous...</h2>
            <div class="entreprises-wrapper">
                <div class="col-lg-3 text-center">
                    <img src="images/logo_entreprise/logo-audio-guide.png" />
                </div>
                <div class="col-lg-3 text-center">
                    <img src="images/logo_entreprise/logo-maison-jocelyne-cote.png" />
                </div>
                <div class="col-lg-3 text-center">
                    <img src="images/logo_entreprise/logo-salon-toilettage-phenix.png" />
                </div>
                <div class="col-lg-3 text-center">
                    <img src="images/logo_entreprise/logo-restaurant-motel-plage.png" />
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-primary btn-lg sharp text-center">Voir nos réalisations</button>
            </div>
        </div>
    </section>
      
    <section class="section nous-contacter"> 
        <div class="container">
            <h2 class="text-center">Contactez nous</h2>

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
    </section>
     

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="scripts/indexScript.js"></script>
    
  </body>
</html>