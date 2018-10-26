<?php
include('http.php');
$request = new HttpRequest();
$request->setUrl('http://139.59.34.103:6000/getsentiment');
$request->setMethod(HTTP_METH_POST);

$request->setHeaders(array(
  // 'Postman-Token' => '92220981-bb22-48e8-b6fc-9be538967cfb',
  'Cache-Control' => 'no-cache',
  'Content-Type' => 'application/json'
));

$request->setBody('["i a good" , "i am bad" , "i rock but life rocks"]');

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}

?>
