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
			<nav id="sidebar" class="p-3">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
	  		<h1><a href="/" class="logo">SKPI</a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="/"><span class="fa fa-home mr-3"></span> Homepage</a>
          </li>
          <li>
              <a href="/submissions"><span class="fa fa-paper-plane mr-3"></span> Submissions</a>
          </li>
          <li>
            <a href="/prodi/user"><span class="fa fa-user mr-3"></span> Users</a>
          </li>
          <li>
            <a href="/prodi/skpi"><span class="fa fa-sticky-note mr-3"></span> SKPI</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-plane mr-3"></span> Settings</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-plane mr-3"></span> Information</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        @yield('content')
      </div>
		</div>

    <script src="{{asset('/js/template/jquery.min.js')}}"></script>
    <script src="{{asset('/js/template/popper.js')}}"></script>
    <script src="{{asset('/js/template/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/template/main.js')}}"></script>
	@yield('js')
  </body>
</html>