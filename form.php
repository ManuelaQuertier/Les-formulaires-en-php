<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form action="thanks.php" method="post"> 
        <div>
            <label for="lastname">Nom :</label>
            <input type="text" id="lastname" name="user_lastname">
        </div>
        <div>
            <label for="firstname">Prénom :</label>
            <input type="text" id="firstname" name="user_firstname">
        </div>
        <div>
            <label for="mail">e-mail :</label>
            <input type="email" id="mail" name="user_email">
        </div>
        <div>
            <label for="phone">Numéro de téléphone :</label>
            <input type="tel" id="phone" name="user_phoneNumber">
        </div>
        <div>
            <label for="subject">Choisissez un sujet :</label>
            <select id="subject" name="message_subject">
                <option value="suggestion">Suggestion</option>
                <option value="réclamation">Réclamation</option>
                <option value="question">Question</option>
            </select> 
        </div>
        <div>
            <label for="msg">Message :</label>
            <textarea id="msg" name="user_message"></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>
    </form>   
</body>
</html>
