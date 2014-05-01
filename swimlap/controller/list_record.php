<?php
    $record = recoverRecord();
?>
<div class="section container" id="section_record">
    <button class="button" id="add_record">+</button>
    <ul id="list_record">
        <?php foreach ($record as $rec) {
            echo '<li>'.$rec.'</li>';
        } ?>
    </ul>
    <a class="button form_cancel">Annuler</a>
</div>
