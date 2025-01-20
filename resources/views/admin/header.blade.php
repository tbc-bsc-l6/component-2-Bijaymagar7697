<header class="header">   
    <nav class="navbar navbar-expand-lg">
      <div class="search-panel">
        <div class="search-inner d-flex align-items-center justify-content-center">
          <div class="close-btn">Close <i class="fa fa-close"></i></div>
          <form id="searchForm" action="#">
            <div class="form-group">
              <input type="search" name="search" placeholder="What are you searching for...">
              <button type="submit" class="submit">Search</button>
            </div>
          </form>
        </div>
      </div>
      <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="navbar-header">
          <!-- Navbar Header--><a href="/home" class="navbar-brand">
            <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Admin</strong><strong style="padding: 5px;">Panel</strong></div>
            {{-- <div class="brand-text brand-sm"><strong class="text-primary">A</strong><strong>P</strong></div></a> --}}
          <!-- Sidebar Toggle Btn-->
          {{-- <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button> --}}
        </div>
        <div class="right-menu list-inline no-margin-bottom">    
          
          <!-- Log out               -->
          <div class="list-inline-item logout">    

            <form method="POST" action="{{ route('logout') }}">
              @csrf

              <x-dropdown-link :href="route('logout')"
                      onclick="event.preventDefault();
                                  this.closest('form').submit();">
          <p style="color:white!important;">    {{ __('Log Out') }} </p>
              </x-dropdown-link>
          </form>
            
          </div>
        </div>
      </div>
    </nav>
  </header>