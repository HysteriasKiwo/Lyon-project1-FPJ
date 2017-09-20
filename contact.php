
<h1>Nous Contacter</h1>

<?php
if (isset($_GET['verif'])) {
    if (!empty($_POST)) {
        // VERIF USER NAME //
        if (empty($_POST['name'])) {
            $erreur .= "1,";
        }
        // VERIF USER PHONE //
        if (!empty($_POST['tel'])) {
            $regex = "/^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}$/";
            if (!preg_match($regex, $_POST['tel'])) {
                $erreur .= "2,";
            }
        } else {
            $erreur .= "3,";
        }
        // VERIF USER MAIL //
        if (!empty($_POST['email'])) {
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
                $erreur .= "4,";
            }
        } else {
            $erreur .= "5,";
        }


        // VERIF USER MESSAGE //
        if (empty($_POST['user_message'])) {
            $erreur .= "6,";
        }

    }

}
if (!empty($erreur)) {

    ?>
    <div class="row">
    <div class="col-md-12 erreur" id="erreur">
        <?php
        $verifErreur = explode(",", $erreur);
        $verifErreur = array_filter($verifErreur);

        foreach ($verifErreur as $keyErreur) {
            echo $nomErreur[$keyErreur] . "<br />";
        }
        ?>
    </div>
    </div>
    <?php

}
?>


<form action="?page=contact&verif" method="post" role="form">
    <div class="row">
        <div class="col-md-6">


            <div class="form-group">
                <label for="name">Votre nom :</label>
                <div class="input-group">
                    <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Jean...">
                </div>

                <label for="email">Votre email :</label>
                <div class="input-group">
                    <div class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></div>
                    <input type="text" class="form-control" name="email" id="email" placeholder="bug@burger.fr...">
                </div>

                <label for="tel">Votre téléphone :</label>
                <div class="input-group">
                    <div class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></div>
                    <input type="text" class="form-control" name="tel" id="tel" placeholder="06...">
                </div>


            </div>
        </div>
        <div class="col-md-6">
            <label for="message">Votre message :</label>
            <textarea class="form-control" name="message" id="messsage" placeholder="Votre message" rows="5"></textarea>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>

    </div>
</form>
<script>
    function fadeOutErreur()
    {
    $("#erreur").addClass("animated fadeOut");

    }

    function masquerNotification()
    {
        document.getElementById("erreur").innerHTML="";
    }

    window.setTimeout(fadeOutErreur, 4000);
    window.setTimeout(masquerNotification, 4500);

</script>

