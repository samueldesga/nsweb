<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Nous joindre</title>
        <link href="bootstrap-3.3.6-dist/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <section class="section-presentation section-center">
            <?php include('navbar.html'); ?>
        </section>  
        <section class=""> 
            <div class="container">
                <div class="col-lg-6">
                    <form id="formNousJoindre" method="POST">
                        <h2 class="h2">Courriel<a name="scrollCourriel"></a></h2>
                        <ul class="ulJoindre">
                            <li><strong>Nom :</strong></li>
                            <li class="marginBot1em">
                                <input class="input-sm" style="max-width: 100%;" type="text" value='<?php echo isset($_POST['txtName']) ? $_POST['txtName'] : '' ?>' name="txtName" id="txtName"/></li>



                        </ul>

                        <ul class="ulJoindre">



                            <li><strong>Adresse courriel :</strong></li>
                            <li class="marginBot1em">
                                <input class="input-sm" style="max-width: 100%;" type="text" value='<?php echo isset($_POST['txtEmail']) ? $_POST['txtEmail'] : '' ?>' name="txtEmail" id="txtEmail"/>

                            </li>



                        </ul>
                        <ul class="ulJoindre">



                            <li><strong>Message :</strong></li>
                            <li>
                                <textarea class="input-lg" type="text" name="txtMessage" id="txtMessage" style="width: 100%;" rows="8"><?php echo isset($_POST['txtMessage']) ? $_POST['txtMessage'] : '' ?></textarea>
                            </li>


                        </ul>
                        <div class="divMessageError"> 
                            <?php
                                        require 'recaptcha.php';
                                        require 'messageNousJoindre.php';
                                        if(!empty($_POST)){
                                            $captcha = new Recaptcha('6Lfa0P8SAAAAAKCRr5T0HJdkRSWPyVpNAFthNDZF');
                                            if(messageValidationIsGood($_POST['txtName'], $_POST['txtEmail'], $_POST['txtMessage']) && 
                                                    $captcha -> checkCode($_POST['g-recaptcha-response'])){
                                                //header("Location: messageSent.php");
                                                echo "Message sent!";
                                                exit();
                                            }
                                            else{    
                                                echo messageValidation($_POST['txtName'], $_POST['txtEmail'], $_POST['txtMessage']);
                                            }
                                        }
                            ?>
                        </div>

                        <ul class="ulJoindre">
                            <li>

                                <div class="recaptchaContainer">
                                    <div class="g-recaptcha" id="captCha" data-sitekey="6Lfa0P8SAAAAAC-K25qBIyqtvwNUtQx9FnaxAurL"></div>
                                </div>

                                <div class="submitButtonDiv">

                                    <button class="btn btn-success " type="submit" id="buttonSubmit" >Soumettre</button>
                                </div>
                            </li>
                        </ul>
                    </form>
                </div>
                <div class="col-lg-6" style="font-size: 150px;">
                    
                        Charlevoix
                    
                </div>
            </div>
        </section>
        <?php
            include("footer.php");
        ?>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </body>
</html>
