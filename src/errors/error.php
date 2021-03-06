<?php
	require_once($_SERVER['DOCUMENT_ROOT'].'/common/php/config.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/common/php/js.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/common/php/css.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php
			css_include(['bootstrap']);
		?>
		<link rel="stylesheet" href="/common/css/footer.css">
		<link rel="stylesheet" href="/common/css/default.css">
		<link rel="stylesheet" href="/errors/css/error.css">
		<title>403 Forbidden</title>
	</head>
	<body>
		<main role="main" class="container-fluid">
			<div id="container-error" class="container">
				<h1 class="display-3 text-center"><?php echo $ERROR_PAGE_HEADING?></h1>
				<p class="lead text-center"><?php echo $ERROR_PAGE_TEXT?></p>
			</div>
		</main>
		<?php
			require_once($_SERVER['DOCUMENT_ROOT'].FOOTER_PATH);

			js_include(['jquery', 'popper', 'bootstrap']);
		?>
	</body>
</html>
