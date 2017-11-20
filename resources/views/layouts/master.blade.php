<!doctype html>
<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"/>  
        <script src="https://use.fontawesome.com/c7af2f3a59.js"></script>
    </head>
    <body>
    	@include('includes.header') 
      	<div class="container">
       		@yield('content')
      	</div>
    </body>
</html>
