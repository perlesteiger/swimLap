<!--recuperation nom du club et pouvoir enregistrer => t_e_club_clu/clu_name-->
<?php
    $club = recoverClub();
?>
<div class="section" id="section_general">
   <form id="form_general" method="post" action="<?php echo MODEL;?>fonctions_request_form.php">
        <fieldset>
            <input type="hidden" name="type_form" value="general"/>
            <label>Club :</label>
            <input type="text" name="general_club" id="general_club" value="<?php echo $club->clu_name; ?>"/>
            <input type="hidden" name="general_id" value="<?php echo $club->clu_id; ?>"/>
            <input type="submit" class="button" value="Modifier"/>
            <a class="button form_cancel">Retour</a>
        </fieldset>
    </form> 
</div>

