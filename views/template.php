<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Sistema de Estoque</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
	<title>Sistema Estoque</title>
</head>

<body>
	<?php if(isset($viewData['menu'])): ?>
	<div class="header">
		<nav>
			<?php foreach($viewData['menu'] as $url => $menutitle): ?>

			<?php endforeach; ?>
		</nav>
	</div>
	<div class="container">
		<?php
		$this->loadViewInTemplate($viewName, $viewData);
		?>
	</div>
</body>
<script src="<?php echo BASE_URL ?>assets/js/jquery.min.js"></script>

</html>