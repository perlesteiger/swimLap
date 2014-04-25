<!--mettre une vue avant avec vue de la liste (modifier/supprimer et un truc ajouter-->
<!--garder ce formulaaire pour modifier/supprimer-->
<form id="form_competition" method="post" action="<?php echo MODEL;?>fonctions_request_form.php">
    <fieldset>
        <label>Nom de la compétition :</label>
        <input type="text" id="competition_name" required/>
        <!--datepicker ?-->
        <label>Date de départ :</label>
        <input type="text" id="competition_begin" required/>
        <label>Date de fin :</label>
        <input type="text" id="competition_end" required/>
        <label>Ville :</label>
        <input type="text" id="competition_city" required/>
        <!--changer le hidden lors de changement-->
        <label>Taille du bassin :</label>
        <select name="select_pool">
            <option value="25">25</option> 
            <option value="50" selected>50</option>
        </select>
        <input type="hidden" id="competition_length"/>
        <label>Nombre de nageurs inscrits :</label>
        <input type="text" id="competition_swimmer"/>
        <!--mettre des select ?-->
        <label>Catégorie d'âge :</label>
        <input type="text" id="competition_age"/>
        <label>Saison :</label>
        <input type="text" id="competition_season" required/>
        <input type="submit" class="button" value="Ajouter"/>
        <a class="button form_cancel">Annuler</a>
    </fieldset>
</form>
