<!--recuperer liste nageur/competition pour faire ensuite autocompletion pour recherche-->
<!--a voir pour type de course-->
<!--clic sur submit => recuperation t_j_record_rec/rec_swimtime_? et t_e_event_eve/tmps final WHERE rec_rac_id/rec_swi_id par rpport a t_e_event_eve et t_e_swimmer_swi-->
<!--record/tmps final *100-->
<section id="stat-performance">
    <form id="form_performance" method="post" action="<?php echo MODEL;?>fonctions_request_form.php">
        <fieldset>
            <label for="performance_swimmer">Nageur :</label>
            <input type="text" id="performance_swimmer"/>
            <label for="performance_competition">Compétition :</label>
            <input type="text" id="performance_competition"/>
            <label for="performance_race">Type de course :</label>
            <input type="text" id="performance_race"/>
            <input type="submit" class="button" value="Recherche"/>
        </fieldset>
    </form>
</section>

