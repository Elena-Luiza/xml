<?php

class Calculator {
    public function Average ($parameters)
    {
        $num1 = $parameters->num1;
        $num2 = $parameters->num2;

        return self::AverageResponse(($num1 + $num2) / 2);
    }

    public function AverageResponse ($message)
    {
        return ['Result' => $message];
    }
}

$classmap = [
    'in' => 'in'
];
$server = new SOAPServer('http://localhost/soaptest/calculator/Calculator.wsdl', array(
    'soap_version' => SOAP_1_2,
    'style' => SOAP_RPC,
    'use' => SOAP_LITERAL,
    'classmap' => $classmap
));

$server->setClass('Calculator');
$server->handle();