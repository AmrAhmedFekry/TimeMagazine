        <div id="error"  class="hidden alert alert-danger">
            <p id="name_error"></p>

        </div>

<div class="col-md-6">
  <div class="well">

{!! Form::open()!!}
<h2>New Section</h2>
{!! form::label('section' , 'Name:') !!}
{!! form::text('section' , null , ['class' => 'form-control'])!!}
{!!form::button('create new section' , ['class'=>'btn btn-primary btn-block','id'=>'save' ]) !!}
 {!!Form::close() !!}
  </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
<script type="text/javascript">
$('#save').click(function(){
var name = $('#section').val()
var url = '{{route('section.store')}}'
var data ={name:name}
var  token = $('input[name=_token]').val();
$.ajax({
url:url,
data:data,
datatype: 'JSON',
headers: {'X-CSRF-TOKEN': token},
type:'POST',
success:function(data){
	$('#content').html(data);
},
error:function(data){
	var errors = data.responseJSON;
if (errors.name) {
  $('#error').removeClass('hidden')
  $('#name_error').text(errors.name)
}

}

});
});
</script>
