<form id="form_data" method="post" action="<?php echo MODEL;?>fonctions_request_form.php">
    <fieldset>
        <label>Choisir le fichier FFNEX :</label>
        <div id="import">
            <button class="button">Parcourir</button>
            <input type="file" id="data_import"/>
        </div>
        <input type="submit" name="import" class="button" value="Importer"/><br/>
        <label>Choisir la compétition à exporter au format FFNEX :</label>
        <!--Voir avec un select si ttes les competitions en liste ou recherche auto en mm tmps qu on tape-->
        <input type="text" id="data_export"/>
        <input type="submit" name="export" class="button" value="Exporter"/><br/>
        <a class="button form_cancel">Annuler</a>
    </fieldset>
</form>
