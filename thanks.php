<?php
    echo 'Merci ' . $_POST['user_firstname'] . ' ' . $_POST['user_lastname'] . ' ' .  
    'de nous avoir contacté pour une ' . $_POST['message_subject'] . 

    ', un de nos conseiller vous contactera soit à l’adresse : ' . $_POST['user_email'] . '  ou par téléphone au: ' . 
     $_POST['user_phoneNumber'] . ' dans les plus brefs délais pour traiter votre demande :<br>' . $_POST['user_message'];
     
    ?> 
