<?php
    
    function messageValidation($_name, $_email, $_message, $_myTime){
        $minTime = 8;
        if($_name == null){
            return "Veuillez saisir votre nom";
        }
        elseif(!filter_var($_email, FILTER_VALIDATE_EMAIL)){
            return "Veuillez saisir un courriel valide";
        }
        elseif ($_message == null) {
            return "Veuillez saisir votre message";
        }  
        elseif ($_myTime < $minTime) {
            return "Vous avez écrit votre message trop vite!";
        }  
        else{
            return "Veuillez remplir le captcha correctement";
        }
    }
    function messageValidationIsGood($_name, $_email, $_message, $_myTime){
        $minTime = 8;
        if($_name == null || $_message == null || $_myTime < $minTime || !filter_var($_email, FILTER_VALIDATE_EMAIL)){
            return false;
        }
        return true;
    }
?>