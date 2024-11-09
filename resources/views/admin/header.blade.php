<style>
  #logout
  {
    color:white; 
    background-color: #12151e;
    border: none;
  }
</style>


<div class="container-fluid page-body-wrapper">
<nav class="navbar p-0 fixed-top d-flex flex-row" style="background-color: #001B29">
    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
      {{-- logo --}}
      <a class="navbar-brand brand-logo-mini" href="index.html"><img src="Home/images/icon.png" alt="logo" /></a>
    </div>
    {{-- end logo --}}
    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
      </button>
      <ul class="navbar-nav w-100">
        <li class="nav-item w-100">
          
        </li>
      </ul>
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item dropdown d-none d-lg-block">
          
        </li>
        <li class="nav-item dropdown border-left">
         
        </li>
















        {{-- parti Admin --}}
        <li class="nav-item dropdown">
          <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
            <div class="navbar-profile">
             
              <p class="mb-0 d-none d-sm-block navbar-profile-name">Admin</p>
              <i class="mdi mdi-menu-down d-none d-sm-block"></i>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
            
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item" href="{{ route('profile.show') }}">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-settings text-success"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject mb-1">Profil</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-logout text-danger"></i>
                </div>
              </div>
              <form action="{{ url('logout') }}" method="POST">
                {{ csrf_field() }}
                <input id="logout"  type="submit" value="logout">
                </form>
            </a>
            <div class="dropdown-divider"></div>
           
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-format-line-spacing"></span>
      </button>
    </div>
   
  </nav>