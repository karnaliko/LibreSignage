<?php

/*
*  !!BUILD_VERIFY_NOCONFIG!!
*/

/*
*  ====>
*
*  *Get the defined API error codes. This endpoint doesn't require
*  or consume the API rate quota.*
*
*  Return value
*    * codes = A dictionary of error codes.
*
*  <====
*/

require_once($_SERVER['DOCUMENT_ROOT'].'/api/api.php');

$API_ERR_CODES = new APIEndpoint(array(
	APIEndpoint::METHOD		=> API_METHOD['GET'],
	APIEndpoint::RESPONSE_TYPE	=> API_RESPONSE['JSON'],
	APIEndpoint::REQ_QUOTA		=> FALSE,
	APIEndpoint::REQ_AUTH		=> FALSE
));
api_endpoint_init($API_ERR_CODES);

$API_ERR_CODES->resp_set(array('codes' => API_E));
$API_ERR_CODES->send();
