<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->

      @include('home.homecss')

      <style>
        .post_deg
        {
            padding: 30px;
            text-align: center;
            background-color: black;
        }
        .title_deg
        {
            font-size: 30px;
            font-weight: bold;
            padding: 15px;
            color: white;
        }
        .des_deg
        {
            font-size: 18px;
            font-weight: bold;
            padding: 15px;
            color: white;
        }
        .img_deg
        {
            height: 200px;
            width: 300px;
            padding: 30px;
            margin: auto;
        }
      </style>
      
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')

        @if(session()->has('message'))

        <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

            {{session()->get('message')}}

        </div>

        @endif

        @foreach($post as $post)

        <div class="post_deg">
            <img class="img_deg" src="/postimage/{{$post->image}}">
            <h4 class="title_deg">{{$post->title}}</h4>
            <p class="des_deg">{{$post->description}}</p>
            <a onclick="return confirm('Are you sure to delete this post?')" href="{{url('my_post_del',$post->id)}}" class="btn btn-danger">Delete</a>

            <a href="{{url('post_update_page',$post->id)}}" class="btn btn-primary">Update</a>

        </div>

        @endforeach

      </div>
      
      
      <!-- footer section start -->
      @include('home.footer')
      <!-- footer section end -->
      
         
   </body>
</html>