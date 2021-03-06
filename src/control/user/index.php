<?php
	require_once($_SERVER['DOCUMENT_ROOT'].'/common/php/config.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/common/php/js.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/common/php/css.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/common/php/auth/auth.php');
	web_auth(NULL, NULL, TRUE);
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
		<link rel="stylesheet" href="/common/css/nav.css">
		<link rel="stylesheet" href="/common/css/dialog.css">
		<link rel="stylesheet" href="/common/css/default.css">
		<link rel="stylesheet" href="/control/user/css/user.css">
		<title>LibreSignage User Settings</title>
	</head>
	<body>
		<?php
			require_once($_SERVER['DOCUMENT_ROOT'].NAV_PATH);
		?>
		<main class="container-fluid">
			<div class="user-settings-cont container mx-auto">
				<h2>User settings</h2>
				<!-- Username -->
				<div class="form-group w-100">
					<label class="col-form-label"
						for="user-name">
						Username
					</label>
					<input id="user-name"
						type="text"
						class="form-control"
						readonly>
					</input>
				</div>

				<!-- User groups -->
				<div class="form-group w-100">
					<label class="col-form-label"
						for="user-groups">
							Groups
					</label>
					<input id="user-groups"
						type="text"
						class="form-control"
					readonly>
					</input>
				</div>

				<!-- Password input -->
				<div id="user-pass-group>
					class="form-group w-100">
					<label class="col-form-label"
						for="user-pass">
						Password
					</label>
					<input id="user-pass"
							type="password"
						class="form-control">
					</input>
				</div>

				<!-- Password confirm input -->
				<div class="form-group w-100">
					<label class="col-form-label"
						for="user-pass-confirm">
						Confirm&nbsp;password
					</label>
					<div id="user-pass-confirm-group"
						class="p-0">
					<input id="user-pass-confirm"
							type="password"
							class="form-control">
						</input>
						<div class="invalid-feedback"></div>
					</div>
				</div>

				<!-- Save button -->
				<div class="form-group w-100">
					<input id="user-save"
						class="btn btn-primary w-100"
						type="button"
						value="Save"
							onclick="user_settings_save()">
					</input>
				</div>

				<h2>Active sessions</h2>
				<div class="form-group w-100 text-center">
					<table class="mx-auto text-left"
						id="user-sessions">
					</table>
				</div>
				<div class="form-group w-100">
					<input type="button"
						class="btn btn-danger"
						style="width: 100%"
						id="btn-logout-other"
						value="Logout other sessions">
				</div>
			</div>
		</main>
		<?php
			require_once($_SERVER['DOCUMENT_ROOT'].FOOTER_PATH);

			js_include(['jquery', 'popper', 'bootstrap']);
		?>

		<script src="/common/js/util.js"></script>
		<script src="/common/js/cookie.js"></script>
		<script src="/common/js/api.js"></script>
		<script src="/common/js/dialog.js"></script>
		<script src="/common/js/user.js"></script>
		<script src="/common/js/validator.js"></script>
		<script src="/control/user/js/user.js"></script>
	</body>
</html>
