<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                        <label for="">
                            Uw keuze :
                        </label>
                        <select name="select1">
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="input">
                        <!--here the phone number information will be getting from the database bij get method-->
                        <label for="">
                            Aantal personen :
                        </label>
                        <select name="select2">
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                </div>

                
                <div class="info">
                    <div class="input">
                        <!--here the email information will be getting from the database bij get method-->
                        <label for="">
                            Kies uw datum :
                        </label>
                        <input id="inline-picker" type="date" value="">
                    </div>
                    
                    <div class="input">
                        <!--here the Wachtwoord information will be getting from the database bij get method-->
                        <label for="">
                        Wachtwoord :
                        </label>
                        <input type="time" value="">
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
    