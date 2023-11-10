function showMenu(category) {
    // Hide all menu containers
    var menuContainers = document.querySelectorAll('.menu-container');
    menuContainers.forEach(function(container) {
      container.classList.remove('active');
    });

    // Show the selected menu container
    var selectedMenu = document.getElementById(category + '-menu');
    selectedMenu.classList.add('active');
  }