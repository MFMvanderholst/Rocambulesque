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

    </div>
  <div class="bg">
  </div>
  
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
            <select id="reservationTime" required>
              <option value="17:00">05:00 PM</option>
              <option value="17:15">05:15 PM</option>
              <option value="17:30">05:30 PM</option>
              <option value="17:45">05:45 PM</option>
              <option value="18:00">06:00 PM</option>
              <option value="18:15">06:15 PM</option>
              <option value="18:30">06:30 PM</option>
              <option value="18:45">06:45 PM</option>
              <option value="19:00">07:00 PM</option>
              <option value="19:15">07:15 PM</option>
              <option value="19:30">07:30 PM</option>
              <option value="19:45">07:45 PM</option>
              <option value="20:00">08:00 PM</option>
            </select>


            <label for="note">EV. opmerkingen:</label>
            <textarea rows="4" placeholder="Kinderstoelen, allergieën etc..." cols="50"></textarea>

            <button type="submit">Plaats Reservering</button>
        </form>
    <div class="form-container">
        <form>
            <h1>Restaurant Informatie</h1>
            <label for="openingTimes">Openingstijden:</label>
            <p id="openingTimes">Het restaurant is iedere dag van 17:00 tot 22:00 uur geopend. <br> De bar is van 22:00 tot
                0:00 open. <br></h1>
            
            <label for="tablePrices"><br>Tafel prijzen:</label>
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