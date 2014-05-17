<<<<<<< HEAD:swimlap/view/add_general.php
=======
<?php
    $club = recoverClub();
?>
>>>>>>> 8462b232915d8d592e5f4fa2f8c6f389c1959026:swimlap/controller/crud_general.php
<div class="section" id="section_general">
   <form id="form_general" method="post" action="<?php echo MODEL;?>fonctions_request_form.php">
       <h4 class="title2">Modifier le nom du club</h4>
        <input type="hidden" name="type_form" value="general"/>
        <label>Club :</label>
        <input type="text" name="general_club" id="general_club" value="<?php echo $club->clu_name; ?>"/>
        <input type="hidden" name="general_id" value="<?php echo $club->clu_id; ?>"/>
        <input type="submit" class="button" value="Modifier"/>
        <a class="button form_cancel">Retour</a> 
    </form> 
</div>
