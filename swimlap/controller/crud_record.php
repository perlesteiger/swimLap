<!--mettre une vue avant avec vue de la liste (modifier/supprimer et un truc ajouter-->
<!--garder ce formulaaire pour modifier/supprimer-->
<form id="form_record" method="post" action="<?php echo MODEL;?>fonctions_request_form.php">
    <fieldset>
        <label>Nouveau record :</label>
        <input type="text" id="record_new" required/>
        <label>Nom du nageur :</label>
        <input type="text" id="record_swimmer" required/>
        <label>Type de nage :</label>
        <input type="text" id="record_swim" required/>
        <!--changer le hidden lors de changement-->
        <label>Taille du bassin :</label>
        <select name="select_pool">
            <option value="25">25</option> 
            <option value="50" selected>50</option>
        </select>
        <input type="hidden" id="record_pool"/>
        <input type="submit" class="button" value="Ajouter"/>
        <button class="button form_cancel">Annuler</button>
    </fieldset>
</form>
