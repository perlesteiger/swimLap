<!DOCTYPE HTML>
<HTML>
    <?php include "include/head.php"?>
    <BODY>
        <?php include "include/header.php"?>
        <div class="clear"></div>
        <div id="content">
            <center>
                <form id="form_connect" method="post" action="admin.php">
                    <fieldset>
                        <label>Login :</label>
                        <input type="text" id="login" required/>
                        <label>Mot de passe :</label>
                        <input type="password" id="password" required/>
                        <input type="submit" class="button" value="Se connecter"/>
                    </fieldset>
                </form>
            </center>
        </div>
        <?php include "include/footer.php"?>
    </BODY>
</HTML>
