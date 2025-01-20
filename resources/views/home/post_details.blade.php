<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <base href="/public">

      @include('home.homecss')
      
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')
      </div>

      <div style="text-align: center; margin: auto;" class="col-md-6">
        <div><img style="padding: 20px;" src="/postimage/{{$post->image}}" class="services_img"></div>
        <h3><b>{{$post->title}}</b></h3>
        <h4>{{$post->description}}</h4>
        <p>Post by<b>{{$post->name}}</b></p>
     </div>

      <!-- footer section start -->
      @include('home.footer')
      <!-- footer section end -->
      
      <!-- copyright section end -->
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