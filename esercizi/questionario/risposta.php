<!DOCTYPE html>
<html>

<body>
    <?php
    if ($_GET["password"] == "info2023") {
    ?>
        <div style="margin-top: 15%;">
            <h2 style="text-align: center;">BENVENUTO <?php echo $_GET["fname"] ?>!<br> Le credenziali inserite sono corrette.</h2>
            <table style="background-color: whitesmoke; width: auto; margin: auto; text-align: center;">
                <tr>
                    <td>Nome:</td>
                    <td><?php echo $_GET["fname"] ?></td>
                </tr>
                <tr>
                    <td>Cognome:</td>
                    <td><?php echo $_GET["lname"] ?></td>
                </tr>
                <tr>
                    <td>Età:</td>
                    <td><?php echo $_GET["anni"] ?></td>
                </tr>
                <tr>
                    <td>Sport preferito:</td>
                    <td><?php echo $_GET["sport"] ?></td>
                </tr>
            </table>
        </div>
    <?php
        echo "<body style='background-color:" . $_GET["sfondo"] . ";'>";
    } else {
    ?>
        <h2 style="text-align: center;">Password errata. Riprova </h2>
        <form style="margin: auto; width: 80%; padding: 1rem; border: 3px solid; text-align: center;" action="./risposta.php" method="get">
            <label for="fname">Nome:</label>
            <input type="text" id="fname" name="fname">
            <label for="lname">Cognome:</label>
            <input type="text" id="lname" name="lname">
            <label for="sport">Sport preferito:</label>
            <input type="text" id="sport" name="sport">
            <label for="anni">Età:</label>
            <input type="number" id="anni" name="anni">
            <label for="sfondo">Colore sfondo:</label>
            <input type="color" id="sfondo" name="sfondo">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <input type="submit" value="Invia dati">
        </form>
    <?php
    }
    ?>

</body>

</html>
