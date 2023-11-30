<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">
    <title>Menu page</title>
</head>
<header>
    @include('navbar')
</header>
<body>


</div>
  <div class="bg">
  </div>


<div class="menu">

<h1>Restaurant Menu</h1>

  <nav>
    <a onclick="showMenu('pre')">Voorgerechten</a>
    <a onclick="showMenu('main')">Hoofdgerechten</a>
    <a onclick="showMenu('drinks')">Drankjes</a>
    <a onclick="showMenu('desserts')">Nagerechten</a>
  </nav>

  <section>
  <div id="pre-menu" class="menu-container active">
      <h2>Voorgerechten</h2>
      <div class="menu-category">
        <div class="menu-item">
          <img src="images/pre1.jpg">
          <h3>Coquilles</h3>
          <p>Sappige coquilles met een vleugje citrus en verse kruiden. Oceanische uitmuntendheid.</p>
          <p>€11.00</p>
          <img class="marks" src="images/veg.png">
        </div>
        <div class="menu-item">
          <img src="images/pre2.jpg">
          <h3>Escargots</h3>
          <p>Geniet van Franse luxe met onze Escargots: dikke slakken in knoflook-peterselieboter. Een symfonie van smaken in elke hap.</p>
          <p>€10.00</p>
        </div>
        <div class="menu-item">
          <img src="images/pre3.jpg">
          <h3>Steak Tartare</h3>
          <p>Eersteklas rauw rundvlees, kappertjes, uien en pittige mosterddressing. Een culinair genot voor uw zintuigen.</p>
          <p>€13.00</p>
        </div>
        <div class="menu-item">
          <img src="images/pre4.avif">
          <h3>Waterzooi</h3>
          <p>Romige kip- of visstoofpot met groenten in een fluweelzachte bouillon.</p>
          <p>€13.00</p>
        </div>
        <div class="menu-item">
          <img src="images/pre5.webp">
          <h3>Moules Frites</h3>
          <p>Mollige mosselen, aromatische bouillon en knapperige frietjes.</p>
          <p>€14.00</p>
        </div>
        <div class="menu-item">
          <img src="images/pre6.jpg">
          <h3>Franse uiensoep</h3>
          <p>Gekarameliseerde uien, rijke runderbouillon, gesmolten Gruyère en geroosterd stokbrood.</p>
          <p>€12.00</p>
        </div>
      </div>
    </div>

    <div id="main-menu" class="menu-container">
      <h2>Hoofdgerechten</h2>
      <div class="menu-category">
        <div class="menu-item">
          <img src="images/main1.png">
          <h3>Ratatouille</h3>
          <p>Courgette, aubergine en paprika langzaam gegaard met kruiden en tomaten. Besprenkeld met olijfolie.</p>
          <p>€19.00</p>
          <img class="marks" src="images/veg.png">
        </div>
        <div class="menu-item">
          <img src="images/main2.jpg">
          <h3>Tonijn met groenten</h3>
          <p>Schilferige tonijn ontmoet knapperige groenten voor een gezond genot.</p>
          <p>€15.00</p>
        </div>
        <div class="menu-item">
          <img src="images/main3.jpg">
          <h3>Coq au Vin</h3>
          <p>Sappige kip in rode wijn met champignons en uien.</p>
          <p>€16.00</p>
        </div>
        <div class="menu-item">
          <img src="images/main4.jpg">
          <h3>Kip à la Normande</h3>
          <p>Malse kip in een op Normandië geïnspireerde saus met appels, room en een vleugje Calvados.</p>
          <p>€16.00</p>
        </div>
        <div class="menu-item">
          <img src="images/main5.jpg">
          <h3>Quiche Lorraine</h3>
          <p>Boterachtige korst gevuld met spek, room en eieren. Een Franse klassieker.</p>
          <p>€14.00</p>
        </div>
        <div class="menu-item">
          <img src="images/main6.jpg">
          <h3>Boeuf Bourguignon</h3>
          <p>Mals rundvlees in rode wijnsaus met champignons en uien.</p>
          <p>€15.00</p>
        </div>
      </div>
    </div>

    <div id="drinks-menu" class="menu-container">
      <h2>Drankjes</h2>
      <div class="menu-category">
        <div class="menu-item">
          <img src="images/drink1.jpg">
          <h3>Red Wine</h3>
          <p>Een symfonie van gedurfde bessen en subtiele kruiden. Proost op een heerlijke eetervaring.</p>
          <p>€5.00</p>
        </div>
        <div class="menu-item">
          <img src="images/drink2.webp">
          <h3>Muscat Wine</h3>
          <p>Muscatwijn met bloemige aroma's en fruitige gelukzaligheid. Proost op verwennerij.</p>
          <p>€5.00</p>
        </div>
        <div class="menu-item">
          <img src="images/drink3.jpg">
          <h3>Vice Cocktail</h3>
          <p>Verleiding in drie smaken: tropische passievrucht, citrus-sinaasappel en verfrissende aardbei.</p>
          <p>€4.00</p>
        </div>
        <div class="menu-item">
          <img src="images/drink4.jpg">
          <h3>Frozen Mudslide</h3>
          <p>Kies uit drie verleidelijke smaken: rijke chocolade, tropische kokosnoot of romige banaan.</p>
          <p>€6.00</p>
        </div>
        <div class="menu-item">
          <img src="images/drink5.webp">
          <h3>Soda</h3>
          <p>Verfris met de klassieke bruis van Coca-Cola, de pittige kick van Sprite of het fruitige plezier van Fanta. Jouw keuze, jouw verfrissing.</p>
          <p>€3.00</p>
        </div>
        <div class="menu-item">
        <img src="images/drink6.webp">
          <h3>Water 500ml</h3>
          <p>Perfecte keuze voor een schone en hydraterende ervaring.</p>
          <p>€2.00</p>
        </div>
      </div>
    </div>

    <div id="desserts-menu" class="menu-container">
      <h2>Nagerechten</h2>
      <div class="menu-category">
        <div class="menu-item">
          <img src="images/dessert1.jpg">
          <h3>Jésuite</h3>
          <p>Amandelcrème en frambozenjam in bladerdeeg. Gewoon hemels.</p>
          <p>€9.00</p>
        </div>
        <div class="menu-item">
          <img src="images/dessert2.jpg">
          <h3>Île Flottante</h3>
          <p>Met vanille gekuste meringuewolk op een custardzee: een tijdloos Frans genot.</p>
          <p>€9.00</p>
        </div>
        <div class="menu-item">
          <img src="images/dessert3.jpg">
          <h3>Nonnettes</h3>
          <p>Zachte koeken gevuld met sinaasappelmarmelade.</p>
          <p>€10.00</p>
        </div>
        <div class="menu-item">
          <img src="images/dessert4.jpg">
          <h3>Kougloff</h3>
          <p>Luchtige cake met amandelen en citrus, gewoonweg heerlijk</p>
          <p>€14.00</p>
        </div>
        <div class="menu-item">
          <img src="images/dessert5.jpg">
          <h3>Financier</h3>
          <p>Rijke amandelcake, goudbruin en boterachtig.</p>
          <p>€8.00</p>
        </div>
        <div class="menu-item">
          <img src="images/dessert6.jpg">
          <h3>Tarte Citron</h3>
          <p>Pittige citroenwrongel in een knapperige boterkorst. Puur zonneschijn.</p>
          <p>€12.00</p>
        </div>
      </div>
    </div>
  </section>
</div>

@include('footer')

  <script>
    function showMenu(category) {
      // Hide all menu containers
      var menuContainers = document.querySelectorAll('.menu-container');
      menuContainers.forEach(function(container) {
        container.classList.remove('active');
      });

      // Remove 'active' class from all navigation links
      var navLinks = document.querySelectorAll('nav a');
      navLinks.forEach(function(link) {
        link.classList.remove('active');
      });

      // Show the selected menu container
      var selectedMenu = document.getElementById(category + '-menu');
      selectedMenu.classList.add('active');

      // Add 'active' class to the clicked navigation link
      var clickedLink = document.querySelector('nav a[onclick*="' + category + '"]');
      clickedLink.classList.add('active');
    }
  </script>

</body>

</html>