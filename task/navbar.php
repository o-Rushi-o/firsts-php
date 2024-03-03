<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>navbar</title>
    <link rel="stylesheet" href="navbar.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />

    <!-- remix icon link -->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body>
    <header class="header">
      <a href="#" class="logo">Shop.co</a>
      <ul class="nav-list" id="nav-list">
        <li><a href="#">Shop</a></li>
        <li><a href="#">On Sale</a></li>
        <li><a href="#">New Arrivals</a></li>
        <li><a href="#">Brands</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <div class="nav-right">
        <a href="#"><i class="ri-search-line"></i></a>
        <a href="#"><i class="ri-shopping-cart-line"></i></a>
        <a href="#"><i class="ri-user-line"></i></a>
        <div class="bx bx-menu" id="menu-icon"></div>
      </div>
    </header>
  </body>
  <script>
    let menu = document.querySelector("#menu-icon");
    let navList = document.querySelector(".nav-list");

    menu.onclick = () => {
      menu.classList.toggle("bx-x");
      navList.classList.toggle("open");
    };

    window.onscroll = () => {
      menu.classList.remove("bx-x");
      navList.classList.remove("open");
    };
  </script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></sc>
  <script>
    AOS.init({
      offset: 300,
      duration: 1450,
    });
  </script>
</html>
