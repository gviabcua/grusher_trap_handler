<?php
/**
 *  GRUSHER TRAP HANDLER IGNORE LIST FILE
 *
 *  @author: gviabcua <gviabcua@gmail.com>
 *
 *  This is the sample ignore list
 *  
 *  List is PHP array and separated via comma. All this OIDs will not send Grusher
 *
 **/

$config_ignore_list = [
        // GENERAL TRAPS

        #'IF-MIB::hwLoadAndBackupTrapsOID',     '1.3.6.1.6.3.1.1.5.0', // hwLoadAndBackupTrapsOID
        #'IF-MIB::coldStart',                   '1.3.6.1.6.3.1.1.5.1', // coldStart
        #'IF-MIB::warmStart',                   '1.3.6.1.6.3.1.1.5.2', //warmStart
        #'IF-MIB::linkDown',                    '1.3.6.1.6.3.1.1.5.3', // linkDown
        #'IF-MIB::linkUp',                      '1.3.6.1.6.3.1.1.5.4', //linkUp
        #'IF-MIB::authenticationFailure',       '1.3.6.1.6.3.1.1.5.5', //authenticationFailure
        #'IF-MIB::egpNeighborLoss',       '1.3.6.1.6.3.1.1.5.6', //egpNeighborLoss
        #'1.0.8802.1.1.2.0.0.1', //lldp changed



        // BY DEVICE VENDOR

        //Edge Core
        '1.3.6.1.4.1.259.10.1.45.2.1.0.208', //Edge Core fileCopyTrap
        '1.3.6.1.4.1.259.10.1.27.2.1.0.107', //cpuUtiFallingThreshold
        '1.3.6.1.4.1.259.10.1.27.2.1.0.108', //cpuUtiRisingThreshold
        '1.3.6.1.4.1.259.10.1.27.2.1.0.200', //log in/out
        '1.3.6.1.4.1.259.10.1.27.2.1.0.201', //log in/out
        '1.3.6.1.4.1.259.10.1.27.2.1.0.202', //log in/out
        '1.3.6.1.4.1.259.10.1.27.2.1.0.208', //fileCopyTrap

        //foxgate dcn
        '1.3.6.1.4.1.6339.101.114.1', //"Dying gasp : Power off!"

        //tp-link
        '1.3.6.1.4.1.11863.6.4.28.1', //"CPU RISING THRESHOLD: Total CPU Utilization is 90%"

        //ZTE
        // This is list of traps what can spam you system
        // Comment if you know what are you doing
        '1.3.6.1.4.1.3902.1012.3.50.7.1', // GPON OLT LOSi
        '1.3.6.1.4.1.3902.1012.3.45.', //?? Affected ONU
        '1.3.6.1.4.1.3902.1082.500.10.3.1.', //?? Affected ONU
        '1.3.6.1.4.1.3902.1082.500.20.3.1.', //?? Affected ONU
        '1.3.6.1.4.1.3902.1015.1010.1.10.1.', //?? Affected ONU
        '1.3.6.1.4.1.3902.1015.1010.1.10.1.13', //??
        '1.3.6.1.4.1.3902.1015.1010.1.10.1.14', //??
        '1.3.6.1.4.1.3902.1015.1010.1.10.3.18', //??The default PON name
        '1.3.6.1.4.1.3902.1015.1010.1.10.3.19', //??
        '1.3.6.1.4.1.3902.1015.2.2.3.18', //??
        '1.3.6.1.4.1.3902.1015.2.2.3.19', //??
        '1.3.6.1.4.1.3902.1015.2.2.3.22', //??
        '1.3.6.1.4.1.3902.1015.2.2.3.28', //??
        '1.3.6.1.4.1.3902.1015.2.2.3.29', //??
        '1.3.6.1.4.1.3902.1015.2.2.3.40', //??
        '1.3.6.1.4.1.3902.1082.500.1.3.1.1', //??zxAnPonRxPowerHighAlm Alarm for received power.
        '1.3.6.1.4.1.3902.1082.500.1.3.1.2', //??zxAnPonRxPowerHighClr Restore of alarm for received power.
        '1.3.6.1.4.1.3902.1015.1.2.7.2', //??
        '1.3.6.1.4.1.3902.1015.1010.1.10.4.3', //??
        '1.3.6.1.4.1.3902.1015.1010.1.10.4.3.20', //??
        '1.3.6.1.4.1.3902.1015.1010.1.10.4.3.19', //??

];

?>
