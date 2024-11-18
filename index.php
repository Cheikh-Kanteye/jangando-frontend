<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jangando School Management System</title>
  <link rel="stylesheet" href="css/style.css" />
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet" />
  <link rel="stylesheet" href="css/calendar.css" />
</head>

<body>
  <main class="container">
    <aside class="sidebar">
      <div class="logo">
        <a href="pages/home.html" class="row" style="gap: 4px">
          <img src="assets/images/logo-icon.png" alt="" />
          <span style="font-size: 1.35rem">Jangando</span>
        </a>
      </div>
      <nav id="menu"></nav>
    </aside>
    <div class="overlay"></div>
    <div class="flex-1">
      <header class="row row-between">
        <div class="row">
          <button class="toggle_menu-btn" id="show-menu">
            <i class="ri-menu-line"></i>
          </button>
          <div class="row search-input">
            <input
              type="text"
              placeholder="Search..."
              name="search"
              id="search" />
            <i class="ri-search-line"></i>
          </div>
        </div>

        <div class="row">
          <button><i class="ri-message-3-line"></i></button>
          <button><i class="ri-notification-3-line"></i></button>
          <div class="row profile">
            <div>
              <h5>John Doe</h5>
              <small>admin</small>
            </div>
            <div class="img">
              <img src="" alt="user" />
            </div>
          </div>
        </div>
      </header>
      <section
        class="content row items-start app"
        id="content"
        style="padding-right: 16px"></section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- <script src="js/caleandar.js"></script> -->
    <script src="js/main.js"></script>
  </main>
</body>

</html>