<!--recuperer liste nageur/competition pour faire ensuite autocompletion pour recherche-->
<!--clic sur submit => recuperation t_e_meeting_mee/mee_id WHERE mee_start_date derniere-->
<!--accrocher a t_e_event_eve/eve_mee_id, difference dans eve_splits*100/temps final-->
<section id="stat-distribution">
    <form id="form_distribution" method="post" action="<?php echo MODEL;?>fonctions_request_stat.php">
        <fieldset>
            <label>Nageur :</label>
            <input type="text" id="distribution_swimmer"/>
            <label>Compétition :</label>
            <input type="text" id="distribution_competition"/>
            <input type="submit" class="button" value="Recherche"/>
        </fieldset>
    </form>
</section>
