<?php
    # tu mozna dodac katalog jezeli jest potrzebny do path
    $global_domain = "";
    if ( $_SERVER['SERVER_NAME'] == "marzec.eu" ) {
        $global_domain = "/mma";
    }
    # kwota opłaty zapisana w groszach 10.000gr == 100PLN
    $ammount_to_pay = 10000;