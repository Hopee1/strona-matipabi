<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <!-- Plik CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <header class="head">
        <div>
            <h1>Portfolio Aleksandra Ostrowskiego</h1>
        </div>
    </header>
    <!-- Sekcja z informacjami o mnie -->
    <section class="o_mnie">
    <div>
        <h2>O mnie</h2>
        <?php
        // Dane do połączenia z bazą danych
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "portfolio";

        // Połączenie z bazą
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Test połączenia z bazą danych
        if ($conn->connect_error) {
            die("Nie udało się połączyć z bazą danych: " . $conn->connect_error);
        }

        // Zapytanie do bazy danych o dane
        $sql = "SELECT * FROM o_mnie";
        $result = $conn->query($sql);

        // Wyświetlenie z bazy danych tekstu do opisu
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div>';
                echo '<h5 class="tytul">' . $row["tytul"] . '</h5>';
                echo '</div>';
                echo '<div>';
                echo '<p class="opis">' . $row["opis"] . '</p>';
                echo '</div>';
                echo '<div>';
                echo '<p class="tekst1">' . $row["tekst1"] . '</p>';
                echo '</div>';
                echo '<div class="row">';
                echo '<div class="column">';
                echo '<img class="obrazek1" src="' . $row["obrazek"] . '" alt="">';   
                echo '</div>';
                echo '<div class="column">';
                echo '<img class="obrazek2" src="' . $row["obrazek2"] . '" alt="">';
                echo '</div>';
                echo '<div class="column">';
                echo '<img class="obrazek3" src="' . $row["obrazek3"] . '" alt="">';
                echo '</div>';
            }
        } else {
            echo "Brak danych do wyświetlenia";
        }

        // Zamykamy połączenie z bazą danych
        $conn->close();
        ?>
</section>
</body>
</html>    
                       
