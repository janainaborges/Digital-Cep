<?php

require_once "vendor/autoload.php";

use janai\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAdressFromZipcode('01001000');

print_r($resultado);