<?php
    $swimmer = recoverSwimmer();
?>
<div class="section container" id="section_swimmer">
    <button class="button" id="add_swimmer" name="swimmer">+</button>
    <ul id="list_swimmer">
        <?php foreach ($swimmer as $swim) {
            echo '<li>'.$swim.'</li>';
        } ?>
    </ul>
    <a class="button form_cancel">Retour</a>
</div>
