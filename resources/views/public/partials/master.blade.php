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
  <img class="Adds-header" src='images/{{$ad->ad_image }}' alt="Adds-header">   
    @endif
    @endforeach
        </div>
		</div>
@include('/public/partials/nav')
@include('/public/partials/featured')
@include('/public/partials/top_stories')


@yield('content')







@include('/public/partials/footer')
