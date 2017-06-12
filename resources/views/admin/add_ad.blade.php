<div id="note" class="hidden container bootstrap snippet">
    <div class="row">
      <ul class="notes">
            <li>
                <div class="rotate-1 green-bg">
                <h4 id="h4"></h4>
                <p id="mssg"></p>
                </div>
            </li>   
    </ul>  
  </div>
</div>


       <div id="error"  class="hidden alert alert-danger">
            <p id="name_error"></p>
            <p id="position_error"></p>
             <p id="image_error"></p>

        </div>

<div class="col-md-6">
  <div class="well">

{!! Form::open(['files'=>true])!!}
<h2>Add New AD</h2>
{!! form::label('ad_name' , 'Ad Name:') !!}
{!! form::text('ad_name' , null , ['class' => 'form-control'])!!}
{!! form::label('ad_position' , 'Ad position:')!!}
  <select id="ad_position" class="form-control" name="ad_position">
   <option id="first_one" value='blank' >Choose Ad Position</option>
   <option value='Header'  >Header</option>
   <option value='Side' >Side</option>
      <option value='Center' >Center</option>

  </select>
{!! form::label('ad_image' , 'Ad Image:') !!}
{!! form::file('ad_image' , null , ['class' => 'form-control'])!!}
{!!form::button('create new Ad' , ['class'=>'btn btn-primary btn-block','id'=>'save' ]) !!}
 {!!Form::close() !!}
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
$('#ad_position').on('change' , function(){
var ad_position = $('#ad_position').val()

if (ad_position == 'Header') {
  $('#note').removeClass('hidden');
  $('#h4').text('For Header Ad')
  $('#mssg').text('The Header AdImage must be in 728px * 90px to be fit')
}
if (ad_position == 'Side') {
  $('#note').removeClass('hidden');
  $('#h4').text('For Side Ad')
  $('#mssg').text('The Side AdImage must be in 300px * 300px to be fit')
}
if (ad_position == 'Center') {
  $('#note').removeClass('hidden');
  $('#h4').text('For Side Ad')
  $('#mssg').text('The Center AdImage must be in 728px * 90px to be fit')
}
if (ad_position == 'blank') {
  $('#note').addClass('hidden');
}
});

$('#save').click(function(){
var ad_name = $('#ad_name').val()
var ad_position = $('#ad_position').val()
if (ad_position == 'blank') {
var ad_position = ' ' 
}
var formData = new FormData();

formData.append("ad_name", ad_name);
formData.append("ad_image", $('#ad_image')[0].files[0]);
formData.append("ad_position", ad_position);
token = $('input[name=_token]').val();

var url = '{{route('ad.store')}}'
$.ajax({
url:url,
data:formData,
type:'POST',
headers: {'X-CSRF-TOKEN': token},
cache: false,
processData: false,  
contentType: false, 
success:function(data){
$('#content').html(data)
},
error:function(data){
var errors = data.responseJSON;
if (errors.ad_name) {
  $('#error').removeClass('hidden')
  $('#name_error').text(errors.ad_name)
}
if (errors.ad_position) {
  $('#error').removeClass('hidden')
  $('#position_error').text(errors.ad_position)
}
if (errors.ad_image) {
  $('#error').removeClass('hidden')
  $('#image_error').text(errors.ad_image)
}





}
})




});



</script>