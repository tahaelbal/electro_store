<nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color: #00293D">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top" style="background-color: #00293D">
      <a class="sidebar-brand brand-logo" href="{{url('/')}}"><span class="logo"><img src="Home/images/yyy.png" alt=""></span></a>
      <a class="sidebar-brand brand-logo-mini" href=""><span class="logo"><img src="Home/images/icon.png" alt=""></span></a>
    </div>
    <ul class="nav">
      
      <br><br><br><br>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('/redirect')}}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
          </span>
          <span class="menu-title">Products</span>
          <i class="menu-arrow"></i>
          
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ url('/view_product') }}">Add Products</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('/show_product') }}">Show Products</a></li>
          </ul>
        </div>
      </li>
      
    </ul>
  </nav>










  <style>
    .logo
    {
      color: white;
      text-transform: capitalize;
      letter-spacing: 5px;
      text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
    }
  </style>