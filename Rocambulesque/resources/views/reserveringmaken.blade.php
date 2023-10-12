<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reserveringmaken.css">
    <title>Reservatie maken</title>
</head>

<body>
    @include('navbar')
    <div class="form-container">
        <form class="">
            <h1>Reservatie formulier</h1>
            <label for="mealType">Uw keuze:</label>
            <select required>
                <option value="Dinner">Dinner</option>
                <option value="Lunch">Lunch</option>
            </select>

            <label for="numberOfAdults">Aantal volwassenen (+12):</label>
            <input type="number" min="1" required>
            <label for="numberOfChildren">Aantal kinderen:</label>
            <input type="number" min="1" required>

            <label for="reservationDate">Kies uw datum:</label>
            <input type="date" required>

            <label for="reservationTime">Kies uw tijd:</label>
            <input type="time" required>

            <label for="note">EV. opmerkingen:</label>
            <textarea rows="4" placeholder="Kinderstoelen, allergieën etc..." cols="50"></textarea>

            <button type="submit">Plaats Reservering</button>
        </form>
        <div class="form-container">
            <form>
                <h1>Restaurant Information</h1>
                <label for="openingTimes">Opening Times:</label>
                <p id="openingTimes">Het restaurant is iedere dag van 17:00 tot 22:00 uur geopend. <br> De bar is van 22:00 tot
                    0:00 open. <br></h1>

                    <label for="tablePrices"><br>Table Prices:</label>
                <p id="tablePrices">Maandag t/m donderdag: <br> 2 uur eten <br>
                    Volwassenen: € 35,- <br>
                    Kinderen: € 25,-
                    <br>
                    Op vrijdag, zaterdag en zondag: <br> 2 uur eten <br>
                    Volwassenen: € 42,- <br>
                    Kinderen: € 32,-</h1>
            </form>
        </div>
    </div>
    @include('footer')
</body>

</html>