<?php
    function messageValidation($_name, $_email, $_message){

        if($_name == null){
            return "Veuillez saisir votre nom";
        }
        elseif(!filter_var($_email, FILTER_VALIDATE_EMAIL)){
            return "Veuillez saisir un courriel valide";
        }
        elseif ($_message == null) {
            return "Veuillez saisir votre message";
        }       
        else{
            return "Veuillez remplir le captcha correctement";
        }
    }
    function messageValidationIsGood($_name, $_email, $_message){

        if($_name == null || $_message == null || !filter_var($_email, FILTER_VALIDATE_EMAIL)){
            return false;
        }
        return true;
    }
?>