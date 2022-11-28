<?php

$curl = curl_init();
$get_id=3; 
curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost:75/api/hoteles/'.$get_id,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);

$data_tipo = json_decode($response); 



?>