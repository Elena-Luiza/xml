<?php

$options = array(
    'trace' => true
);
$client = new SOAPClient('htttp://localhost/xml/soap/calculator/server.php?wsdl', $options);

var_dump($client->Average(['num1' => 10, 'num2' => 20])-> Result);
