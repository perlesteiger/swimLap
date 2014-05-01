<!--mettre une vue avant avec vue de la liste (truc ajouter)-->
<!--function recoverSwimmer-->
<form id="form_swimmer" method="post" action="<?php echo MODEL;?>fonctions_request_form.php">
    <fieldset>
        <input type="hidden" name="type_form" value="swimmer"/>
        <label>Nom du nageur :</label>
        <input type="text" name="swimmer_name" id="swimmer_name" required/>
        <label>Prénom du nageur :</label>
        <input type="text" name="swimmer_firstname" id="swimmer_firstname" required/>
        <label>Id FFNEX du nageur :</label>
        <input type="text" name="swimmer_id" id="swimmer_id" required/>
         <!--changer le hidden lors de changement-->
        <label>Sexe :</label>
        <select name="select_sexe">
            <option value="F">Féminine</option> 
            <option value="M" selected>Masculin</option>
        </select>
        <label>Date de naissance :</label>
        <input type="text" name="swimmer_birth" id="swimmer_birth" required/>
        <input type="submit" class="button" value="Ajouter"/>
        <a class="button form_cancel">Annuler</a>
    </fieldset>
</form>
