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
        @foreach ($data1 as $users)
        <div class="customer-info">
            <h2>Persoon gegevens</h2>
            <label for="name">Naam:</label>
            <p id="name">{{ $users->name }}</p>

            <label for="mobile">Mobiele nummer:</label>
            <p id="mobile">{{ $users->phone }}</p>

            <label for="email">Email:</label>
            <p id="email">{{ $users->email }}</p>
        </div>
        @endforeach

        @foreach ($data2 as $reservation)
        <div class="reservation-info">
            <h2>Gereserveerde Tafel</h2>
            <label for="date">datum:</label>
            <p id="date">{{ $reservation->date }}</p>

            <label for="time">Tijd:</label>
            <p id="time">{{ $reservation->time }}</p>

            <label for="numPeople">Aantal personen:</label>
            <p id="numPeople">{{ $reservation->amount }}</p>

            <label for="notes">Opmerking:</label>
            <p id="notes">{{ $reservation->remark }}</p>
        </div>
        @endforeach

        <div class="buttons">
            <button class="edit">Wijzig</button>
            <button class="delete">Verwijderen</button>
        </div>
    </div>
</body>

</html>