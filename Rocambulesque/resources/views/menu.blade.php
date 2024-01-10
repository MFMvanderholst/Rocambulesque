<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">
    <title>Menu page</title>
</head>

<body>

@include('navbar')

</div>
  <div class="bg">
  </div>


<div class="menu">

<h1>Restaurant Menu</h1>

  <nav>
    <a class="active" onclick="showMenu('pre')">Voorgerechten</a>
    <a onclick="showMenu('main')">Hoofdgerechten</a>
    <a onclick="showMenu('drinks')">Drankjes</a>
    <a onclick="showMenu('desserts')">Nagerechten</a>
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
      <h2>Dranken</h2>
      <div class="menu-category">
        @foreach ($dranken as $item)
        <div class="menu-item">
          <img src="{{$item->image}}">
          <h3> {{$item->name}}</h3>
          <p>{{$item->description}}</p>
          <p>Є{{$item->price}}</p>
        </div>
        @endforeach
      </div>
    </div>

    <div id="desserts-menu" class="menu-container">
      <h2>Nagerechten</h2>
      <div class="menu-category">
        @foreach ($nagerecht as $item)
        <div class="menu-item">
          <img src="{{$item->image}}">
          <h3> {{$item->name}}</h3>
          <p>{{$item->description}}</p>
          <p>Є{{$item->price}}</p>
        </div>
        @endforeach
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