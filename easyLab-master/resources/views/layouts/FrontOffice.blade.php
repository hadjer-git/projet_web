<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('easy.png')}}"/>

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('labo/front_office/font-awesome-4.7.0\css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('labo/front_office/bootstrap-3.3.7-dist/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('labo/front_office/MaterialDesign-Webfont-master\css\materialdesignicons.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('labo/front_office/css/style.css')}}">
<!--===============================================================================================-->
</head>
<body >
	
	@yield('content')
	
	
<!--===============================================================================================-->
	<script src="{{asset('labo/front_office/js/core.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('labo/front_office/js/script.js')}}"></script>
<!--===============================================================================================-->
	

</body>
</html>