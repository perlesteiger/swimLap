<!--a voir cmt faire-->
<div class="section" id="section_data">
    <form id="form_data" method="post" action="<?php echo MODEL;?>fonctions_request_form.php">
        <h4 class="title2">Importer un fichier</h4>
        <input type="hidden" name="type_form" value="data"/>
        <div>Choisir le fichier FFNEX :</div>
        <div id="import">
            <button class="button">Parcourir</button>
            <input type="file" name="data_import" id="data_import"/>
        </div>
        <input type="submit" name="import" class="button" value="Importer"/><br/>
        <h4 class="title2">Exporter les données</h4>
        <div>Choisir la compétition à exporter au format FFNEX :</div>
        <!--Voir avec un select si ttes les competitions en liste ou recherche auto en mm tmps qu on tape-->
        <input type="text" class="search_competition" name="data_export" id="data_export"/>
        <input type="submit" name="export" class="button" value="Exporter"/><br/>
        <a class="button form_cancel">Annuler</a> 
    </form>
</div>
