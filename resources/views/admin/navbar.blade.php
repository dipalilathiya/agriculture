  <!-- Sidebar -->
  <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center p-0" href="index.html">
      <div class="sidebar-brand-icon">
        <img src="img/logo.png">
      </div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
      <a class="nav-link" href="{{route("home")}}">
      <img src="img/layout.png" style="height: 17px; width:17px;" alt="">
        <span>Dashboard</span></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="{{route("Category")}}">
        <img src="img/category.png" style="height: 17px; width:17px;" alt="">
        <span>Category</span></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="{{route("Tools")}}">
        <img src="img/settings.png" style="height: 17px; width:17px;" alt="">
        <span>Tools</span></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="{{route("Blog")}}">
      <img src="img/blog.png" style="height: 17px; width:17px;" alt="">
        <span>Blog</span></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="{{route("Rent")}}">
      <img src="img/key.png" style="height: 17px; width:17px;" alt="">
        <span>Rent</span></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="{{route("Contact")}}">
      <img src="img/phone-book.png" style="height: 17px; width:17px;" alt="">
        <span>Contect Us</span></a>
    </li>
    <hr class="sidebar-divider">
  </ul>
<!-- Sidebar -->
<div id="content-wrapper" class="d-flex flex-column">
<div id="content">
  <!-- TopBar -->
  <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
      <i class="fa-solid fa-bars text-primary"></i>
    </button>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-search fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
          aria-labelledby="searchDropdown">
          <form class="navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?"
                aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <div class="topbar-divider d-none d-sm-block"></div>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
          <span class="ml-2 d-none d-lg-inline text-white small">Aditya</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="../user/login.html">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- Topbar -->
