<!--recuperer liste nageur/competition pour faire ensuite autocompletion pour recherche-->
<!--a voir pour type de course-->
<!--clic sur submit => recuperation t_j_record_rec/rec_swimtime_? et t_e_event_eve/tmps final WHERE rec_rac_id/rec_swi_id par rpport a t_e_event_eve et t_e_swimmer_swi-->
<!--record/tmps final *100-->
<section id="stat-planning">
    <form id="form_planning" method="post" action="<?php echo MODEL;?>fonctions_request_form.php">
        <fieldset>
            <label>Nageur :</label>
            <input type="text" id="planning_swimmer"/>
            <label>Compétition :</label>
            <input type="text" id="planning_competition"/>
            <label>Type de course :</label>
            <input type="text" id="planning_race"/>
            <input type="submit" class="button" value="Recherche"/>
        </fieldset>
    </form>
</section>