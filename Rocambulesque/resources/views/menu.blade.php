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

<header>
    <h1>Restaurant Menu</h1>
  </header>

  <nav>
    <a href="#" onclick="showMenu('main')"><span>Main</span><span class="icon">▼</span></a>
    <a href="#" onclick="showMenu('drinks')"><span>Drinks</span><span class="icon">▼</span></a>
    <a href="#" onclick="showMenu('desserts')"><span>Desserts</span><span class="icon">▼</span></a>
  </nav>

  <section>
    <div id="main-menu" class="menu-container active">
      <h2>Main Courses</h2>
      <div class="menu-category">
        <div class="menu-item">
          <img src="main1.jpg" alt="Main Dish 1">
          <h3>Main Dish 1</h3>
          <p>Description of Main Dish 1.</p>
          <p>Price: $10.99</p>
        </div>
        <div class="menu-item">
          <img src="main1.jpg" alt="Main Dish 1">
          <h3>Main Dish 1</h3>
          <p>Description of Main Dish 1.</p>
          <p>Price: $10.99</p>
        </div>
      </div>
    </div>

    <div id="drinks-menu" class="menu-container">
      <h2>Drinks</h2>
      <div class="menu-category">
        <div class="menu-item">
          <img src="drink1.jpg" alt="Drink 1">
          <h3>Drink 1</h3>
          <p>Description of Drink 1.</p>
          <p>Price: $2.99</p>
        </div>
        <!-- Add more drink items as needed -->
      </div>
    </div>

    <div id="desserts-menu" class="menu-container">
      <h2>Desserts</h2>
      <div class="menu-category">
        <div class="menu-item">
          <img src="dessert1.jpg" alt="Dessert 1">
          <h3>Dessert 1</h3>
          <p>Description of Dessert 1.</p>
          <p>Price: $5.99</p>
        </div>
        <!-- Add more dessert items as needed -->
      </div>
    </div>
  </section>

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
      var clickedLink = document.querySelector('nav a[href="#"][onclick*="' + category + '"]');
      clickedLink.classList.add('active');
    }
  </script>

</body>

</html>