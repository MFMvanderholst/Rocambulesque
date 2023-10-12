<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>Restaurant Homepage</title>
</head>

<body>
    <div class="homepage">


        <header>
            @include('navbar')
        </header>


        <main>
            <div class="background-image">
                <div class="restaurant-photos">

                    <div class="photo-column">
                        <div class="photo1">
                            <img src="images/img1.png" alt="Restaurant Photo 1">
                        </div>
                        <div class="photo2">
                            <div class="content1">
                                <h1>Welkom bij Restaurant Rocambolesque

                                    Ontdek onze gloednieuwe eetervaring in Utrecht. Bij Restaurant Rocambolesque combineren we eigentijdse culinaire creativiteit met een warme en gastvrije sfeer.</h1>
                            </div>
                            <img src="images/img2.png" alt="Restaurant Photo 3">
                        </div>
                        <div class="photo3">
                            <div class="content2">
                                <h1>Binnenkort kunt u al onze beschikbare arrangementen en seizoensmenu's bekijken, reserveringen beheren en zelfs speciale aanbiedingen voor feestdagen ontdekken. We kijken ernaar uit om u binnenkort te verwelkomen bij Rocambolesque!</h1>
                            </div>
                            <img src="images/img3.png" alt="Restaurant Photo 2">
                        </div>
                    </div>



                </div>
            </div>
        </main>
    </div>
    @include('footer')
</body>

</html>