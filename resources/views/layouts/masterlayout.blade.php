<!DOCTYPE html>
<html>
<head>
	<title>
		Welcome - @yield('title','to 3UI')
	</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{url('css/style.css')}}">
	@stack('script')
</head>

<body>
	<nav class="navbar background">
		<ul class="nav-list">
			<div class="logo">
				<img src="{{url('images/logo.png')}}">
			</div>
			<li><a href="{{route('home')}}">Home</a></li>
			<li><a href="">Blog</a></li>
			<li><a href="">About Us</a></li>
			<li><a href="">Users</a></li>
		</ul>

		<div class="rightNav">
			<input type="text" name="search" id="search">
			<button class="btn btn-sm">Search</button>
		</div>
	</nav>

	<section class="firstsection">
		<div class="box-main">
			<div class="firstHalf">
       
        @hasSection('content')
        @yield('content')   
        @else
            <h2>No Content Found</h2>
         @endif
				 
				 @stack('vuScript')
				 @stack('generalScript')
			</div>
		</div>
	</section>
	<footer class="background">
		<p class="text-footer">
			Copyright ©-All rights are reserved
		</p>
	</footer>
</body>

</html>
