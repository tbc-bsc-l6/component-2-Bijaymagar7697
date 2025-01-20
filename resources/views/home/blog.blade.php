<style>
    /* Styling for the services section */
.services_section {
    background-color: #f8f8f8;
}

/* Styling for the services title */
.services_taital {
    text-align: center;
    font-size: 36px;
    color: #333;
}

/* Styling for the services text */
.services_text {
    text-align: center;
    font-size: 18px;
    color: #666;
}

/* Styling for the individual posts */
.col-md-4 {
    padding: 20px;
    text-align: center;
}

.services_img {
    display: block;
    margin: 0 auto;
    max-width: 100%;
    height: auto;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h4 {
    text-align: center;
    font-size: 24px;
    color: #333;
    margin-top: 10px;
}

p {
    text-align: center;
    font-size: 16px;
    color: #666;
}

/* Styling for the "Read More" button */
.btn_main {
    text-align: center;
    margin-top: 20px;
}

.btn_main a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #3498db;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btn_main a:hover {
    background-color: #2980b9;
}

/* Styling for the pagination */
.pagination {
    text-align: center;
    margin-top: 30px;
}

.pagination ul {
    list-style: none;
    padding: 0;
}

.pagination li {
    display: inline-block;
    margin: 0 5px;
}

.pagination a, .pagination span {
    display: inline-block;
    padding: 8px 16px;
    text-decoration: none;
    color: #3498db;
    border: 1px solid #3498db;
    border-radius: 5px;
}

.pagination .page-item.active a {
    background-color: #3498db;
    color: #fff;
    border: 1px solid #3498db;
}

.pagination a:hover {
    background-color: #2980b9;
    color: #fff;
}

/* Remove pagination arrows */
.pagination .page-item:first-child .page-link::before,
.pagination .page-item:last-child .page-link::after {
    display: none !important;
}



</style>
<div class="services_section layout_padding">
    <div class="container">
       <h1 class="services_taital" style="padding: 40px;">Blog Posts </h1>
       <p class="services_text" style="padding: 40px;">Share your amazing stories here</p>
       <div class="services_section_2">
          <div class="row">
 
             @foreach($posts as $post)
 
             <div class="col-md-4" style="padding: 50px">
                <div><img style="margin-bottom: 20px; width: 400px; height: 200px;" src="/postimage/{{$post->image}}" class="services_img"></div>
                <h4 style="text-align: center;">{{$post->title}}</h4>
                <p style="text-align: center;">Post by <b>{{$post->name}}</b></p>
                <div class="btn_main"><a href="{{url('post_details',$post->id)}}">Read More</a></div>
             </div>

             @endforeach
             
          </div>
       </div>
       
       <div class="pagination">
        {{ $posts->links() }}
        </div>
    </div>
 </div>