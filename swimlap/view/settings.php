<!DOCTYPE HTML>
<HTML>
    <?php include 'var.prepend.php';?>
    <?php include INCLUDES."head.php"?>
    <BODY>
        <?php include INCLUDES."header.php"?>
        <div class="clear"></div>
        <div id="content">
            <center>
                <div class="container">
                    <?php include INCLUDES."list_setting.php"?>
                </div>
                <?php include CONTROLLER."crud_general.php"?>
                <?php include CONTROLLER."crud_data.php"?>
                <?php include CONTROLLER."crud_competition.php"?>
                <?php include CONTROLLER."crud_swimmer.php"?>
                <?php include CONTROLLER."crud_record.php"?>
            </center>
        </div>
        <?php include INCLUDES."footer.php"?>
        <script>
            $("header span.setting").addClass('active');
        </script>
    </BODY>
</HTML>