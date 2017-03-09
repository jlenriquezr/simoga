<?php

const PRODUCCION = false; # En desarrollo = false - En producción = true

if (!PRODUCCION) {
    ini_set('error_reporting', E_ALL | E_NOTICE | E_STRICT);
    ini_set('display_errors', '1');
} else {
    ini_set('display_errors', '0');
}
