<?php
    $seasons = recoverSeason();
    $swimmers = recoverSwimmer();
    $meetings = recoverCompetition();
    $races = recoverRace();
?>
<section id="search" class="container">
    <div id="param">
       <h4 class="title1">Paramètres</h4>
        <form id="form_search" method="post" action="<?php echo MODEL;?>fonctions_request_form.php">
            <div>Compétition :</div>
            <select class="search_competition" name="search_competition">
                <?php foreach ($meetings as $meet) {
                    $meet = explode('|', $meet);
                    echo '<option value="'.$meet[4].'">'.$meet[0].'</option>';
                } ?>
            </select><br/>
            <div>Nageur :</div>
            <select class="search_swimmer" name="search_swimmer">
                <option value="">Tous</option>
                <?php foreach ($swimmers as $swimmer) {
                    $swimmer = explode('|', $swimmer);
                    echo '<option value="'.$swimmer[3].'">'.$swimmer[0].' '.$swimmer[1].'</option>';
                } ?>
            </select><br/>
            <div>Type de nage :</div>
            <select class="search_type" name="search_type">
                <option value="">Toutes</option>
                <?php foreach ($races as $id => $race) {
                    echo '<option value="'.$id.'">'.$race.'</option>';
                } ?>
            </select><br/>
            <input type="submit" class="button" value="Recherche"/>
        </form> 
    </div>
    <div id="param-season">
        <h4 class="title1">Saisons</h4>
        <ul>
            <?php foreach ($seasons as $id => $season) {
                echo '<li id="'.$id.'">'.$season.'</li>';
            } ?>
        </ul>
    </div>
</section>
