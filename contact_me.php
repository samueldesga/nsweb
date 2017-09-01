<?php
// Check for empty fields
$minTime = 8;
$validationString = array();
$phone = "";


if(empty($_POST['name'])){
    
    array_push($validationString, "-Veuillez entrer votre nom");
}

if(empty($_POST['email'])){
    array_push($validationString, "-Veuillez entrer votre adresse courriel");
}

if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) && !empty($_POST['email'])){
   array_push($validationString, "-Format d'adresse courriel invalide");
    
}

if(empty($_POST['message'])){
    array_push($validationString, "-Veuillez entrer votre message");
}
   
//Complete form too fast
$timeToCompleteForm = time() - $_POST['time'];
if($timeToCompleteForm < $minTime){
    
    array_push($validationString, "-Vous avez rempli le formulaire trop vite!");
    
}

//valid phone number
if((!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i", $_POST['phone'])) && !empty($_POST['phone'])){
    array_push($validationString, "-Format de numero de telephone invalide");
    
}

if(count($validationString) == 0){ //No errors in message form
    // Create the email and send the message

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if(!empty($_POST['phone'])){
    $phone = $_POST['phone'];
}

$to = 'samueldesga@gmail.com, pomme@isleauxcoudres.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Pedneault Pelouse";
$email_body = "Detail du courriel:\n\nNom: $name\n\nCourriel: $email\n\nTelephone: $phone\n\nMessage:\n\n$message\n";
$headers = "De: noreply@pedneaultpelouse.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email";   
mail($to,$email_subject,$email_body,$headers);
}

header('Content-Type: application/json');
echo json_encode($validationString);
