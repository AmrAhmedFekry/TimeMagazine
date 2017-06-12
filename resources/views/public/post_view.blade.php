@include('public.partials.header')
	<body>

		<!--first navbar -->
		<div class="nav-frist">
	<nav class="navbar navbar-inverse" ng-controller="mainCtrl">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbarArchives">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
 <ul class="navbar-brand navbar-right" >T-Magazine</ul>

    </div>
	  
    <div class="collapse navbar-collapse" id="myNavbarArchives">
      <ul class="nav navbar-nav">
        <li><a href="#">Arshives</a></li>
	  <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
		
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><i class="fa fa-facebook-official fa-2x"  aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
		 <li><a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>

      </ul>
		
    </div>
	  
  </div>
</nav>
</div>
		<!--start section header -->
        <div class="section-header"> 
		<div class="container">	
		<div class="logo-header ">
		<h1> 
Time Magazine
</h1>	
      </div>
    @foreach($ads as $ad)
    @if($ad->ad_position == 'Header')
  <img class="Adds-header" src='/images/{{$ad->ad_image }}' alt="Adds-header">   
    @endif
    @endforeach
        </div>
		</div>
@include('/public/partials/nav')
@yield('content')





<div  class="change-content  content container-fluid">
	 <div class="container">
	<div class="col-md-12 post-view">
		 <div class="col-md-9 header-post">
		<span class="title-post">{{$post->post_category}}</span>
           <h3 class="title-header">{{$post->post_headline}}
            </h3> 
	<span class="date-post">{{date('M j, Y', strtotime($post->created_at))}} </span>	
		<hr>
			 <div class="col-md-4 more-news">
			 <h4>More in {{$post->post_category}}:</h4>
			<hr class="more">
			@foreach($section_posts as $section_post)
			<div class="item-content-post">
			@if($post->post_photo == 'No Photo')
		<a href="{{route('new_details',$section_post->id)}}">	<img src="https://img.youtube.com/vi/{{$section_post->post_video}}/sddefault.jpg"></a>
			@else
		<a href="{{route('new_details',$section_post->id)}}">	<img src="/images/{{$section_post->post_photo}}"></a>
			@endif

		<a href="{{route('new_details',$section_post->id)}}">	  <h4>{{$section_post->post_headline}} </h4> </a>	
				<span>{{date('M j, Y', strtotime($post->created_at))}}</span>
		   </div>
			@endforeach
				 
			
				 
			
			 
			 
			 </div>
			 <div class="col-md-8 content-post">
			  <div class="post-details">
			  @if($post->post_photo == 'No Photo')
<img src="https://img.youtube.com/vi/{{$post->post_video}}/sddefault.jpg">
@else
				<img src="/images/{{$post->post_photo}}">

			  @endif
				 </div> 
				 <div class="p-post-details">
				  <p>{{$post->post_content}}.</p>
		              
		              @if($post->post_video == 'No Video')
		            <p class="video-news">
<iframe width="500" height="315" frameborder="0" allowfullscreen></iframe>
					 </p>
		              @else

                  <p class="video-news">
<iframe width="500" height="315" src="https://www.youtube.com/embed/{{$post->post_video}}" frameborder="0" allowfullscreen></iframe>
					 </p>
		              @endif	 
				  </div> 
			 
			 
			 
			 
			 
			 
			 
			 
				 
			<hr>	 
			 </div>
			 <div class="add-comment">
			 <h3>Add Comment</h3>
			<span>Your email address will not be published. Required fields are marked *
</span>
				 <br>
		<form class="form">		 
		<div class="form-group">		 
		<label for="name">Name</label>	
 <input class="form-control" type="text" placeholder="Enter Name" id="name"> 
				 </div>		
					 <br>
	<div class="form-group">		 
	<label for="email">Email</label>	
 <input class="form-control" type="Email" placeholder="Enter Email" id="email"> 			 
	</div>
	<br>
	 <div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>
		
		 <div class="form-group">
			 <button class="btn bttn">Post Comment</button>
				 </div>			 
				 
		</form>
				 
				 
			 </div>
		</div>
		
	<div class="col-md-3 right-side">
		
             <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home-Recent">Recent</a></li>
    <li><a data-toggle="tab" href="#menu-popular">Popular</a></li>
  </ul>

             
  <div class="tab-content">
    <div id="home-Recent" class="tab-pane fade  in active home-Recent">
     <br>
		
    @foreach($recents as $recent)
     <div class="content-rescnt">
    @if($recent->post_photo == 'No Photo')
<a href="{{route('new_details',$recent->id)}}"> <img src="https://img.youtube.com/vi/{{$recent->post_video}}/sddefault.jpg"></a>
@else
<a href="{{route('new_details',$recent->id)}}"><img src="/images/{{$recent->post_photo}}"> </a>

			  @endif
<p><a href="{{route('new_details',$recent->id)}}">{{substr($recent->post_headline , 0 , 25)}}</a></p>
		 <br>
    </div>
    @endforeach
  
		
   
		
		
        
        </div>
	  
	  
    <div id="menu-popular" class="tab-pane fade">
       <div class="popular-content ">    
		   <h4><a>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h4>
		   <span><a> 7 comment</a></span>           
     <hr>   
    </div>
          <div class="popular-content ">    
			  <h4><a>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h4>
			  <span> <a> 6 comment</a></span>           
     <hr>   
    </div>
          <div class="popular-content ">    
			  <h4><a>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h4>
			  <span><a> 5 comment</a></span>           
     <hr>   
    </div>
        
        
    </div>
</div>
	
		
 <div class="world-right">
		 
	
		 
		<div class="content-world-right panel "> 
		<div class="panel-heading">	
		 <h3>Follow us</h3>
			</div>	
	<div class="panel-body">		
       <p>Let's connect on any of these social networks!</p> 
		 <div class="button-btn">
		<span class="facebook"><a href="#" ><i class="fa fa-facebook-official fa-2x"  aria-hidden="true"></i></a></span>
        <span class="instagram"><a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></span>
		 <span class="twitter"><a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></span> 
		 </div> 
		 </div>	 
		 </div>
	</div> 
		
		
		
		
	    <div class="panel subscribt">
				<div class="panel-heading"><h3>Subscribe to Blog via Email</h3></div>
      <div class="panel-body"><p>
		  
		  Enter your email address to subscribe to this blog and receive notifications of new posts by email. </p>
		<input type="email" class="form-control" placeholder="Email Address">
		 <button class="btn btn-block bttn btn-hover">Subscribe </button> 
				
				
				</div>
    </div>	
		
		
 <div class=" adds-three">
			 
		<img src="image/adds3.png"> 
			 
	</div>
		
		 <div class=" adds-three">
			 
		<img src="image/adds3.png"> 
			 
	</div>
		
		
		
		
 </div>	
		
		
	
		
 </div>	 
			
			
			</div>
	
		
		</div>


@include('/public/partials/footer')
