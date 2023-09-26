<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<div class="header">
		<nav>
			<?php echo $viewData['nome']; ?>
		</nav>
	</div>
	<div class="container">
		<?php $this->loaViewInTemplate($viewName, $viewData) ?>
	</div>
</body>

</html>