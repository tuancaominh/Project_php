<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<title>Admin</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

	<link rel="stylesheet" href="{{ asset("assets/stylesheets/styles.css") }}" />
	<link rel="stylesheet" href="{{ asset("assets/stylesheets/dataTables.bootstrap.css") }}" />
</head>
<body>
	@yield('body')
	@yield('script_extend')
</body>
</html>