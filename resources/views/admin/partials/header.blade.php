<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin|

  @yield('title')
  </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

   {!! Html::script('js/jquery-1.10.2.js') !!}
  <!-- Bootstrap 3.3.6 -->
  {!! Html::style('admin/bootstrap/css/bootstrap.min.css') !!}
  <!-- Font Awesome -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- Theme style -->
      {!! Html::style('admin/dist/css/AdminLTE.min.css') !!}

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
           {!! Html::style('admin/dist/css/skins/_all-skins.min.css') !!}
          {!! Html::style('admin/dist/css/parsley.css') !!}


  <!-- iCheck -->
             {!! Html::style('admin/plugins/iCheck/flat/blue.css') !!}

  <!-- Morris chart -->
               {!! Html::style('admin/plugins/morris/morris.css') !!}

  <!-- jvectormap -->
                 {!! Html::style('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css') !!}

  <!-- Date Picker -->
                   {!! Html::style('admin/plugins/datepicker/datepicker3.css') !!}

  <!-- Daterange picker -->
                     {!! Html::style('admin/plugins/daterangepicker/daterangepicker.css') !!}

  <!-- bootstrap wysihtml5 - text editor -->
                       {!! Html::style('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  @yield('header')
</head>