<?php
include '../view/var.prepend.php';
include MODEL.'fonctions_crud.php';

$type = $_POST['type_form'];

switch ($type) {
    case 'general':
        $new_name = $_POST['general_club'];
        $id = $_POST['general_id'];
        
        $update_name = updateClub($new_name, $id);

        //ajouter condition si non reussi
        header("Location: ".VIEW."result.php?form=general&new=".$new_name);

        break;

    case 'swimmer':
        $lastname = $_POST['swimmer_name'];
        $firstname = $_POST['swimmer_firstname'];
        $id = $_POST['swimmer_id'];
        $birth = $_POST['swimmer_birth'];
        $sexe = $_POST['select_sexe'];
        
        $tab_swimmer = array();
        
        $add_swimmer = addSwimmer($lastname, $firstname, $id, $sexe, $birth);

        //ajouter condition si non reussi
        header("Location: ".VIEW."result.php?form=swimmer&name=".$lastname."&first=".$firstname."&id=".$id."&birth=".$birth."&genre=".$sexe);

        break;
    //a faire pour compet/record
    default:
        break;
}
?>