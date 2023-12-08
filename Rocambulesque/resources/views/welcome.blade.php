<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <title>Restaurant Homepage</title>
</head>

<body>

<div class="bg"></div>

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
                                <h1>Bienvenue</h1> 
                                <h2>
                                bij Rocambolesque, waar we de charme en smaken van de Franse keuken naar jouw tafel brengen. Stap binnen en laat je meeslepen door de verfijnde ambiance en de heerlijke aroma's die onze keuken vullen.
                                </h2>
                            </div>
                            <img src="images/img2.png" alt="Restaurant Photo 3">
                        </div>
                        <div class="photo3">
                            <div class="content2">
                                <h1>Ontdek</h1>
                                <h2>de heerlijke finesse van onze gerechten, bereid met zorgvuldig geselecteerde ingrediënten die de essentie van Franse culinaire expertise weerspiegelen. Bekijk ons menu, reserveer je tafel en laat ons je meenemen op een reis door de rijke smaakpaletten van de Franse keuken.</h2>
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