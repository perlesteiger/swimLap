<!--mettre une vue avant avec vue de la liste (modifier/supprimer et un truc ajouter-->
<!--garder ce formulaaire pour modifier/supprimer-->
<form id="form_swimmer" method="post" action="<?php echo MODEL;?>fonctions_request_form.php">
    <fieldset>
        <label>Nom du nageur :</label>
        <input type="text" id="swimmer_name" required/>
        <label>Prénom du nageur :</label>
        <input type="text" id="swimmer_firstname" required/>
         <!--changer le hidden lors de changement-->
        <label>Sexe :</label>
        <select name="select_pool">
            <option value="f">Féminine</option> 
            <option value="m" selected>Masculin</option>
        </select>
        <input type="hidden" id="swimmer_sexe"/>
        <label>Date de naissance :</label>
        <input type="text" id="swimmer_birth" required/>
        <input type="submit" class="button" value="Ajouter"/>
        <a class="button form_cancel">Annuler</a>
    </fieldset>
</form>
