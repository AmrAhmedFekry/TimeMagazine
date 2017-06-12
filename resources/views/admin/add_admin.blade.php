@section('title')
Add New Admin
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
              <h3 class="box-title">Add New Admin</h3>
            </div>
            <form role="form">
            {!!Form::open()!!}
              <div class="box-body">
 <div class="form-group">
{!!Form::label('Name')!!}
{!!Form::text('Name',null, ['placeholder'=>'Enter Name' ,'id'=>'name', 'class'=>'form-control'] )!!}
                </div>

                <div class="form-group">
{!!Form::label('Email address')!!}
{!!Form::email('email',null,['placeholder'=>'Enter email' ,'id'=>'email', 'class'=>'form-control'] )!!}
                </div>
                <div class="form-group">
{!!Form::label('Password' ) !!}
 <br/>

<input type="Password" placeholder="Enter Password" class="form-control" id="password">
                 </div>
              </div>
              <div class="box-footer">
              {!!Form::button('submit' , ['class'=>'btn btn-primary' , 'id'=>'add_member'])!!}
              </div>
              {!! form::close()!!}
          </div>




</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
<script type="text/javascript">
$('#add_member').click(function(){
var name  = $('#name').val();
var email = $('#email').val();
var password = $('#password').val();

var data = {name:name,password:password,email:email};
var url = '{{route('member.store')}}';
var  token = $('input[name=_token]').val();
$.ajax({
url:url,
data:data,
datatype: 'JSON',
headers: {'X-CSRF-TOKEN': token},
type:'POST',
success:function(data){
$('#content').html(data)
},
error:function(data){
var errors = data.responseJSON;

if (errors.name) {
  $('#error').removeClass('hidden')
  $('#name_error').text(errors.name)
}
if (errors.email) {
  $('#error').removeClass('hidden')
   $('#email_error').text(errors.email)
}
if (errors.password) {
  $('#error').removeClass('hidden')
   $('#password_error').text(errors.password)

}

}
});
});

</script>
