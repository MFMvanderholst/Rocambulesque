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
    <a onclick="showMenu('desserts')">Desserts</a>
  </nav>

  <section>
  
  <div id="pre-menu" class="menu-container active">
      <h2>Voorgerechten</h2>
      <div class="menu-category">
        @foreach ($voorgerecht as $item)
        <div class="menu-item">
          <img src="{{$item->image}}">
          <h3> {{$item->name}}</h3>
          <p>{{$item->description}}</p>
          <p>Є{{$item->price}}</p>
        </div>
        @endforeach
      </div>
    </div>
    <div id="main-menu" class="menu-container">
      <h2>Hoofdgerechten</h2>
      <div class="menu-category">
        @foreach ($hoofdgerecht as $item)
        <div class="menu-item">
          <img src="{{$item->image}}">
          <h3> {{$item->name}}</h3>
          <p>{{$item->description}}</p>
          <p>Є{{$item->price}}</p>
        </div>
        @endforeach
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
      <h2>Desserts</h2>
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