@section('title')
Add New News
@endsection
        
        <div id="error"  class="hidden alert alert-danger">
            <p id="name_error"></p>
            <p id="email_error"></p>
            <p id="password_error"></p>

        </div>


<div id="content">

<div class="col-md-6">
         <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add News</h3>
            </div>
            <form role="form">
{!! Form::open(['files'=>true])!!}
<div class="box-body">
 <div class="form-group">
{!!Form::label('News Headline')!!}
{!!Form::textarea('Headline',null, ['placeholder'=>'Enter Headline' ,'id'=>'Headline', 'class'=>'form-control'] )!!}
                </div>

<div class="form-group">
{{form::label('News Category' , 'News Category:') }}
  <select id="post_category" class="form-control" >
   <option  value='' >Choose  Category</option>
              @foreach($sections as $section)
              <option value='{{$section->id }}' >{{$section->name}}</option>
              @endforeach

  </select>
</div>
<div class="form-group">

{{form::label('News photo' , 'News photo')}}
{!! form::file('post_image' , null , ['id'=>'post_image','class' => 'form-control'])!!}

<br/>
</div>

</div>
<div class="form-group">
{{form::label('News video' , 'News video')}}
{!! form::text('post_video' , null , ['placeholder'=>'Enter Video URL' ,'id'=>'video_url','class'=>'form-control'])!!}
<br/>
</div>



<div class="form-group">
{{form::label('News content' , 'News content')}}
{!!Form::textarea('content',null, ['placeholder'=>'Enter content' ,'id'=>'post_content', 'class'=>'form-control'] )!!}
</div>
<div class="form-group">
{{form::label('News Tags' , 'News Tags')}}
{{form::text('post_tags' , null ,['placeholder'=>'Enter Tags' ,'id'=>'tags', 'class'=>'form-control'])}}
</div>




<div class="box-footer">
{!!Form::button('submit' , ['class'=>'btn btn-primary' , 'id'=>'post'])!!}
</div>
              {!! form::close()!!}
          </div>


</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
$('#post').click(function(){
var post_headline = $('#Headline').val()
var post_category = $('#post_category').val() 
var post_video= $('#video_url').val()
var post_content = $('#post_content').val()
var post_tags = $('#tags').val()
var post_photo = document.getElementsByName("post_image")[0].files[0];
var formData = new FormData();
formData.append("post_headline", post_headline);
formData.append("post_category", post_category);
formData.append("post_video", post_video);
formData.append("post_content", post_content);
formData.append(" post_tags", post_tags);
if(post_photo) {
formData.append("post_photo", post_photo);
}else{
  formData.append("post_photo", "No Photo");
}
var url = '{{route('post.store')}}'
var  token = $('input[name=_token]').val();
$.ajax({
url:url,
type:'POST',
data:formData,
headers: {'X-CSRF-TOKEN': token},
cache: false,
processData: false,  
contentType: false, 
success:function(data){

$('#content').html(data);
}
,error:function(data){
var errors = data.responseJSON;
console.log(errors)
  }

})


  })
</script>
