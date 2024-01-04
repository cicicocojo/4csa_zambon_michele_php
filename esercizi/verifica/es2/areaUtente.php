<!DOCTYPE html>
<html>

<body>
    <?php
    if ($_GET['password'] == "passwordSegreta" && $_GET["fusername"] == "utente") {
    ?>
        <div>
            <h1> Credenziali corrette! </h1>
        </div>
    <?php
    } elseif (isset($_GET["contatore"]) && $_GET["contatore"] > 1) {
        $_GET["contatore"]--;
    ?>
        <div style="padding: 1rem; border: solid 1px; margin: auto; margin-top: 300px; text-align: center;">
            <h1>Password errata!</h1>
        </div>
        <form method="get" style="margin: auto; width: 700px; border: 1px solid red; text-align: center;" action="./areaUtente.php">
            <label for="fusername">Username:</label><br>
            <input type="text" id="fusername" name="fusername"><br>
            <br><label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br>
            <input type="hidden" name="contatore" value="<?= $_GET["contatore"] ?>">
            <br><input type="submit" value="Invia">
        </form>
    <?php
    } else {
    ?>
        <h1 style="margin: auto;">Password sbagliata! 0 tentativi rimasti.</h1>
    <?php
    }
    ?>

</body>

</html>

