@extends('public.partials.master')

@section('content')
<?php $section_count = 0 ; ?>    
@foreach($sections as $section)
@if($section_count < 5)
@if($section_count == 0)   
<div class="row four-section">
  <div class="start-content-Poltics">
    <span href="#" class="span-featured3">{{$section->name}}</span>
	 <div class="col-md-12">
	<div class=" col-md-8 col-xs-12 col-sm-12  poltics-left ">
   <?php $f_C  = 0 ;  ?>
   @foreach($posts as $post)
   @if($post->post_categotyid == $section->id)
   @if($f_C < 3)
   <div class="col-md-4  col-sm-8 section-one">
        <div class="section-content">    
        <img src="/images/{{$post->post_photo }}">
  <h3><a href="{{route('new_details',$post->id)}}" > {{$post->post_headline}}</h3>  </a> 
    <span>{{date('M j, Y', strtotime($post->created_at))}} </span> <span><a>/  4 comment </a></span> 

        <p>{{substr($post->post_content , 0 , 100)}}  <br> <a href="{{route('new_details',$post->id)}}">[...]</a></p>
            </div>
    </div>
   @endif
   <?php $f_C  = $f_C + 1  ;  ?>   
   @endif
   @endforeach     
    










    </div>
		 
<div class=" col-md-4 col-xs-12 col-sm-12 poltic-right">
             <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home-Recent">Recent</a></li>
    <li><a data-toggle="tab" href="#menu-popular">Popular</a></li>
  </ul>

             
  <div class="tab-content">
    <div id="home-Recent" class="tab-pane fade  in active home-Recent">
     <br>
				
@foreach($recents as $recent)
@if($recent->post_photo == 'No Photo')
<div class="content-rescnt">    
  <a href="{{route('new_details',$recent->id)}}" ><img src="https://img.youtube.com/vi/{{$recent->post_video}}/maxresdefault.jpg"></a>
     <p><a>{{ substr($recent->post_headline, 0, 50).'...' }} </a></p>
     <br>
    </div>
@else
   <div class="content-rescnt">    
      <img src='/images/{{$recent->post_photo}}'>
     <p><a>{{ substr($recent->post_headline, 0, 50).'...' }} </a></p>
     <br>
    </div>


@endif
@endforeach  
		
		
		
        
        </div>
	  
	  
    <div id="menu-popular" class="tab-pane fade">
      


      @foreach($recents as $recent)

    <div class="popular-content ">    
        <h4><a>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h4>
        <span><a> 5 comment</a></span>           
     <hr>   
    </div>
        



@endforeach  

        
    </div>
</div>
			 
 </div>	
		 
         
<!--end panel -->         
         
         
 </div>
	  
 </div>
</div>	
@endif

@if($section_count == 1)
<div class="row five-section">
     <div class="start-content-Poltics">
    <span href="#" class="span-featured2">{{$section->name}}</span>
   <div class="col-md-12">
  <div class=" col-md-8 col-xs-12 col-sm-12  world-left ">
    <?php $s_c = 0 ; ?>
    @foreach($posts as $post)
    @if($post->post_categotyid == $section->id)
    @if($s_c <3 )
    <div class=" col-md-4  col-xs-12 col-sm-8 sub-First  hover">
    <div class="containt-sub">
      
       <a href="{{route('new_details',$post->id)}}" ><img src="/images/{{$post->post_photo }}"></a>
            <div class="subFirst-item" id="subFirst-item">

  <h3><a href="{{route('new_details',$post->id)}}">{{substr($post->post_headline, 0,50)}}</a></h3>

    <span class="date">{{date('M j, Y', strtotime($post->created_at))}}</span>
              <span class="comment">0 Comment</span>
            </div>
      
    </div>  
  </div>


    @endif
    <?php $s_c = $s_c +1 ; ?>
    @endif
    @endforeach
  

    
  
 
