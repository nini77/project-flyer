<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Project Flyer</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/libs.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
</head>
<body>



 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Projectflyer</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/flyersIndex">street</a></li>
            <li><a href="/3310811/Mineki Sekiguchi">Mineki Sekiguchi</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

	<div class="container">
		@yield('content')
	</div>
	<script src="/js/libs.js"></script>
	@yield('scripts.footer')

	@include('flash');
</body>
</html>