<!--mettre une vue avant avec vue de la liste (un truc ajouter)-->
<!--recuperer t_j_record_rec/rec_swimtime_?, rec_rac_id, rec_swim_id => t_e_race_rac/rac_style, t_e_swimmer_swi/swi_firstname swi_lastname-->
<form id="form_record" method="post" action="<?php echo MODEL;?>fonctions_request_form.php">
    <h4 class="title2">Ajouter un record</h4>
    <input type="hidden" name="type_form" value="record"/>
    <div>Nouveau record :</div>
    <input type="text" name="record_new" id="record_new" required/>
    <div>Nom du nageur :</div>
    <input type="text" name="record_swimmer" id="record_swimmer" class="search_swimmer" required/>
    <div>Longueur :</div>
    <select name="record_long">
        <option value="25">25</option> 
        <option value="50" selected>50</option>
        <option value="100">100</option> 
        <option value="200">200</option>
        <option value="300">300</option>
        <option value="400">400</option> 
        <option value="500">500</option>
        <option value="800">800</option> 
        <option value="1000">1000</option>
        <option value="1500">1500</option>
        <option value="3000">3000</option>
        <option value="5000">5000</option>
    </select>
    <div>Type de nage :</div>
    <select name="record_swim">
        <option value="Nage Libre">Nage Libre</option> 
        <option value="Dos" selected>Dos</option>
        <option value="Brasse">Brasse</option> 
        <option value="Papillon">Papillon</option>
        <option value="4 Nages">4 Nages</option>
    </select>
    <div>Taille du bassin :</div>
    <select name="select_pool">
        <option value="25">25</option> 
        <option value="50" selected>50</option>
    </select><br />
    <input type="submit" class="button" value="Ajouter"/>
    <a class="button form_cancel">Annuler</a> 
</form>
