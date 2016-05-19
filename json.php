<?php

/**
 * @author Tran Hoang Hiep
 * @copyright 2016
 */

$inputJSON = file_get_contents('php://input');

if(empty($inputJSON)) {
	http_response_code(400);
	die(json_encode(array("error" => "No input found")));
}
$input = json_decode( $inputJSON, TRUE ); //convert JSON into array

?>