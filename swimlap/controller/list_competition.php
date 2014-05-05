<?php
    $competition = recoverCompetition();
?>
<div class="section container" id="section_competition">
    <button class="button" id="add_competition" name="competition">+</button>
    <ul id="list_competition">
        <?php foreach ($competition as $compet) {
            echo '<li>'.$compet.'</li>';
        } ?>
    </ul>
    <a class="button form_cancel">Annuler</a>
</div>
 