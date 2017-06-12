<div class="row threed-section">
  <div class="start-content">
    <span href="#" class="span-featured2">Top Stories</span>

    <div class="carousel carousel-multiItem slide" id="carousel-itemm">
      <div class="carousel-inner">
<?php $var = 1 ; ?>
@foreach($top_stories as $top_storie)
@if($var == 1)
 <div class="item active">
@else
 <div class="item"> 
@endif
  <div class="col-xs-12 col-sm-4 col-md-4 hover">
  @if($top_storie->post_photo == 'No Photo')
      <a href="{{route('new_details',$top_storie->id)}}" ><img src="https://img.youtube.com/vi/{{$top_storie->post_video}}/maxresdefault.jpg" class="img-responsive"></a>
            <div class="data-enter" id="data-enter">
 @else
    <a href="{{route('new_details',$top_storie->id)}}" ><img src="/images/{{$top_storie->post_photo}}" class="img-responsive"></a>
            <div class="data-enter" id="data-enter">
  @endif
        

              <h3><a href="{{route('new_details',$top_storie->id)}}">{{substr($top_storie->post_headline,0,25)}}</a></h3>

              <span class="date">{{date('M j, Y', strtotime($top_storie->created_at))}}</span>
              <span class="comment">0 Comment</span>
            </div>
          </div>
  </div>
<?php $var = $var+1 ; ?>
@endforeach
       
    
     
      <a class="left carousel-control" href="#carousel-itemm" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
      <a class="right carousel-control" href="#carousel-itemm" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
    </div>
  </div>
</div>	


