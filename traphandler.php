<?php

/**
 * php traphandler for snmp traps
 *
 *  set configuration parameters under ./traphandler_config.php
 *
 * @author: gviabcua <gviabcua@gmail.com>
 *
 **/

include("config.php");
include("ignore_list.php");

// DO NOT TOUCH THIS
// Set variables
$trap = '';
$i    = 1;
// Getting data from stdin
while ($f = fgets(STDIN)) {
        // to one format
        $f = str_replace('iso.', '1.',$f);
        $f = str_replace(["SNMPv2-SMI::enterprises.", ".1.3.6.1.4.1."], "1.3.6.1.4.1.", $f);
        // write to trap message out
        $trap .= $f;
        // write all to logs (if needed)
        if ($config_write_all_trap_to_log) {file_put_contents($config_all_log_filename, $trap, FILE_APPEND);}
        // Check if ignore list exist
        if ($config_use_ignore_list) {
                if ($i == 4) {
                        $oid = trim(strstr($f, " "));
                        foreach ($config_ignore_list as $value) {
                                if(str_contains("/".$oid."/", $value)){
                                        die();
                                }

                        }
                }
        }
        $i++;
}

// Creating request
$data = array(
        'trap' => $trap,
        'key' => $GRUSHER_API_KEY,
        'cat' => "traper",
        'action' => "send",
);
$options = array(
        'http'     => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data),
                'timeout' => 3,
        ),
        "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
);
$context = stream_context_create($options);
$result  = file_get_contents($GRUSHER_API_URL, false, $context);

if ($config_write_trap_to_log) {
        file_put_contents($config_log_filename, $trap, FILE_APPEND);
}

