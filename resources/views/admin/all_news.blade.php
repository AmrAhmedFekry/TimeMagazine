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
                    News Media 
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



                  
                </tr>
            </thead>


            <tbody>
                @foreach($posts as $post)
                  <tr>
                    <th> {{$post->id}} </th>
                    <td> <p>{{$post->post_headline}} </p></td>
                   @if($post->post_category == 'Video')
<td> <iframe src="https://www.youtube.com/embed/{{$post->post_video}}"
   width="200" height="200" frameborder="0" allowfullscreen></iframe></td>
                   @else
                  <td> <img height="100" width="200" src='/images/{{$post->post_photo}}'></td>
                   @endif 
                    <th> {{$post->post_category}} </th>
                    <td> <p>{{ substr($post->post_content, 0, 50).'...' }} </p></td>
                    <td> <p>{{$post->post_tags}} </p></td>




<td> 
<p>
<a url = "#"  class="Edit btn btn-default btn-sm"  > Edit </a> 

</p>
</td>

<td>
<td> 
<p>
<a  url="#"  class="Delete btn btn-danger btn-sm"> Delete </a> 
</p>
</td>
</td>


                   </tr>
                @endforeach


            </tbody>


          </table>
    </div>

    

