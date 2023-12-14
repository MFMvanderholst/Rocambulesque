<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="{{ asset('css/reserveringmaken.css') }}">
    <title>Reservatie maken</title>
</head>

<body>
    <header>
        @include('navbar')
    </header>

    </div>
        <div class="bg">
    </div>
    <div class="form-container">

        <form method="post" action="/reservations">
            @csrf
            <h1>Reservatie formulier</h1>
            <label for="adults">Aantal volwassenen (+12):</label>
            <input type="number" min="1" max="4" name="adults">
            @error('adults')
                <p class="error">{{ $message }}</p>
            @enderror
            <label for="children">Aantal kinderen:</label>
            <input type="number" min="0" max="2" name="children">
            @error('children')
                <p class="error">{{ $message }}</p>
            @enderror

            <label for="date">Kies uw datum:</label>
            <input type="date" name="date" >
            @error('date')
                <p class="error">{{ $message }}</p>
            @enderror

            <label for="time">Kies uw tijd:</label>
            <select name="timeHour" >
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
            </select>
            <select name="timeMinutes">
                <option value="00">00</option>
                <option value="15">15</option>
                <option value="30">30</option>
                <option value="45">45</option>
            </select>
            @error('timeHour', 'timeMinutes')
                <p class="error">{{ $message }}</p>
            @enderror

            <label for="remark">EVT. opmerkingen:</label>
            <textarea name="remark" rows="4" placeholder="Kinderstoelen, allergieën etc..." cols="50"></textarea>
            @error('remark')
                <p class="error">{{ $message }}</p>
            @enderror

                <button type="submit">Plaats Reservering</button>
        </form>
        <div class="form-container">
            <form>
                <h1>Restaurant Informatie</h1>
                <label for="openingTimes">Openings Tijden:</label>
                <p id="openingTimes">Het restaurant is iedere dag van 17:00 tot 22:00 uur geopend. <br> De bar is van 22:00 tot
                    0:00 open. <br></h1>

                    <label for="tablePrices"><br>Tafel Prijzen:</label>
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