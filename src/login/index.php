<?php
	require_once($_SERVER['DOCUMENT_ROOT'].'/common/php/config.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/common/php/auth/auth.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/common/php/js.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/common/php/css.php');

	if (web_auth()) {
		header('Location: '.LOGIN_LANDING);
		exit(0);
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php
			css_include(['bootstrap', 'font-awesome']);
		?>
		<link rel="stylesheet" href="/common/css/footer.css">
		<link rel="stylesheet" href="/common/css/default.css">
		<link rel="stylesheet" href="/common/css/dialog.css">
		<link rel="stylesheet" href="/login/css/login.css">
		<title>LibreSignage Login</title>
	</head>
	<body>
		<main class="container-fluid h-100">
			<div class="form-login-container">
				<h4 class="display-4 form-login-header">LibreSignage</br>Login</h4>
				<div class="alert alert-warning" <?php
					if (empty($_GET['failed'])) {
						echo 'style="display: none"';
					}?>>
					<span>Incorrect username or password!</span>
				</div>
				<div class="container form-login">
					<div class="form-group form-row">
						<label for="input-user"
							class="col-3 col-form-label">
							Username
						</label>
						<div class="col">
							<input class="form-control"
								id="input-user"
								type="text"
								name="user"
								placeholder="Username">
						</div>
					</div>
					<div class="form-group form-row">
						<label for="input-pass"
							class="col-3 col-form-label">
							Password
						</label>
						<div class="col">
							<input class="form-control"
								id="input-pass"
								type="password"
								name="pass"
								placeholder="Password">
						</div>
					</div>
					<div class="form-group form-row">
						<div class="col">
							<input class="btn btn-primary w-100"
								id="btn-login"
								type="submit"
								value="Login">
						</div>
					</div>
					<hr/>
					<div class="form-group form-row">
						<div class="col text-left">
							<a class="link-nostyle"
								data-toggle="collapse"
								href="#collapse-adv"
								aria-expanded="false"
								aria-controls="collapse-adv">
								Advanced
								<i class="fas fa-caret-down"></i>
							</a>
						</div>
					</div>
					<div class="form-group form-row">
						<div id="collapse-adv" class="col collapse">
							<input class="form-check-input"
								type="checkbox"
								id="checkbox-perm-session">
							<label class="form-check-label"
								for="checkbox-perm-session">
								Start a display session.
							</label>
						</div>
					</div>
				</div>
			</div>
		</main>
		<?php
			require_once($_SERVER['DOCUMENT_ROOT'].FOOTER_PATH);

			js_include(['jquery', 'popper', 'bootstrap']);
		?>
		<script src="/common/js/util.js"></script>
		<script src="/common/js/dialog.js"></script>
		<script src="/common/js/cookie.js"></script>
		<script src="/common/js/api.js"></script>
		<script src="/login/js/login.js"></script>
	</body>
</html>
