<?php

/**
 * php traphandler for snmp traps
 *
 *  set configuration parameters under ./traphandler_config.php
 *
 * @author: gviabcua <gviabcua@gmail.com>
 *
 * example trap:
 *   snmptrap -v 2c -c public 192.168.2.2 '' .1.3.6.1.4.1.5089.1.0.1 .1.3.6.1.4.1.5089.2.0.999 s "123456"
 *
 **/

include("config.php");
include("ignore_list.php");
// Creating request
$trap ='<UNKNOWN>
UDP: [192.168.1.1]:20000->[192.168.2.2]:162
1.3.6.1.2.1.1.3.0 148:10:46:32.29
1.3.6.1.6.3.1.1.4.1.0 1.3.6.1.4.1.3320.101.17.2.1.0.1
1.3.6.1.4.1.3320.101.9.1.1.1.444 444
1.3.6.1.2.1.2.2.1.2.444 "EPON0/12:15"
1.3.6.1.4.1.3320.101.17.1 9
1.3.6.1.6.3.18.1.3.0 192.168.1.1
1.3.6.1.6.3.18.1.4.0 "public"
1.3.6.1.6.3.1.1.4.3.0 1.3.6.1.4.1.3320.101.17.2.1';

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
echo $result;

