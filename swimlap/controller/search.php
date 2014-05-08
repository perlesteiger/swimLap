<?php
    $seasons = recoverSeason();
?>
<section id="search" class="container">
    <div id="param">
       <h4 class="title1">Paramètres</h4>
        <form id="form_search" method="post" action="<?php echo MODEL;?>fonctions_request_form.php">
            <div>Compétition :</div>
            <input type="text" class="search_competition" id="search_competition"/>
            <div>Nageur :</div>
            <input type="text" class="search_swimmer" id="search_swimmer"/>
            <div>Type de course :</div>
            <select name="record_swim">
                <option value="Nage Libre">Nage Libre</option> 
                <option value="Dos" selected>Dos</option>
                <option value="Brasse">Brasse</option> 
                <option value="Papillon">Papillon</option>
                <option value="4 Nages">4 Nages</option>
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
