<!DOCTYPE html> <html>
<head> <meta charset="utf-8">
<title>Welcome</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body class="container mt-5">
	Bem vindo: <?php echo $_POST["name"]; ?> <br>
	Seu endereço de E-mail é: <?php echo $_POST["email"]; ?> <br>
</body>
</html>