<!--start adds -->
    
    <div class="second-adds">
    <img class="Adds-world  " src="home/image/adds2.png" alt="Adds-world"> 
    
    </div>  
    
    
   </div>
     
     
   <div class=" col-md-4 col-xs-12 col-sm-12 world-right">
     
  
     
    <div class="content-world-right panel "> 
    <div class="panel-heading"> 
     <h3>Follow us</h3>
      </div>  
  <div class="panel-body">    
       <p>Let's connect on any of these social networks!</p> 
     <div class="button-btn">
    <span class="facebook"><a href="#" ><i class="fa fa-facebook-official fa-3x"  aria-hidden="true"></i></a></span>
        <span class="instagram"><a href="#"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a></span>
     <span class="twitter"><a href="#"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a></span> 
     </div> 
     </div>  
     </div>
  </div> 
</div>
</div>
</div>
@endif


@if($section_count == 2)

<div class="row six-section">
<div class="start-content-Poltics">
<span href="#" class="span-featured3">{{$section->name}}</span>
<div class="col-md-12">


<div class="col-md-8 col-xs-12 col-sm-12 sub-First ">
<?php $th_c = 0  ; ?>
@foreach($posts as $post)
@if($post->post_categotyid == $section->id)
@if($th_c < 4)
<?php  $section_news[$th_c] = $post ; ?>
@endif
<?php $th_c = $th_c + 1 ; ?>
@endif
@endforeach    


<div class="col-md-6 col-xs-12 col-sm-12 Travel-first-section  "  >
<?php $f_stop = 0 ;  ?>
@foreach($section_news as $section_new)
@if($f_stop < 2)

 <div class="col-md-12 hover"> 
    <div class="containt-sub">
       <a href="{{route('new_details',$section_new->id)}}" ><img src="/images/{{$section_new->post_photo }}"></a>
            <div class="subFirst-item" id="subFirst-item">

              <h3><a href="{{route('new_details',$section_new->id)}}"  >{{$section_new->post_headline}}
</a></h3>

      <span class="date">{{date('M j, Y', strtotime($section_new->created_at))}}</span>
              <span class="comment">0 Comment</span>
            </div>
      
    </div>
</div>

@endif
<?php $f_stop  = $f_stop +1 ;  ?>
@endforeach

</div> 







<div class="col-md-6 col-xs-12 col-sm-12 Travel-second-section ">
<?php $s_stop = 2 ;  ?>
@foreach($section_news as $section_new)
@if($s_stop <= 3)
      <div class="col-md-12 hover">
    <div class="containt-sub">
<a href="{{route('new_details',$section_news[$s_stop]->id)}}" ><img src="/images/{{$section_news[$s_stop]->post_photo }}"></a>
            <div class="subFirst-item" id="subFirst-item">

              <h3><a href="{{route('new_details',$section_news[$s_stop]->id)}}">{{$section_news[$s_stop]->post_headline}}
</a></h3>

      <span class="date">{{date('M j, Y', strtotime($section_news[$s_stop]->created_at))}}</span>
              <span class="comment">7 Comment</span>
            </div>
      
    </div>

</div>
@endif
<?php $s_stop  = $s_stop +1 ;  ?>
@endforeach
</div>



</div>

<div class="col-md-4 col-xs-12 col-sm-6 ">
<div class="col-md-12 col-xs-6 col-sm-6 adds-three">   
<img src="home/image/adds3.png">    
  </div>
     <div class="col-md-12 col-xs-12 col-sm-12">
        <div class="panel subscribt">
        <div class="panel-heading"><h3>Subscribe to Blog via Email</h3></div>
      <div class="panel-body"><p>
      Enter your email address to subscribe to this blog and receive notifications of new posts by email. </p>
    <input type="email" class="form-control" placeholder="Email Address">
     <button class="btn btn-block bttn btn-hover">Subscribe </button>      
</div>
</div>
</div> 
</div>

















</div>    
</div>    
</div>
@endif



