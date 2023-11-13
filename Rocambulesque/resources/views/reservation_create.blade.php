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

    <div class="form-container">

        @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>'{{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <form method="post" action="/reservations">
            @csrf
            <h1>Reservatie formulier</h1>
            <label for="mealType"">Uw keuze:</label>
            <select name=" mealType">
                <option value="Dinner">Dinner</option>
                <option value="Lunch">Lunch</option>
                </select>
                @error('mealType')
                <p>{{ $message }}</p>
                @enderror

                <label for="adults">Aantal volwassenen (+12):</label>
                <input type="number" min="1" max="4" name="adults">
                @error('adults')
                <p>{{ $message }}</p>
                @enderror
                <label for="children">Aantal kinderen:</label>
                <input type="number" min="0" max="2" name="children">
                @error('children')
                <p>{{ $message }}</p>
                @enderror

                <label for="date">Kies uw datum:</label>
                <input type="date" name="date">
                @error('date')
                <p>{{ $message }}</p>
                @enderror

                <label for="time">Kies uw tijd:</label>
                <input type="time" name="time">
                @error('time')
                <p>{{ $message }}</p>
                @enderror

                <label for="remark">EV. opmerkingen:</label>
                <textarea name="remark" rows="4" placeholder="Kinderstoelen, allergieën etc..." cols="50"></textarea>
                @error('remark')
                <p>{{ $message }}</p>
                @enderror

                <button type="submit">Plaats Reservering</button>
        </form>
        <div class="form-container">
            <form>
                <h1>Restaurant Informatie</h1>
                <label for="openingTimes">Opening Tijden:</label>
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