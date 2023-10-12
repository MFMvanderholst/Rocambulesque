<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(["resources/scss/reservation.scss"])
    <title>Reservation Page</title>
</head>

<body>
    <main>
        <!-- background comes here -->
        <img class="logo" src="{{ URL('storage/background.png') }}" alt="">

        <!-- here comes the account information -->
        <form class="container" method="post" action="add">
            @csrf
            <!-- title-->
            <h1>Reservation</h1>

            <div class="info">
                <div class="input">
                    <!--here the name information will be getting from the database bij get method-->
                    <label for="choice">
                        Uw keuze :
                    </label>
                    <select name="choice">
                        <option value="diner">Diner</option>
                        <option value="lunch">Lunch</option>
                    </select>
                </div>
                @error('choice')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="input">
                    <!--here the phone number information will be getting from the database bij get method-->
                    <label for="amount">
                        Aantal personen :
                    </label>
                    <select name="amount">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </div>
            @error('amount')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <div class="info">
                <div class="input">
                    <!--here the email information will be getting from the database bij get method-->
                    <label for="date">
                        Kies uw datum :
                    </label>
                    <input id="inline-picker" type="date" name="date">
                </div>
                @error('date')
                <div class="error-message">
                    <div class="error-text">{{ $message }}</div>
                </div>
                @enderror

                <div class="input">
                    <!--here the time information will be getting from the database bij get method-->
                    <label for="time">
                        time :
                    </label>
                    <input type="time" value="" name="time">
                </div>
                @error('time')
                <div class="error-message">
                    <div class="error-text">{{ $message }}</div>
                </div>
                @enderror
                <div class="input">
                    <!--here the remark information will be getting from the database bij get method-->
                    <label for="remark">
                        Opmerking :
                    </label>
                    <input type="text" value="" name="remark">
                </div>
            </div>
            <div class="btnContainer">
                <button type="submit" class="btnChange">Verzend</button>
                <button class="btnDelete">Verwijderen</button>
                <button class="btnChange">Wijzig</button>
            </div>
        </form>
    </main>
    <script src="../js/reservation.js"></script>
</body>

</html>