@if($section_count == 3)
  <div class="row seven-section">
  <div class="start-content-Sport">
    <span href="#" class="span-featured1">{{$section->name}}</span>
  <div class=" col-md-12 col-xs-12 col-sm-12  ">
<?php $count = 0 ; ?>
@foreach($posts as $post )
@if($post->post_categotyid == $section->id)
@if($count<4)
     <div class="col-md-3  col-xs-12 col-sm-12 section-item">
        <div class="section-content">    
        <img src="/images/{{$post->post_photo }}">
      <h3><a href="{{route('new_details',$post->id)}}"> {{$post->post_headline}}</a></h3>  
    <span> {{date('M j, Y', strtotime($post->created_at))}}</span> <span><a>/  4 comment </a></span> 

        <p> {{substr($post->post_content , 0 , 100)}}<br> <a href="{{route('new_details',$post->id)}}">[...]</a></p>
            </div>
        </div>
@endif        
<?php $count = $count +1 ;  ?>
@endif
@endforeach



    
    </div>  
  </div>

</div>
@endif

@if($section_count== 4)
    <div class="row video-section">
  <div class="start-content-video">
    <span href="#" class="span-featured2">{{$section->name}}</span>
<?php $forth_c = 0  ; ?>
@foreach($posts as $post)
@if($post->post_categotyid == $section->id)
@if($forth_c < 4)
<?php  $video_news[$forth_c] = $post ; ?>
@endif
<?php $forth_c = $forth_c + 1 ; ?>
@endif
@endforeach    





  <div class=" col-md-12 col-xs-12 col-sm-12  ">
<?php $v_stop = 0 ; ?>    
@foreach($video_news as $video_new)
@if($v_stop <2 )
<div class=" col-md-6  col-xs-12 col-sm-12 sub-First  hover">
    <div class="containt-sub">
      
  <a href="{{route('new_details',$video_new->id)}}" ><img src="https://img.youtube.com/vi/{{$video_new->post_video}}/maxresdefault.jpg
"></a>
            <div class="subFirst-item" id="subFirst-item">

              <h3>
          <spa><i class="fa fa-video-camera" aria-hidden="true"></i>
</spa><a href="{{route('new_details',$video_new->id)}}">Goals – {{$video_new->post_headline}}</a></h3>

              <span class="date">{{date('M j, Y', strtotime($post->created_at))}}</span>
              <span class="comment">0 Comment</span>
            </div>
      
    </div>  
  </div> 
 <?php $v_stop = $v_stop +1 ; ?> 
@endif
@endforeach    
    
     
    

   </div> 

  <div class=" col-md-12 col-xs-12 col-sm-12  ">

<?php $sv_stop = 2  ; ?>   
@foreach($video_news as $video_new)
@if($sv_stop <4 )
<div class=" col-md-6  col-xs-12 col-sm-12 sub-First  hover">
        

    <div class="containt-sub-bottom">
      
  <a href="{{route('new_details',$video_news[$sv_stop]->id)}}" ><img src="https://img.youtube.com/vi/{{$video_news[$sv_stop]->post_video}}/maxresdefault.jpg"></a>
            <div class="subFirst-item" id="subFirst-item">

              <h3>
          <spa><i class="fa fa-video-camera" aria-hidden="true"></i>
</spa><a href="{{route('new_details',$video_news[$sv_stop]->id)}}">Goals – {{$video_news[$sv_stop]->post_headline}}</a></h3>

  <span class="date">{{date('M j, Y', strtotime($post->created_at))}}</span>
              <span class="comment">0 Comment</span>
            </div>
      
    </div>  
    
 </div>
<?php $sv_stop = $sv_stop +1 ; ?>
@endif
@endforeach
<!-- div id content -->
    </div>
      </div>
    </div>
@endif    
<!--end video section-->

<?php $section_count = $section_count + 1 ; ?>
@endif
@endforeach    

@endsection