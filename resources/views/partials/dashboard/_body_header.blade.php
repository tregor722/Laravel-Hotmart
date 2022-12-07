<nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
  <div class="container-fluid navbar-inner">
    <a href="{{route('dashboard')}}" class="navbar-brand">

      <h4 class="logo-title">Robot Name</h4>
    </a>
    <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
      <i class="icon">
        <svg width="20px" height="20px" viewBox="0 0 24 24">
          <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
      </svg>
      </i>
    </div>
    <div class="input-group search-input">
      <span class="input-group-text" id="search-input">
        <svg width="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
          <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
      </span>
      <input type="search" class="form-control" placeholder="Search...">
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      <span class="navbar-toggler-icon">
        <span class="navbar-toggler-bar bar1 mt-2"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto  navbar-list mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a href="#" class="search-toggle nav-link" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{{asset('images/Flag/flag001.png')}}" class="img-fluid rounded-circle" alt="user" style="height: 30px; min-width: 30px; width: 30px;">
            <span class="bg-primary"></span>
          </a>
          <div class="sub-drop dropdown-menu dropdown-menu-end p-0" aria-labelledby="dropdownMenuButton2">
            <div class="card shadow-none m-0 border-0">
              <div class=" p-0 ">
                <ul class="list-group list-group-flush">
                  <li class="iq-sub-card list-group-item"><a class="p-0" href="#"><img src="{{asset('images/Flag/flag-03.png')}}" alt="img-flaf" class="img-fluid me-2" style="width: 15px;height: 15px;min-width: 15px;"/>Spanish</a></li>
                  <li class="iq-sub-card list-group-item"><a class="p-0" href="#"><img src="{{asset('images/Flag/flag-04.png')}}" alt="img-flaf" class="img-fluid me-2" style="width: 15px;height: 15px;min-width: 15px;"/>Italian</a></li>
                  <li class="iq-sub-card list-group-item"><a class="p-0" href="#"><img src="{{asset('images/Flag/flag-02.png')}}" alt="img-flaf" class="img-fluid me-2" style="width: 15px;height: 15px;min-width: 15px;"/>French</a></li>
                  <li class="iq-sub-card list-group-item"><a class="p-0" href="#"><img src="{{asset('images/Flag/flag-05.png')}}" alt="img-flaf" class="img-fluid me-2" style="width: 15px;height: 15px;min-width: 15px;"/>German</a></li>
                  <li class="iq-sub-card list-group-item"><a class="p-0" href="#"><img src="{{asset('images/Flag/flag-06.png')}}" alt="img-flaf" class="img-fluid me-2" style="width: 15px;height: 15px;min-width: 15px;"/>Japanese</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown align-items-center">
          <a class="nav-link  " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="caption  d-none d-md-block ">
              <h4 class="mb-0 caption-title">{{ auth()->user()->full_name ?? 'Austin Robertson'  }}</h4>
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" role="button" data-setting="color-mode" data-name="color" data-value="dark">Dark Mode</a></li>
            <li><a class="dropdown-item" role="button" data-setting="color-mode" data-name="color" data-value="light">Light Mode</a></li>

            <li><hr class="dropdown-divider"></li>
            <li><form method="POST" action="{{route('logout')}}">
              @csrf
              <a href="javascript:void(0)" class="dropdown-item"
                onclick="event.preventDefault();
              this.closest('form').submit();">
                  {{ __('Log out') }}
              </a>
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


