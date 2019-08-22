<?php

/**
 * Configuration for database connection
 */

$host       = "172.16.22.21";                          // change to server IP address or domain
$username   = "scordle";                               // change to db username
$password   = "Summer20!9";                            // change to db password
$dbname     = "csc272_scratchpad";                     // change your db name
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

