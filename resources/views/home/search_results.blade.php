<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->


      @include('home.homecss')
      
      <style>
        .container 
        {
            text-align: center;
            font-size: 14px;
        }
        .container h2
        {
            font-size: 24px;
        }
      </style>

   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')
      </div>
      
      
      
      <div class="container">
        <h2>Search Results for "{{ $query }}"</h2>

        @if($posts->isEmpty())
            <p>No results found.</p>
        @else
            <ul>
                @foreach($posts as $post)
                    <li><a href="{{ url('post_details', ['id' => $post->id]) }}">{{ $post->title }}</a></li>         
                    <li><a href="{{ url('post_details', ['id' => $post->id]) }}">{{ $post->description }}</a></li>
                    <li><a href="{{ url('post_details', ['id' => $post->id]) }}">{{ $post->name }}</a></li>
                    <li>
                        <a href="{{ url('post_details', ['id' => $post->id]) }}">
                            <img src="{{ asset('postimage/' . $post->image) }}" alt="{{ $post->title }}" style="display: block; margin: 0 auto; width: 500px; height: 300px;">
                            {{ $post->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>

      
      <!-- footer section start -->
      @include('home.footer')
      <!-- footer section end -->
      
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
   </body>
</html>