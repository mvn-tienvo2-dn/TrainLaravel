<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>@yield('title') </title>
  <base href="{{asset('/')}}/">
  <link rel="stylesheet" href="css/bootstrap.min1.css" >  
  <link rel="stylesheet" href="css/mystyle.css" >
  <meta name="csrf-token" content="{{ csrf_token() }}" />       
   </style>
</head>
<body>
  @yield('main')
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min1.js"></script>
</body>
