<div class="services_section layout_padding">
   <div class="container">
      <h1 class="services_taital" style="padding: 40px;">Blog Posts </h1>
      <p class="services_text" style="padding: 40px;">Share your amazing stories here</p>
      <div class="services_section_2">
         <div class="row">

            @foreach($post as $post)

            <div class="col-md-4" style="padding: 50px">
               <div><img style="margin-bottom: 20px; width: 400px; height: 200px;" src="/postimage/{{$post->image}}" class="services_img"></div>
               <h4 style="text-align: center;">{{$post->title}}</h4>
               <p style="text-align: center;">Post by <b>{{$post->name}}</b></p>
               <div class="btn_main"><a href="{{url('post_details',$post->id)}}">Read More</a></div>
            </div>

            @endforeach
            
         </div>
      </div>
   </div>
</div>