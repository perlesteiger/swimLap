<!DOCTYPE HTML>
<HTML>
    <?php include '../var.prepend.php';?>
    <?php include INCLUDES."head.php";?>
    <BODY>
        <?php include INCLUDES."header.php"?>
        <div class="clear"></div>
        <div id="content">
            <?php include CONTROLLER."search.php"; ?>
        </div>
        <?php include INCLUDES."footer.php"?>
        <script>
            $("header span.stat").addClass('active');
        </script>
    </BODY>
</HTML>
