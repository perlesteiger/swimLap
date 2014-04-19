<form id="form_data" method="post" action="<?php echo MODEL;?>fonctions_request_form.php">
    <fieldset>
        <label>Choisir le fichier FFNEX :</label>
        <input type="file" id="data_import"/>
        <input type="submit" name="import" class="button" value="Importer"/><br/>
        <label>Choisir la compétition à exporter au format FFNEX :</label>
        <input type="file" id="data_export"/>
        <input type="submit" name="export" class="button" value="Exporter"/>
        <button class="button form_cancel">Annuler</button>
    </fieldset>
</form>
