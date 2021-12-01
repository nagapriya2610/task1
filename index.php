<!DOCTYPE html>
<html>
<head>
	<title>Factorial and prime Number</title>
	<link rel="shortcut icon" href="image/php-icon.png" type="image/png">  
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body class="mt-5">
<center>
<h2>Factorial and Prime or not</h2>
<form method="POST" name="myform">
	<table cellpadding="10px" cellspacing="10px"  class="table1 mt-5 border border-secondary">
		<tr>
			<td>Enter Any Number</td>
			<td><input type="text" name="number" autocomplete="off" value="<?php if(isset($_POST['number'])) echo $_POST['number']; ?>" id="num" pattern="[0-9]{ }" title="Please enter only numbers"></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="submit" value="Factorial" class="btn btn-primary" onclick="return validate();">
				<input type="submit" name="submit" value="Prime Number" class="btn btn-primary" onclick="return validate();">
				<input type="submit" name="submit" onclick="document.getElementById('num').value=''" class="btn btn-primary" value="Clear">
			</td>
		</tr>
		<tr>
			<td colspan="2" class="text-success fw-bold"><?php include('process.php');?></td>
		</tr>
	</table>
</form>
</center>
<script src="js/script.js"></script>
</body>
</html>