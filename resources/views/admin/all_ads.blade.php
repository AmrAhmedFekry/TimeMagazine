@section('title')
All Ads 
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
                    Name
                   </th>
                   <th>
                    Ad image 
                   </th>
                  
                </tr>
            </thead>


            <tbody>
                @foreach($ads as $ad)
                  <tr>
                    <th> {{$ad->id}} </th>
                    <td> <p>{{$ad->ad_name}} </p></td>
           <td> <img height="100" width="200" src='/images/{{$ad->ad_image}}'></td>


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

    

