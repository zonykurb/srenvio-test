<?php
//Change these values below.

define('FEDEX_ACCOUNT_NUMBER', '510087780');
define('FEDEX_METER_NUMBER', '119009727');
define('FEDEX_KEY', 'O21wEWKhdDn2SYyb');
define('FEDEX_PASSWORD', 'db0SYxXWWh0bgRSN7Ikg9Vunz');


if (!defined('FEDEX_ACCOUNT_NUMBER') || !defined('FEDEX_METER_NUMBER') || !defined('FEDEX_KEY') || !defined('FEDEX_PASSWORD')) {
    die("The constants 'FEDEX_ACCOUNT_NUMBER', 'FEDEX_METER_NUMBER', 'FEDEX_KEY', and 'FEDEX_PASSWORD' need to be defined in: " . realpath(__FILE__));
}
