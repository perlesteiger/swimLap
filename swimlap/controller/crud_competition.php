<?php
    $season = recoverSeason();
?>
<form id="form_competition" method="post" action="<?php echo MODEL;?>fonctions_request_form.php">
    <fieldset>
        <input type="hidden" name="type_form" value="competition"/>
        <label>ID de la compétition :</label>
        <input type="text" id="competition_id" name="competition_id" required/>
        <label>Nom de la compétition :</label>
        <input type="text" id="competition_name" name="competition_name" required/>
        <!--datepicker ?-->
        <label>Date de départ :</label>
        <input type="text" id="competition_begin" name="competition_begin" required/>
        <label>Date de fin :</label>
        <input type="text" id="competition_end" name="competition_end" required/>
        <label>Ville :</label>
        <input type="text" id="competition_city" name="competition_city" required/>
        <!--changer le hidden lors de changement-->
        <label>Taille du bassin :</label>
        <select name="select_pool">
            <option value="25">25</option> 
            <option value="50" selected>50</option>
        </select>
        <label>Saison :</label>
        <select name="competition_season">
            <?php foreach ($season as $id => $name) {
                echo '<option value="'.$id.'">'.$name.'</option>';
            } ?>
        </select>
        <input type="submit" class="button" value="Ajouter"/>
        <a class="button form_cancel">Annuler</a>
    </fieldset>
</form>
