<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content mus#t come *after* these tags -->
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

            <div class="logo-top-margin container">
                <img src="images/logo-cwd-1024_2.png" class="presentation-text"> 
            </div>
        </div>
    </section>
      
    <section class="section si-vous-souhaitez color-beige"> 
        <div class="container">
            <h2 class="text-center">Si vous souhaitez...</h2>
            
            <div class="souhaits-wrap">
                <div class="col-lg-4 col-md-4">
                    <p>Faire connaître votre entreprise sur le web et ressortir dans les recherches</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <p>Avoir un service clé en main, sans cassage de tête, contenu contenu</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <p>Avoir un service de ABORDABLE et de QUALITÉ, ajout du contenu ici<p>
                </div>
            </div>
            
            <p class="text-center" style="font-size: 4em; padding-top:3em;">Nous avons la solution</p>
        </div>
    </section>
      
    <section class="section text-center color-lime"> 
        <h2>Ils ont travaillé avec nous...</h2>
        
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>      
        
        <button class="btn btn-primary btn-lg sharp">Voir nos réalisations</button>
    </section>
      
    <section class="section"> 
        <div class="container">
            <h2 class="text-center">Contactez nous</h2>

            <div style="height:300px;" class="col-lg-6 col-md-6 text-center">
                <p>NOS FACE ICI PIS TOUTE PIS TOUTE</p>
            </div>
            <div style="height:300px;" class="col-lg-6 col-md-6 text-center">
                <p>LE FORMULAIRE</p>
                <?php include('formulaireContact.php'); ?>
            </div>
        </div>
    </section>
     

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="scripts/indexScript.js"></script>
    
  </body>
</html>