<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta Tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Logo & Title -->
		<title>Managment System | @yield('title')</title>
        <link rel="shortcut icon" type="image/jpg" href="{{ asset('/') }}img/logo.png" />
		

		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{ asset('/') }}plugins/fontawesome-free/css/all.min.css" />		

		@yield('css')
		
		<!-- Theme style -->
		<link rel="stylesheet" href="{{ asset('/') }}css/adminlte.min.css" />
	</head>