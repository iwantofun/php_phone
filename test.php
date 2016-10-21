<?php


include 'geo_lib/phone_geo.php';

$ret = GeoPhone::find('15901511234');


print_r( $ret );

