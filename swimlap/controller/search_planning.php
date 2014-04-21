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