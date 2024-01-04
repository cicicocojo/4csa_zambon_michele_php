<!DOCTYPE html>
<html>
<head>
    <title>Tabella Generata</title>
</head>
<body>
    <div class="container">
        <h1>Tabella Generata</h1>

        <?php
        // Recupera i dati inviati dal modulo HTML
        $text = $_GET["inputText"];
        $rows = $_GET["inputRows"];
        $cols = $_GET["inputCols"]; 
        echo "<table border='1'>";
        for ($i = 0; $i < $rows; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $cols; $j++) {
                echo "<td>" . htmlentities($text) . "</td>";
            }
                echo "</tr>";
            }
            echo "</table>";
        ?>
        <p><a href="index.html">Torna alla pagina principale</a></p>
    </div>
</body>
</html>
