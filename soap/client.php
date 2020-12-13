<?php
// Encrypted Client

$cli = new SoapClient(null, //nu foloseste WSDL(parametru obligatoriu)
                    array(
                        'uri' => 'http://localhost/xml/soap/',
                        'location' => 'http://localhost/xml/soap/server.php',
                        'encoding' => 'utf-8'
                    ));
$auth = array(
    'user' => '123456789',
    'password' => 'pass'
    );
$auth = json_encode($auth);

//Metoda 1
// $h = new SoapHeader('http://localhst/xml/soap/', 'auth', $auth, false, SOAP_ACTOR_NEXT);
// $cli->__setSoapHeaders(array($h));
// try {
//     echo "Accesez serverul \n <br />";
//     echo $cli->say();
// }catch(Exeception $e) {
//     echo "eroare", $e->getMessage();
// }

//Metoda 2
$return = $cli->__soapCall("hello", array("world"));
echo "<pre>";
echo "\nReturning value of __soapCall() call: ".$return;

echo "\nDumping request headers:\n" . $cli->__getLastRequestHeaders();

// echo "\nDumping request:\n".$cli->__getLastRequest();

// echo "\nDumping response headers:\n".$cli->__getLastResponseHeaders();

// echo "\nDumping response:\n".$cli->__getLastResponse();
