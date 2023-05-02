<!doctype html>
<html lang="en">
  <head>
  	<title>SKPI UNTIRTA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{asset('/css/template/style.css')}}">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
		@yield('css')
  </head>
  <body>
		<div class="wrapper d-flex align-items-stretch">
			@include('layouts.sidebar')

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        @yield('content')
      </div>
		</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="{{asset('/js/template/jquery.min.js')}}"></script>
    <script src="{{asset('/js/template/popper.js')}}"></script>
    <script src="{{asset('/js/template/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/template/main.js')}}"></script>
	@yield('js')
  </body>
</html>