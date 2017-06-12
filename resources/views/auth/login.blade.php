
{!! Html::style('css/login.css') !!}

<div class="login-page">
  <div class="form">
     <form class="login-form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
      <input id="eamil" name="email" type="text" placeholder="email address"/>
      <input id="password"  name ="password" type="password" placeholder="password"/>
      <button type="submit">login</button>
    </form>
  </div>
</div>





