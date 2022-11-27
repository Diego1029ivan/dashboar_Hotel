<?php
    
    $urlapi="http://localhost:75/api/";
	$curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => $urlapi.'hoteles/3',
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
	$data_hotel = json_decode($response); 

    

    //var_dump($data);
    //echo($roles); 
    //die;
    //var_dump($data);
?>