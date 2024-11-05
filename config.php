<?php
	/**
	 *  GRUSHER TRAP HANDLER CONFIG FILE
	 *
	 *  @author: gviabcua <gviabcua@gmail.com>
	 *
	 **/

	// Grusher api key and url
	$GRUSHER_API_KEY = "key";
	$GRUSHER_API_URL = "http://192.168.1.1/api";

	// Allow using ignore list
	$config_use_ignore_list   = true;

	// Writing trap to file (exept trap in ignore list)
	$config_write_trap_to_log = false;
	// log file name
	$config_log_filename      = '/tmp/trap_log.txt';

	// Writing all requests
	$config_write_all_trap_to_log = false;
	// log file name
	$config_all_log_filename      = '/tmp/trap_log_'.date("Y-m-d").'.txt';
?>
