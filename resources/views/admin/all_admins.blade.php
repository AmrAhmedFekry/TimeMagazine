@section('title')
All Admins 
@endsection

<div id="content">

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    


 <div class="row">
    <div class="col-md-8">
        <h1>All Admins</h1>
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
                    email
                   </th>
                  
                </tr>
            </thead>


            <tbody>
                @foreach($admins as $admin)
                  <tr>
                    <th> {{$admin->id}} </th>
                    <td> <p>{{ $admin->name }} </p></td>
                     <td> <p>{{ $admin->email }} </p></td>
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

    

<script type="text/javascript">
$('.Delete').click(function(){
alert('okii')

});
</script>