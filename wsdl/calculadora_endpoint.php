<?php
require_once '../calculadora_server_class.php';

$server = new SoapServer('http://localhost/calculadora/wsdl/calculadora_service_definition.wsdl');
$server->setClass('Calculadora');
$server->handle();
