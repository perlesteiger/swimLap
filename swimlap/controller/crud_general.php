<form id="form_general" method="post" action="<?php echo MODEL;?>fonctions_request_form.php">
    <fieldset>
        <label>Nom de l'entraineur :</label>
        <input type="text" id="general_name" required/>
        <label>Prénom de l'entraineur :</label>
        <input type="text" id="general_firstname" required/>
        <label>Club :</label>
        <input type="text" id="general_club" required/>
        <label>Mail :</label>
        <input type="text" id="general_mail" required/>
        <input type="submit" class="button" value="E/M/D"/>
        <button class="button form_cancel">Annuler</button>
    </fieldset>
</form>
