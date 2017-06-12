<div class="nav-seconed">
	<nav class="navbar navbar-inverse" ng-controller="mainCtrl">
  <div class="container">
	  
	  
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
		
 <a class="navbar-brand  navbar-brand-logo Logo-active" href="#">
            <div class="logo"><img alt="Task Helper Logo" src="{{url('home/image/logo.png') }}"></div>
                        
            </a>
	 </div>
	  
	  
	  
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="activee"><a class="allNews">All news</a></li>
@foreach($sections as $section)
<li><a href="#" class="Politic">{{$section->name}}</a></li>
@endforeach

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <span>
	
			<input type="text" placeholder="   Search ...." >
	
		  </span>
		  <span><i class="fa fa-search fa-2x btn btnSearch" aria-hidden="true"></i>
          </span>
      </ul>
    </div>
  </div>
</nav>
</div>
   <div class="container-fluid section-hotnews" > 
    <div class="title-hotnews container">
     <span class="nameTitle">Breaking News</span> 
    <marquee id="section-hotnews"  WIDTH="83%" onmouseover="this.stop();" onmouseout="this.start();">
@foreach($breaking_posts as $breaking_post)
<small>2 hour ago</small><a href="#" > {{$breaking_post->post_headline}}
  </a>  
@endforeach  
         </marquee>
    </div>
    </div>
