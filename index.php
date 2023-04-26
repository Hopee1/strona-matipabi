<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <!-- Łączymy się z plikami CSS Bootstrapa -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fyq8W2pa5mv+Qb5Q6UivzIebhnd0MjVhE1Q6Jr" crossorigin="anonymous">
    <!-- Dołączamy swój plik CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Tworzymy header strony -->
    <header class="bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Moje portfolio</h1>
                </div>
                <div class="col-md-6">
                    <nav class="navbar navbar-expand-md navbar-dark">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">O mnie</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Realizacje</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Kontakt</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Tworzymy sekcję z realizacjami -->
    <section class="realizacje">
        <div class="container">
            <h2 class="text-center mb-5">Moje realizacje</h2>
            <div class="row">
                <?php
                // Dane do połączenia z bazą danych
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "portflolio";

                // Tworzymy połączenie z bazą danych
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Sprawdzamy, czy udało się połączyć z bazą danych
                if ($conn->connect_error) {
                    die("Nie udało się połączyć z bazą danych: " . $conn->connect_error);
                }

                // Zapytanie do bazy danych o wszystkie realizacje
                $sql = "SELECT * FROM realizacje";
                $result = $conn->query($sql);

                // Wyświetlamy realizacje na stronie
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="col-md-4">';
                        echo '<div class="card">';
                        echo '<img class="card-img-top" src="' . $row["zdjecie"] . '" alt="' . $row["tytul"] . '">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">' . $row["tytul"] . '</h5>';
                        echo '<p class="card-text">' . $row["opis"] . '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "Brak realizacji do wyświetlenia";
                }
    
                // Zamykamy połączenie z bazą danych
                $conn->close();
                ?>
            </div>
        </div>
    </section>
    
    <!-- Łączymy się z plikami JavaScript Bootstrapa -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>    
                       
