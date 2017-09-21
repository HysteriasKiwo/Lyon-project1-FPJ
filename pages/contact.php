<h2>Nous Contacter</h2>

<?php
if (isset($_GET['verif']) AND (!empty($_POST))) {
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
    if (empty($_POST['message'])) {
        $erreur .= "6,";
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

    } else {
        ?>
        <div class="valid" id="valid">
            <div class="row">

                <div class="col-md-12"><h3>Mail envoyer a Bug'Papa</h3></div>
                <div class="col-md-6">
                    Récapitulatif des informations :<br/>

                    <strong>Nom : </strong><?php echo $_POST['name']; ?><br/>
                    <strong>N°Tel : </strong><?php echo $_POST['tel']; ?><br/>
                    <strong>Couriel : </strong><?php echo $_POST['email']; ?><br/>
                </div>
                <div class="col-md-6">
                    <strong>Message : </strong><br/>
                    <?php echo $_POST['message']; ?><br/>
                </div>
            </div>
        </div>
        <?php

        header('refresh:5.5;url=?page=home');
    }
}

?>


<form action="?page=contact&verif" method="post" role="form">
    <div class="row">
        <div class="col-md-6">


            <div class="form-group">
                <label for="name">Votre nom :</label>
                <div class="input-group">
                    <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Jean..." value="<?php echo (isset($_POST['name']) ? $_POST['name'] : ""); ?>" >
                </div>

                <label for="email">Votre email :</label>
                <div class="input-group">
                    <div class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></div>
                    <input type="text" class="form-control" name="email" id="email" placeholder="bug@burger.fr..." value="<?php echo (isset($_POST['email']) ? $_POST['email'] : ""); ?>" >
                </div>

                <label for="tel">Votre téléphone :</label>
                <div class="input-group">
                    <div class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></div>
                    <input type="text" class="form-control" name="tel" id="tel" placeholder="06..." value="<?php echo (isset($_POST['tel']) ? $_POST['tel'] : ""); ?>" >
                </div>


            </div>
        </div>
        <div class="col-md-6">
            <label for="message">Votre message :</label>
            <textarea class="form-control" name="message" id="messsage" placeholder="Votre message" rows="5"><?php echo (isset($_POST['messsage']) ? $_POST['messsage'] : ""); ?></textarea>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>

    </div>
</form>
<script>
    function fadeOutErreur(nomDiv) {
        $("#erreur").addClass("animated fadeOut");
    }

    function masquerErreur() {
        $("#erreur").addClass("off");
    }

    window.setTimeout(fadeOutErreur, 3000);
    window.setTimeout(masquerErreur, 4000);

    function fadeOutValid(nomDiv) {
        $("#valid").addClass("animated fadeOut");
    }

    function masquerValid() {
        $("#valid").addClass("off");
    }

    window.setTimeout(fadeOutErreur, 3000);
    window.setTimeout(masquerValid, 4000);

</script>

