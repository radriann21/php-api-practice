<?php
  const API_URL = "https://whenisthenextmcufilm.com/api";

// servicio de la api
  function apiCall() {
    $ch = curl_init(API_URL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    if(curl_errno($ch)) {
      echo 'Error en cURL ' . curl_error($ch);
    }
    curl_close($ch);

    return json_decode($response, true);
  }
?>