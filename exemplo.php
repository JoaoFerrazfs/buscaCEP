<?php

require_once './vendor/autoload.php';

require_once './src/Search.php';

use joaoFerrazfs\digitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromipcode('32900000');

print_r($resultado);

?>
