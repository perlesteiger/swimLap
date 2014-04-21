<!--Recuperer les infos dans BDD et les modifier si changement-->
<form id="form_general" method="post" action="<?php echo MODEL;?>fonctions_request_form.php">
    <fieldset>
        <label>Nom de l'entraineur :</label>
        <input type="text" id="general_name"/>
        <label>Prénom de l'entraineur :</label>
        <input type="text" id="general_firstname"/>
        <label>Club :</label>
        <input type="text" id="general_club"/>
        <label>Mail :</label>
        <input type="text" id="general_mail"/>
        <input type="submit" class="button" value="Enregistrer"/>
        <button class="button form_cancel">Retour</button>
    </fieldset>
</form>
