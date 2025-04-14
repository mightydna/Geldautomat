<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Geldautomat</title>
</head>
<body>
    <header>
        <h1>Geldautomat</h1>
    </header>
    <main>
        <div id="div_left">
        

        </div>
        <div id="div_right">
            <form method="POST" action="calculation.php">
                <label for="moneyfield">Geldbetrag:</label>    
                <input type="number" id="moneyfield" name="moneyfield">
                <button type="submit" value="Submit" id="submit">Auszahlen</button>
            </form>

            <?php
                if (isset($_SESSION['summary']) && isset($_SESSION['result'])) {
                    echo "<h3>Gesamtanzahl Scheine/Münzen: " . $_SESSION['result'] . "</h3>";
                    echo "<ul>";
                    foreach ($_SESSION['summary'] as $value => $number) {
                        echo "<li>{$number} x {$value}€</li>";
                    }
                    echo "</ul>";

                    unset($_SESSION['summary']);
                    unset($_SESSION['result']);
                }
            ?>
        </div>
        
    </main>
</body>
</html>