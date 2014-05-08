<?php $mode = 'setting'; ?>

<!DOCTYPE HTML>
<HTML>
    <?php include "../include/general.php"?>
    <BODY>
        <?php include INCLUDES."header.php"?>
        <div class="clear"></div>
        <div id="content">
            <!--partie recherche-->
            <div class="fleft" id="content-left">
                <?php include CONTROLLER."search.php"; ?>                
            </div>
            <!--partie centrale-->
            <div class="fleft" id="content-right">
<!--                <div class="container">
                    <?php //include INCLUDES."list_setting.php"?>
                </div>-->
                <div id="setting-forms">
                    <?php include CONTROLLER."crud_general.php"?>
                    <?php include CONTROLLER."crud_data.php"?>
                    <?php include CONTROLLER."list_competition.php"?>
                    <?php include CONTROLLER."list_swimmer.php"?>
                    <?php include CONTROLLER."list_record.php"?>
                    
                    <?php include CONTROLLER."crud_competition.php"?>
                    <?php include CONTROLLER."crud_swimmer.php"?>
                    <?php include CONTROLLER."crud_record.php"?>
                </div>
            </div>
        </div>
        <?php include INCLUDES."footer.php"?>
        <script>
            $("header span.setting").addClass('active');
            $("#sous-menu-stat").hide();
            $("#param").hide();
        </script>
    </BODY>
</HTML>
