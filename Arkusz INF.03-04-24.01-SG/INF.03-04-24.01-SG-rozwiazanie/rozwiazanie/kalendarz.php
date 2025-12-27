<?php
    $conn = new mysqli(hostname: "localhost",username: "root",password: "",database: "terminarz");
?>

<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Zadania na lipiec</title>
        <link rel="stylesheet" href="styl6.css">
    </head>
    <body>
        <div id="baner1">
            <img src="logo1.png" alt="lipiec">
        </div>

        <div id="baner2">
            <h1>TEMRINARZ</h1>
            <?php
                // Skrypt #1
                echo "<p>nabliższe zadania: ";
                $sql = "SELECT DISTINCT wpis FROM zadania WHERE dataZadania <= '2020-07-07' AND wpis <> '';";
                $result = $conn->query(query: $sql);
                while($row = $result -> fetch_array()) {
                    echo "$row[0]; ";
                }
                echo "</p>";
            ?>
        </div>

        <main>
            <?php
                // Skrypt #2
                $sql = "SELECT dataZadania, wpis FROM zadania WHERE miesiac='lipiec';";
                $result = $conn->query(query: $sql);
                while($row = $result -> fetch_array()) {
                    echo "<div>";
                    echo "<h6>$row[0]</h6>";
                    echo "<p>$row[1]</p>";
                    echo "</div>";
                }
            ?>
        </main>

        <footer>
            <a href="sierpien.html">Terminarz na sierpień</a>
            <p>Stronę wykonał: <a href="https://ee-informatyk.pl/" target="_blank" style="text-decoration: none;color: unset;">EE-Informatyk.pl</a></p>
        </footer>
    </body>
</html>

<?php
    $conn -> close();
?>