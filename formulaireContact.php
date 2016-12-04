<form method="POST">
        
	<div class="form-group">
            <input class="form-control sharp" id="txtName" name="txtName" type="text" placeholder="Entrez votre nom" required="true"/>
	</div>
	
	<div class="form-group">
            <input class="form-control sharp" id="txtEmail" name="txtEmail" type="text" placeholder="Entrez votre adresse courriel" required="true"/>
	</div>
	
	<div class="form-group">
            <textarea class="form-control sharp" cols="40" id="txtMessage" name="txtMessage" rows="10" placeholder="Entrez votre message" required="true"></textarea>
	</div>
	
	<div class="form-group">
		<button class="btn btn-primary sharp" name="submit" type="submit">ENVOYER</button>
	</div>
        <input type="hidden" id="time" name="time" value="<?php echo time(); ?>" />
	
        <div style="height: auto;"> 
            <?php
                        require 'messageNousJoindre.php';
                        if(!empty($_POST)){
                            $myTime = time() - $_POST['time'];
                            
                            if(messageValidationIsGood($_POST['txtName'], $_POST['txtEmail'], $_POST['txtMessage'], $myTime)){
                                $to      = 'samnicweb@gmail.com';
                                $subject = 'Un message de Charlevoix Conception Web';
                                $message = 'De :' . $_POST['txtName'] . "\n\n" . $_POST['txtMessage'];
                                $headers = $_POST['txtEmail'] . "\r\n" .
                                    'X-Mailer: PHP/' . phpversion();

                                mail($to, $subject, $message, $headers);
                                ?>
                                    <p>Message envoyé!</p>
                                <?php
                            }
                            else{    
                                echo messageValidation($_POST['txtName'], $_POST['txtEmail'], $_POST['txtMessage'], $myTime);
                            }
                        }
                        
            ?>
        </div>
</form>				

