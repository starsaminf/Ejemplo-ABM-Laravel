<!DOCTYPE html>
<html>
<head>
	<title>@yield("titulo")</title>
	<script type="text/javascript" src=http://code.jquery.com/jquery-1.12.4.js></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">

	<script src="http://t4t5.github.io/sweetalert/dist/sweetalert-dev.js"></script>
	<link rel="stylesheet" href="http://t4t5.github.io/sweetalert/dist/sweetalert.css">	
</head>
<body>
	@yield("contenido")
</body>
@yield("scripts")
</html>