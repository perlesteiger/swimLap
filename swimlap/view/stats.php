<!DOCTYPE HTML>
<HTML>
    <?php include 'var.prepend.php';?>
    <?php include INCLUDES."head.php";?>
    <BODY>
        <?php include INCLUDES."header.php"?>
        <div class="clear"></div>
        <div id="content">
            <center>
                <?php include CONTROLLER."search_repartition.php"; ?>
                <?php include CONTROLLER."search_performance.php"; ?>
                <?php include CONTROLLER."search_planning.php"; ?>
            </center>
        </div>
        <?php include INCLUDES."footer.php"?>
        <script>
            $("header span.stat").addClass('active');
        </script>
    </BODY>
</HTML>
