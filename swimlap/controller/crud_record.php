<form id="form_record" method="post" action="<?php echo MODEL;?>fonctions_request_form.php">
    <fieldset>
        <label>Nouveau record :</label>
        <input type="text" id="record_new" required/>
        <label>Nom du nageur :</label>
        <input type="text" id="record_swimmer" required/>
        <label>Type de nage :</label>
        <input type="text" id="record_swim" required/>
        <label>Taille du bassin :</label>
        <input type="text" id="record_pool" required/>
        <input type="submit" class="button" value="E/M/D"/>
        <button class="button form_cancel">Annuler</button>
    </fieldset>
</form>
