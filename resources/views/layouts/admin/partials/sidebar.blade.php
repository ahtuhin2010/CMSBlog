<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">

  <div class="logo">
    <a href="http://www.creative-tim.com" class="simple-text logo-normal">
      Creative Tim
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item {{ Request::is('admin/dashboard*') ? 'active': ''}}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="material-icons">person</i>
          <p>Users</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="./tables.html">
          <i class="material-icons">content_paste</i>
          <p>Tags</p>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="material-icons">bubble_chart</i>
          <p>Categories</p>
        </a>
      </li>

      <li class="nav-item ">
        <a class="nav-link" href="./map.html">
          <i class="material-icons">location_ons</i>
          <p>Trashed Posts</p>
        </a>
      </li>
    </ul>
  </div>
</div>
