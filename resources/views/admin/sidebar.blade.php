<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src="admincss/img/arogya.jpg" alt="..." class="img-fluid rounded-circle"></div>
      <div class="title">
        <h1 class="h5">Arogya Hada</h1>
        <p>Web Developer</p>
      </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main Controls</span>
    <ul class="list-unstyled">

            <li><a href="{{url('/home')}}"> <i class="icon-grid"></i>Home </a></li>

            <li><a href="{{url('post_page')}}"> <i class="icon-grid"></i>Add Post </a></li>
            
            <li><a href="{{url('/show_post')}}"> <i class="fa fa-bar-chart"></i>Show Post </a></li>
            
    </ul>
  </nav>