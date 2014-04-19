<form id="form_swimmer" method="post" action="<?php echo MODEL;?>fonctions_request_form.php">
    <fieldset>
        <label>Nom du nageur :</label>
        <input type="text" id="swimmer_name" required/>
        <label>Prénom du nageur :</label>
        <input type="text" id="swimmer_firstname" required/>
        <label>Sexe :</label>
        <input type="text" id="swimmer_sexe" required/>
        <label>Date de naissance :</label>
        <input type="text" id="swimmer_birth" required/>
        <input type="submit" class="button" value="E/M/D"/>
        <button class="button form_cancel">Annuler</button>
    </fieldset>
</form>
