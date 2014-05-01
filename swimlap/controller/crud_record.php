<!--mettre une vue avant avec vue de la liste (un truc ajouter)-->
<!--recuperer t_j_record_rec/rec_swimtime_?, rec_rac_id, rec_swim_id => t_e_race_rac/rac_style, t_e_swimmer_swi/swi_firstname swi_lastname-->
<form id="form_record" method="post" action="<?php echo MODEL;?>fonctions_request_form.php">
    <fieldset>
        <input type="hidden" name="type_form" value="record"/>
        <label>Nouveau record :</label>
        <input type="text" name="record_new" id="record_new" required/>
        <label>Nom du nageur :</label>
        <input type="text" name="record_swimmer" id="record_swimmer" required/>
        <label>Type de nage :</label>
        <input type="text" name="record_swim" id="record_swim" required/>
        <!--changer le hidden lors de changement-->
        <label>Taille du bassin :</label>
        <select name="select_pool">
            <option value="25">25</option> 
            <option value="50" selected>50</option>
        </select>
        <input type="submit" class="button" value="Ajouter"/>
        <a class="button form_cancel">Annuler</a>
    </fieldset>
</form>
