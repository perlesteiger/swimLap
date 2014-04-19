<form id="form_competition" method="post" action="<?php echo MODEL;?>fonctions_request_form.php">
    <fieldset>
        <label>Nom de la compétition :</label>
        <input type="text" id="competition_name" required/>
        <label>Date de départ :</label>
        <input type="text" id="competition_begin" required/>
        <label>Date de fin :</label>
        <input type="text" id="competition_end" required/>
        <label>Ville :</label>
        <input type="text" id="competition_city" required/>
        <label>Taille du bassin :</label>
        <input type="text" id="competition_length" required/>
        <label>Nombre de nageurs inscrits :</label>
        <input type="text" id="competition_swimmer"/>
        <label>Catégorie d'âge :</label>
        <input type="text" id="competition_age"/>
        <label>Saison :</label>
        <input type="text" id="competition_season" required/>
        <input type="submit" class="button" value="E/M/D"/>
        <button class="button form_cancel">Annuler</button>
    </fieldset>
</form>
