<?php
	/*
	*  API endpoint for getting the current user's data.
	*
	*  Return value:
	*    A JSON encoded dictionary with the following data.
	*      * user **
	*        * user     = The name of the user.
	*        * groups   = The groups the user is in.
	*      * error      = An error code or API_E_OK on success. ***
	*
	*    **  (Only exists if the API call was successful.)
	*    *** (The error codes are listed in api_errors.php.)
	*/

	require_once($_SERVER['DOCUMENT_ROOT'].'/common/php/config.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/api/api.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/api/api_error.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/common/php/auth/auth.php');

	$USER_GET = new APIEndpoint(
		$method = API_METHOD['GET'],
		$response_type = API_RESPONSE['JSON'],
		$format = NULL
	);
	api_endpoint_init($USER_GET);

	session_start();
	auth_init();
	if (!auth_is_authorized(NULL, NULL, FALSE)) {
		api_throw(API_E_NOT_AUTHORIZED);
	}

	$u = _auth_get_user_by_name(auth_session_user()->get_name());
	if ($u == NULL) {
		api_throw(API_E_INVALID_REQUEST);
	}
	$ret_data = array(
		'user' => array(
			'user' => $u->get_name(),
			'groups' => $u->get_groups()
		)
	);
	$USER_GET->resp_set($ret_data);
	$USER_GET->send();
