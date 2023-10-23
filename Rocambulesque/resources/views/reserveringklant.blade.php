<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/klant.css">
    <title>Reservering Overzicht</title>
</head>

<body>
    <div class="container">
        <h1>Reservering Overzicht</h1>
        <div class="customer-info">
            <h2>Persoon gegevens</h2>
            <label for="name">Naam:</label>
            <p id="name">John Doe</p>

            <label for="mobile">Mobile nummer:</label>
            <p id="mobile">123-456-7890</p>

            <label for="email">Email:</label>
            <p id="email">johndoe@example.com</p>
        </div>

        <div class="reservation-info">
            <h2>Gereserveerde Tafel</h2>
            <label for="date">datum:</label>
            <p id="date">2023-10-15</p>

            <label for="time">Tijd:</label>
            <p id="time">18:30</p>

            <label for="numPeople">Aantal personen:</label>
            <p id="numPeople">4</p>

            <label for="notes">Opmerking:</label>
            <p id="notes"></p>
        </div>

        <div class="buttons">
            <button class="edit">Wijzig</button>
            <button class="delete">Verwijderen</button>
        </div>
    </div>
</body>

</html>