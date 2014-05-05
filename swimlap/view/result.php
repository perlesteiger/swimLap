<!DOCTYPE HTML>
<HTML>
    <?php include 'var.prepend.php';?>
    <?php include MODEL.'fonctions_crud.php';?>
    <?php include INCLUDES."head.php"?>
    <BODY>
        <?php include INCLUDES."header.php"?>
        <div class="clear"></div>
        <div id="content">
            <center>
                <div class="container">
                    <?php switch ($_GET['form']) {
                            case 'general' :
                                $chaine = 'Le nouveau nom du club est : '.$_GET['new'];
                            break;
                            case 'swimmer' :
                                $chaine = $_GET['name'].' '.$_GET['first'].' ('.$_GET['id'].', '.$_GET['birth'].', '.$_GET['genre'].') a bien été ajouté à la liste.';
                            break;
                            case 'record' :
                                $chaine = 'En '.$_GET['dist']." ".$_GET['race']." ".$_GET['name']." a comme nouveau record : ".$_GET['record']." (".$_GET['pool'].").";
                            break;
                            //a faire pour compet
                            default:
                            break;
                    }?>
                    <p><?php echo $chaine; ?></p>
                    <a class="button" href="settings.php">Retour</a>
                </div>
            </center>
        </div>
        <?php include INCLUDES."footer.php"?>
        <script>
            $("header span.setting").addClass('active');
            $("#sous-menu").hide();
        </script>
    </BODY>
</HTML>
