<?php

?>

<html lang="en">
    <body>
        <p>
            Merci <?=$_POST['user_firstname']?> <?=$_POST['user_lastname']?> de nous avoir contacté à propos de " <?=$_POST['user_subject']?>" <br/>
            <br/>
            Un de nos conseillers vous contactera soit à l’adresse <?=$_POST['user_mail']?>  ou par téléphone au <?=$_POST['user_telephone']?> dans les plus brefs délais pour traiter votre demande :<br/>
            <br/>
            <?=$_POST['user_message']?><br/>
        </p>
    </body>
</html>