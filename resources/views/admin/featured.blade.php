@section('title')
All News 
@endsection

<div id="content">

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    


 <div class="row">
    <div class="col-md-8">
        <h1>All Ads</h1>
          <table class="table">
            <thead>
                
                <tr>
                    <th>
                        id
                    </th>
                   <th>
                    Headline 
                   </th>
                   <th>
                    News image 
                   </th>
                   <th>
                    Section 
                   </th>
                  <th>
                    Content 
                   </th>
                   <th>
                    post_tags 
                   </th>
                   <th>
                    Make This New Featured  
                   </th>



                  
                </tr>
            </thead>


            <tbody>
                @foreach($posts as $post)
                  <tr>
                    <th> {{$post->id}} </th>
                    <td> <p>{{$post->post_headline}} </p></td>
                    <td> <img height="100" width="200" src='/images/{{$post->post_photo}}'></td>
                    <th> {{$post->post_category}} </th>
                    <td> <p>{{ substr($post->post_content, 0, 50).'...' }} </p></td>
                    <td> <p>{{$post->post_tags}} </p></td>




<td> 
<p>
@if($post->make_featured == 1)
<input   class="check featured"  type="checkbox" value="{{$post->id}}">
<script type="text/javascript">
  $('.check').prop('checked', true);
</script>
@else
<input  class="featured"  type="checkbox" value="{{$post->id}}">
@endif

</p>
</td>



                   </tr>
                @endforeach


            </tbody>


          </table>
    </div>

    

<script type="text/javascript">
$('.featured').click(function(){
var id = $(this).val();
var data = {id:id} ;
var  token = $('input[name=_token]').val();
var url = '{{route('makefeatured')}}'
$.ajax({
  headers: {'X-CSRF-TOKEN': token},
  url:url, 
  type:'POST',
  data:data,
  datatype:'JSON',
  success:function(data){
    jsondata = JSON.parse(data);
    alert(jsondata)
  }
})


  })
</script>