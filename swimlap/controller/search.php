<section id="search">
    <form id="form_search" method="post" action="<?php echo MODEL;?>fonctions_request_form.php">
        <fieldset>
            <label>Nageur :</label>
            <input type="text" class="search_swimmer" id="search_swimmer"/>
            <label>Compétition :</label>
            <input type="text" class="search_competition" id="search_competition"/>
            <label>Type de course :</label>
            <input type="text" class="search_race" id="search_race"/>
            <input type="submit" class="button" value="Recherche"/>
        </fieldset>
    </form>
</section>
