        <li class="active treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Admin Area</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a id="add_admin"><i class="fa fa-circle-o"></i> Add New Admin</a></li>
            <li class="active"><a id="all_admins"><i class="fa fa-circle-o"></i> All Admins</a></li>
          </ul>
        </li>


<li class="active treeview">
          <a href="#">
            <i class="fa fa-flag"></i> <span>Sections Area</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a id="add_section"><i class="fa fa-circle-o"></i> Add New Section</a></li>
            <li class="active"><a id="all_sections"><i class="fa fa-circle-o"></i> All Section</a></li>
          </ul>
  </li>

  <li class="active treeview">
          <a href="#">
            <i class="fa fa-trademark"></i> <span>Advertises Area</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a id="add_ad"><i class="fa fa-circle-o"></i> Add New Advertise</a></li>
            <li class="active"><a id="all_ads"><i class="fa fa-circle-o"></i> All Advertises</a></li>
          </ul>
  </li>

<li class="active treeview">
          <a href="#">
            <i class="fa fa-map"></i> <span>News Area</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a id="add_news"><i class="fa fa-circle-o"></i> Add New News</a></li>
            <li class="active"><a id="all_news"><i class="fa fa-circle-o"></i> All News</a></li>
          <li class="active"><a id="Featured"><i class="fa fa-circle-o"></i> Featured News</a></li>
          <li class="active"><a id="Breaking"><i class="fa fa-circle-o"></i> Breaking News</a></li>



          </ul>
</li>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>

<script type="text/javascript">
$('#add_admin').click(function(){
var url = '{{route('member.create')}}'
$.ajax({
url:url,
type:'GET', 
success:function(res){
  $('#content').html(res);
}
});
});

$('#all_admins').click(function(){
var url = '{{route('member.index')}}'
$.ajax({
url:url,
type:'GET',
success:function(res){
$('#content').html(res);
}
});

});

$('#add_section').click(function(){
var url = '{{route('section.create')}}'
$.ajax({
url:url,
type:'GET',
success:function(res){
  $('#content').html(res)
}
});

})
$('#all_sections').click(function(){
var url = '{{route('section.index')}}'
$.ajax({
url:url,
type:'GET',
success:function(data){
 $('#content').html(data) 
}
});
});


$('#add_ad').click(function(){
  var url = '{{route('ad.create')}}'
$.ajax({
url:url,
type:'GET',
success:function(data){
  $('#content').html(data)
}

});
})


$('#all_ads').click(function(){
  var url = '{{ route('ad.index')}}'
  $.ajax({
    url:url,
    type:'GET',
    success:function(data){
      $('#content').html(data)
    }
  })
})

$('#add_news').click(function(){
var url = '{{route('post.create')}}'
$.ajax({
  url:url ,
  type:'GET',
  success:function(data){
    $('#content').html(data)
  }
})
})

$('#all_news').click(function(){
  var url = '{{route('post.index')}}'
  $.ajax({
    url:url, 
    type:'GET',
    success:function(data){
      $('#content').html(data)
    }
  })
})

$('#Featured').click(function(){
var url = '{{route('featured')}}'
$.ajax({
  url:url,
  type:'GET',
  success:function(data){
    $('#content').html(data)
  }
})
});

$('#Breaking').click(function(){
var url = '{{route('breaking')}}'
$.ajax({
  url:url,
  type:'GET',
  success:function(data){
    $('#content').html(data)
  }
})


})



</script>