<!--a voir cmt faire-->
<div class="section" id="section_data">
    <form id="form_data" method="post" action="<?php echo MODEL;?>fonctions_request_form.php">
        <fieldset>
            <input type="hidden" name="type_form" value="data"/>
            <label>Choisir le fichier FFNEX :</label>
            <div id="import">
                <button class="button">Parcourir</button>
                <input type="file" name="data_import" id="data_import"/>
            </div>
            <input type="submit" name="import" class="button" value="Importer"/><br/>
            <label>Choisir la compétition à exporter au format FFNEX :</label>
            <!--Voir avec un select si ttes les competitions en liste ou recherche auto en mm tmps qu on tape-->
            <input type="text" class="search_competition" name="data_export" id="data_export"/>
            <input type="submit" name="export" class="button" value="Exporter"/><br/>
            <a class="button form_cancel">Annuler</a>
        </fieldset>
    </form>
</div>
