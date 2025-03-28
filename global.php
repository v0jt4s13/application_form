<?php
    # tu mozna dodac katalog jezeli jest potrzebny do path
    $global_domain = "";
    $dataFolder = '/var/www/secure_data';
    if ( $_SERVER['SERVER_NAME'] == "mma.local" ) {
        $dataFolder = '/home/vs/mma/secure_data';
    }
    if ( $_SERVER['SERVER_NAME'] == "marzec.eu" ) {
        $global_domain = "/mma";
    }
    # kwota opłaty zapisana w groszach 12.000gr == 120PLN
    $ammount_to_pay = 12000;