<div  class="change-content  content container-fluid">
	 
	<div class=" container" id="content" >
	 
		
<div class="row">
	
  <div class="col-xs-12 col-md-6 col-sm-12 first-section  ">
	
<div class=" news">
			<span  href="#" class="span-featured">Featured</span>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

<?php $var = 1 ;  ?>     
@foreach($featured_posts as $featured_post)
@if($var == 1 )
<div class="item active">
@else
<div class="item ">
@endif
@if($featured_post->post_photo == 'No Photo')
 <img src="https://img.youtube.com/vi/{{$featured_post->post_video}}/maxresdefault.jpg" alt="Chania" >
        <div class="carousel-caption">
@else
 <img src='/images/{{$featured_post->post_photo}}' alt="Chania" >
        <div class="carousel-caption">
@endif
           <h3>
  <a href="{{route('new_details',$featured_post->id)}}">{{$featured_post->post_headline}}</a>
			   <br>
		<small class="details">
	<span>{{date('M j, Y', strtotime($featured_post->created_at))}} </span>	
		</small>
		</h3>
        </div>
      </div>
<?php $var = $var+1; ?>      
@endforeach
      

  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
			
	
			
  </div>

     </div>		  
	
 </div>
	

	<div class="col-xs-12 col-md-6 col-sm-12  subFirst-section">

@foreach($featured_posts as $featured_post)

	<div class=" col-xs-12 col-md-6 col-sm-6 subFirst1  hover">
				

		<div class="containt-sub">

@if($featured_post->post_photo == 'No Photo')
<a href="{{route('new_details',$featured_post->id)}}" > <img src="https://img.youtube.com/vi/{{$featured_post->post_video}}/maxresdefault.jpg" alt="Chania" > </a>

@else
       <a href="{{route('new_details',$featured_post->id)}}" ><img src='/images/{{$featured_post->post_photo}}' ></a>
            <div class="subFirst-item" id="subFirst-item">
@endif			



              <h3><a href="{{route('new_details',$featured_post->id)}}" >{{$featured_post->post_headline}}</a></h3>

              <span class="date">{{date('M j, Y', strtotime($featured_post->created_at))}}</span>
              <span class="comment">0 Comment</span>
            </div>
			
		</div>	
	</div>	


@endforeach

	
	
	
	</div>
</div>