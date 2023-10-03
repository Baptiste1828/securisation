<?php

$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty(trim($_POST['user_lastname'])))
        $errors[] = 'The lastname is required';
    if (empty(trim($_POST['user_firstname'])))
        $errors[] = 'The firstname is required';
    if (empty(trim($_POST['user_mail'])))
        $errors[] = 'The mail adress is required';
    if (!filter_var($_POST['user_mail'], FILTER_VALIDATE_EMAIL))
        $errors[] = 'The mail address is not correct';
    if (empty(trim($_POST['user_telephone'])))
        $errors[] = 'The telephone number is required';
    if (empty(trim($_POST['user_subject'])))
        $errors[] = 'The subject is required';
    if (empty(trim($_POST['user_message'])))
        $errors[] = 'The message is required';
    if(empty($errors)) {
        // traitement du formulaire
        // puis redirection
       header('Location: thanks.php');
    }
    
}

?>

<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>My test page</title>
    <style>
        form {
        /* On centre le formulaire */
        margin: 0 auto;
        width: 400px;
        /* Le contour du formulaire */
        padding: 1em;
        border: 1px solid #ccc;
        border-radius: 1em;
        }

        ul {
        list-style: none;
        padding: 0;
        margin: 0;
        }

        form li + li {
        margin-top: 1em;
        }

        label {
        /* Taille et alignement uniformes */
        display: inline-block;
        width: 90px;
        text-align: right;
        }

        input,
        textarea {
        /* On s'assure que les champs texte ont la même police
            Par défaut, les zones de texte ont une police à chasse
            fixe. */
        font: 1em sans-serif;

        /* Taille uniforme pour des champs */
        width: 300px;
        box-sizing: border-box;

        /* On utilise la même bordure que pour le formulaire */
        border: 1px solid #999;
        }

        input:focus,
        textarea:focus {
        /* On rajoute une mise en avant pour les éléments avec
            le focus. */
        border-color: #000;
        }

        textarea {
        /* On aligne les textes sur plusieurs lignes avec leur
            libellé. */
        vertical-align: top;

        /* On fournit un peut d'espace pour saisir du texte. */
        height: 5em;

        /* On permet de redimensionner verticalement. */
        resize: vertical;
        }

        .button {
        /* On aligne les boutons avec les champs texte. */
        padding-left: 90px; /* La même taille que les libellés */
        }

        button {
        /* Une marge supplémentaire représentant approximativement
            le même espace qu'entre les libellés et les champs. */
        margin-left: 0.5em;
        }

    </style>
  </head>
  <body>
    <?php // Affichage des éventuelles erreurs 
        if (count($errors) > 0) : ?>
        <div>
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
    <form action="index.php" method="post">
        <ul>
            <li>
                <label for="lastname">Nom&nbsp;:</label>
                <input type="text" id="lastname" name="user_lastname" required/>
            </li>
            <li>
                <label for="firstname">Prénom&nbsp;:</label>
                <input type="text" id="firstname" name="user_firstname" required/>
            </li>
            <li>
                <label for="mail">E-mail&nbsp;:</label>
                <input type="email" id="mail" name="user_mail" required/>
            </li>
            <li>
                <label for="telephone">Téléphone&nbsp;:</label>
                <input type="tel" id="telephone" name="user_telephone" required/>
            </li>
            <li>
                <label for="subject">Sujet&nbsp;:</label>
                <select id="subject" name="user_subject" required>
                    <option value="chien">Chien</option>
                    <option value="chat">Chat</option>
                    <option value="hamster">Hamster</option>
                    <option value="poisson">Poisson</option>
                </select>
            </li>
            <li>
                <label for="msg">Message&nbsp;:</label>
                <textarea id="msg" name="user_message" required></textarea>
            </li>
        </ul>
        <div class="button">
            <button type="submit">Envoyer le message</button>
        </div>
    </form>
  </body>
</html>